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
          <td></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
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
@endsection
