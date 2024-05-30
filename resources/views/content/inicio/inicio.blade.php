@extends('layouts/contentNavbarLayout')

@section('title', 'Inicio')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/inicio.js')}}"></script>
@endsection

@section('content')
<div class="row">
  <!-- Inicio Modulo Bautismo -->
  <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div>
        <div class="card-title list-group-item list-group-item-secondary">
          <div class="icon-card">
            <h5><img height="60px" height="60px" src="{{asset('assets/img/icons/unicons/bautismo-icon2.png')}}"> <b>BAUTISMOS</b></h5>
          </div>
        </div>
        <div class="row row-bordered g-0">
          <div class="col-md-3 text-center">
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Total</span>
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Varones</span>
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-1">Mujeres</span>
          </div>
          <div class="col-md-9 card-header">
            <h5 class=""><strong>Libro de Bautismos</strong></h5>
            <p class="">Gestione todos los bautismos en el Sistema.</p>
              <div class="col-md-12 col-lg-12">
              <div class="demo-inline-spacing">
                <button type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-book me-1"></span>Índice bautismos
                </button>
                <button type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-plus me-1"></span>Añadir bautismo
                </button>
                <br>
            <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Fin Modulo Bautismo -->
  <!-- Inicio Modulo Primera Comunión -->
  <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div>
        <div class="card-title list-group-item list-group-item-info">
          <div class=" icon-card">
            <h5><img height="60px" height="60px" src="{{asset('assets/img/icons/unicons/pcomunion-icon2.png')}}"> <b>PRIMERA COMUNIÓN</b></h5>
          </div>
        </div>
        <div class="row row-bordered g-0">
          <div class="col-md-3 text-center">
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Total</span>
          </div>
          <div class="col-md-9 card-header">
            <h5 class=""><strong>Libro de Primera Comunión</strong></h5>
            <p class="">Gestione todas las primeras comuniones en el Sistema.</p>
            <div class="col-md-12 col-lg-12">
              <div class="demo-inline-spacing">
                <button type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-book me-1"></span>Índice comuniones
                </button>
                <button type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-plus me-1"></span>Añadir comunión
                </button>
                <br>
            <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Fin Modulo Primera Comunión -->
  <!-- Inicio Modulo Comuniones -->
  <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div>
        <div class="card-title list-group-item list-group-item-danger">
          <div class="icon-card">
            <h5><img height="60px" height="60px" src="{{asset('assets/img/icons/unicons/confirmacion-icon2.png')}}"> <b>CONFIRMACIONES</b></h5>
          </div>
        </div>
        <div class="row row-bordered g-0">
          <div class="col-md-3 text-center">
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Total</span>
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Varones</span>
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-1">Mujeres</span>
          </div>
          <div class="col-md-9 card-header">
            <h5 class=""><strong>Libro de Confirmaciones</strong></h5>
            <p class="">Gestione todas las confirmaciones en el Sistema.</p>
            <div class="col-md-12 col-lg-12">
              <div class="demo-inline-spacing">
                <button type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-book me-1"></span>Índice confirmaciones
                </button>
                <button type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-plus me-1"></span>Añadir confirmación
                </button>
                <br>
            <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Fin Modulo Comuniones -->
  <!-- Inicio Modulo Matrimonios -->
  <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div>
        <div class="card-title list-group-item list-group-item-primary">
          <div class=" icon-card"> <!-- #696cff -->
            <h5><img height="60px" height="60px" src="{{asset('assets/img/icons/unicons/matrimonio-icon2.png')}}"> <b>MATRIMONIOS</b></h5>
          </div>
        </div>
        <div class="row row-bordered g-0">
          <div class="col-md-3 text-center">
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Expedientes</span>
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Total</span>
          </div>
          <div class="col-md-9 card-header">
            <h5 class=""><strong>Libro de Matrimonios</strong></h5>
            <p class="">Gestione todos los matrimonios en el Sistema.</p>
            <div class="col-md-12 col-lg-12">
              <div class="demo-inline-spacing">
                <button type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-book me-1"></span>Índice matrimonios
                </button>
                <button type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-plus me-1"></span>Añadir matrimonio
                </button>
                <br>
            <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Fin Modulo Matrimonios -->
</div>
@endsection