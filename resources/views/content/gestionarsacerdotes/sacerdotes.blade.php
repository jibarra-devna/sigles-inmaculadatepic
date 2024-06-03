@extends('layouts/contentNavbarLayout')

@section('title', 'Sacerdotes')

@section('content')

  <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
    <h6><span class="text-muted fw-light"><a href="">Gestionar Sacerdotes</a> / </span> Lista Sacerdotes</h6>
  
    <div style="text-align: right;">
      <a href="\laravel\siglesia-inmaculadatepic\public\librosparroquiales\agregarbautismo">
      <button type="button" class="btn btn-sm btn-primary" style="justify-content: flex-end;">
      <span class="tf-icons bx bx-plus me-1"></span>Añadir sacerdote
      </button>
    </a>
    </div>
  </div>
  <p></p>



<!-- Basic Bootstrap Table -->
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
<!--/ Basic Bootstrap Table -->

<!--/ Responsive Table -->
@endsection
