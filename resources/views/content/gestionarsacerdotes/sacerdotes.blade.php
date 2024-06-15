 <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
         <script src="{{ asset('js/alertify.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/alertify.min.css') }}">

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
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($tsacerdotes as $sacerdote)
        <tr>
          <td>{{ $sacerdote->ID_SACERDOTE }}</td>
          <td>{{ $sacerdote->NOMBRE }}</td>
          <td>{{ $sacerdote->APELLIDOS }}</td>
          <td>
             <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item editBtn" href="javascript:void(0);" data-id="{{$sacerdote->ID_SACERDOTE}}" data-name="{{$sacerdote->NOMBRE}}" data-apellido="{{$sacerdote->APELLIDOS}}" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bx bx-edit-alt me-1"></i> Editar</a>
                <a class="dropdown-item delete" href="javascript:void(0);" name="delete" data-id="{{$sacerdote->ID_SACERDOTE}}" data-name="{{$sacerdote->NOMBRE}}"><i class="bx bx-trash me-1"></i> Eliminar</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
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
                      <input type="text" name="NOMBRE" class="form-control" placeholder="Nombre(s)">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBackdrop" class="form-label">Apellidos</label>
                      <input type="text" name="APELLIDOS" class="form-control" placeholder="Apellidos">
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
          
            <h5>¿Esta seguro que desea eliminar sacerdote:</h5> <p class="name_eliminar"></p>
  
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

                // Mostrarlos en un formulario de edición
                $('#nombre_edit').val(parroco_name);
                $('#apellido_edit').val(parroco_apellido);
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
          $('#id_eliminar').val(parroco_id);
          $('#deleteModal').modal('show');
          $('.name_eliminar').html('');
          $('.name_eliminar').html(eliminar_name);

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

          /* $('.deleteBtn').on('click',function(){
                var eliminar_name = $(this).attr('data-name');
                 var parroco_id = $(this).attr('data-id');
                // delete any car name
                $('.name_eliminar').html('');
                // then add the new one..
                $('.name_eliminar').html(eliminar_name);
                $('#id_eliminar').val(parroco_id);
            });


            $('.deleteButton').on('click',function(){
                var id_eliminar = $(this).attr('data-id');
                var url = "";
                url = url.replace('id_eliminar',id_eliminar);

                $.ajax({
                    url: url,
                    type: 'GET',
                    contentType: false,
                    processData:false,
                    beforeSend:function(){
                        $('.deleteButton').prop('disabled', true);
                    },
                    complete: function(){
                        $('.deleteButton').prop('disabled', false);
                    },
                    success: function(data){
                            $('#deleteModal').modal('hide');
                            location.reload();
                    }
                });

            }); 

             function confirmDelete(id) {
        alertify.confirm("¿Seguro que desea eliminar?",
        function(){
            let form = document.createElement('form');
                    form.method = 'POST';
                    form.action = 'parrocos/' + id;
                    form.innerHTML = '@csrf @method("DELETE")';
                    document.body.appendChild(form);
                    form.submit();
            alertify.success('Ok');
        },
        function(){
            alertify.error('Cancelado');
        });
    } */
</script>
@endsection
