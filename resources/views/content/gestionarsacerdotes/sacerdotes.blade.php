<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

@extends('layouts/contentNavbarLayout')

@section('title', 'Sacerdotes')

@section('content')

  <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
    <h6><span class="text-muted fw-light"><a href="">Gestionar Sacerdotes</a> / </span> Lista Sacerdotes</h6>
  
    <div style="text-align: right;">
      <button type="button" class="btn btn-sm btn-primary" style="justify-content: flex-end;" data-bs-toggle="modal" data-bs-target="#btnAgregarSacerdote">
      <span class="tf-icons bx bx-plus me-1"></span>Añadir sacerdote
      </button>
    </div>
  </div>
  <p></p>



<!-- Tabla de sacerdotes -->
<div class="card">
  <h5 class="card-header">Listado de Sacerdotes</h5>
    <div class="card-body">
      <div class=" justify-content-end row">
        <div class="col-3">
          <form class="d-flex">
            <div class="input-group">
              <span class="input-group-text"><i class="tf-icons bx bx-search"></i></span>
              <input type="text" class="form-control" placeholder="Buscar..." />
            </div>
          </form>
        </div>
      </div>
    </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Sacerdote</th>
          <th>Fecha Nacimiento</th>
          <th>Titulo</th>
          <th>Inicio Periodo</th>
          <th>Fin Periodo</th>
          <th></th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tsacerdotes as $sacerdote)
        <tr>
          <td>{{ $sacerdote->nombre_sacerdote }} {{ $sacerdote->apellidos_sacerdote }}</td>
          <td>{{ date('d/m/Y', strtotime ($sacerdote->fecha_nacimiento)) }}</td>
          <td>{{ $sacerdote->titulo }}</td>
          <td>{{ date('d/m/Y', strtotime ($sacerdote->periodo_inicio)) }}</td>
          @if ($sacerdote->periodo_fin == null)
          <td class="text-center">-</td>
          @else 
          <td>{{ date('d/m/Y', strtotime ($sacerdote->periodo_fin)) }}</td>
          @endif
          <td>
             <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item editBtn" href="javascript:void(0);" data-id="{{$sacerdote->id_sacerdote}}" data-name="{{$sacerdote->nombre_sacerdote}}" 
                data-apellido="{{$sacerdote->apellidos_sacerdote}}" data-titulo="{{$sacerdote->titulo}}" data-fechaN="{{$sacerdote->fecha_nacimiento}}"
                data-periodoInicio="{{$sacerdote->periodo_inicio}}" data-periodoFin="{{$sacerdote->periodo_fin}}" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bx bx-edit-alt me-1"></i> Editar</a>
                <a class="dropdown-item delete" href="javascript:void(0);" name="delete" data-id="{{$sacerdote->id_sacerdote}}" data-name="{{$sacerdote->nombre_sacerdote}}" data-apellido="{{$sacerdote->apellidos_sacerdote}}"><i class="bx bx-trash me-1"></i> Eliminar</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="card-body">
        {{ $tsacerdotes->links() }}
  </div>
</div>
<!--/ Fin tabla de sacerdotes -->
<!-- Modal agregar sacerdotes -->
          <div class="modal fade" id="btnAgregarSacerdote" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog">
              <form method="post" class="modal-content" action="{{ route('parrocos.store') }}">
                @csrf
                <div class="modal-header">
                  <h5 class="modal-title" id="backDropModalTitle">Agregar Sacerdote</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Nombre</label>
                      <input type="text" name="nombre_sacerdote" class="form-control" placeholder="Nombre(s)">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Apellidos</label>
                      <input type="text" name="apellidos_sacerdote" class="form-control" placeholder="Apellidos">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label class="form-label">Titulo</label>
                      <select type="text" class="form-control" name="titulo" id="titulo"/>
                        <option value="">-Seleccione Titulo-</option>
                        <option value="Padre">Nuncio</option>
                        <option value="Padre">Padre</option>
                        <option value="Pbro.">Pbro.</option>
                      </select>
                    </div>
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Fecha Nacimiento</label>
                      <input type="date" name="fecha_nacimiento" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Inicio de Periodo</label>
                      <input type="date" name="periodo_inicio" class="form-control">
                    </div>
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Fin de Periodo</label>
                      <input type="date" name="periodo_fin" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
          </div>
<!-- Fin Modal agregar sacerdote -->
<!-- Modal editar sacerdotes -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog">
        <form id="editForm" class="modal-content">
                <input type="hidden" id="id_edit" name="id_edit">
                <div class="modal-header">
                  <h5 class="modal-title" id="backDropModalTitle">Editar Sacerdote</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Nombre</label>
                      <input type="text" id="nombre_edit" name="nombre_edit" value="" class="form-control" placeholder="Nombre(s)">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Apellidos</label>
                      <input type="text" id="apellido_edit" name="apellido_edit" class="form-control" placeholder="Apellidos">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label class="form-label">Titulo</label>
                      <select type="text" class="form-control" name="titulo_edit" id="titulo_edit">
                        <option value="">-Seleccione Titulo-</option>
                        <option value="Nuncio">Nuncio</option>
                        <option value="Padre">Padre</option>
                        <option value="Pbro.">Pbro.</option>
                      </select>
                    </div>
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Fecha Nacimiento</label>
                      <input type="date" name="fecha_nacimiento_edit" id="fecha_nacimiento_edit" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Inicio de Periodo</label>
                      <input type="date" name="periodo_inicio_edit" id="periodo_inicio_edit" class="form-control">
                    </div>
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Fin de Periodo</label>
                      <input type="date" name="periodo_fin_edit" id="periodo_fin_edit" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary editButton">Editar</button>
                </div>
              </form>
            </div>
          </div>
<!-- Fin Modal editar sacerdote -->
<!-- Modal eliminar sacerdotes -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Sacerdote </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <input type="hidden" id="id_eliminar" name="id_eliminar">

           <div class="row">
              <div class="col-lg">
              <div class="card-body">
               <h5>¿Esta seguro que desea eliminar sacerdote?</h5>
                <input type="text" name="ElimiarS" id="ElimiarS" class="form-control" disabled>
                <!-- <ul class="list-inline mt-0">
                 <li class="list-inline-item"></li>
                  <li class="list-inline-item name_eliminar"></li>
                  <li class="list-inline-item apellidos_eliminar"></li>
                </ul> --> 
              </div>
              </div>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" id="btnEliminar" name="btnEliminar" class="btn btn-danger">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
<!-- Fin Modal eliminar sacerdote -->
<script>
       $('.editBtn').on('click',function(){
                // obtener todos los datos que pasamos en el botón editar
                var parroco_id = $(this).attr('data-id');
                var parroco_name = $(this).attr('data-name');
                var parroco_apellido = $(this).attr('data-apellido');
                var titulo = $(this).attr('data-titulo');
                var fecha_nacimiento = $(this).attr('data-fechaN');
                var periodo_inicio = $(this).attr('data-periodoInicio');
                var periodo_fin = $(this).attr('data-periodoFin');

                // Mostrarlos en un formulario de edición
                $('#nombre_edit').val(parroco_name);
                $('#apellido_edit').val(parroco_apellido);
                $('#titulo_edit').val(titulo);
                $('#fecha_nacimiento_edit').val(fecha_nacimiento);
                $('#periodo_inicio_edit').val(periodo_inicio);
                $('#periodo_fin_edit').val(periodo_fin);
                // El id se pasa al formulario en un input oculto (hidden)
                $('#id_edit').val(parroco_id);
               
            });

        $('#editForm').submit(function(e){
                    e.preventDefault();
                    let formData = $(this).serialize();
                    $.ajax({
                        url: '{{ route("edit")}}',
                        data: formData,
                        success: function(data){
                                $('#editModal').modal('hide');
                                location.reload();
                        }
                    });
                });

        var parroco_id;

        $(document).on('click', '.delete', function(){
          parroco_id = $(this).attr('data-id');
          var eliminar_name = $(this).attr('data-name');
          var eliminar_apellidos = $(this).attr('data-apellido');
          $('#id_eliminar').val(parroco_id);
          $('#deleteModal').modal('show');
          $('.name_eliminar').html('');
          $('.name_eliminar').html(eliminar_name);
          $('.apellidos_eliminar').html(eliminar_apellidos);
          $('#ElimiarS').val(eliminar_name + " " + eliminar_apellidos );

        }); 

        $('#btnEliminar').click(function(){
          console.log(parroco_id, this);

          var url = "{{ url('parroco/eliminar')}}/"+parroco_id;
          //url.replace(':parroco_id', parroco_id);
          console.log(url);
          $.ajax({
            method:'DELETE',
            url:url,
            data:{
        "_token": "{{ csrf_token() }}",
            },
            success: function(data){
                $('#deleteModal').modal('hide');
                    location.reload();
            }
          });

        });

</script>
@endsection
