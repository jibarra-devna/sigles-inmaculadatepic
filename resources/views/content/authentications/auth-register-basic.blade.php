@extends('layouts/blankLayout')

@section('title', 'Nuevo usuario')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection


@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register Card -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
           <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
              <center><img width="60%" src="{{asset('assets/img/icons/unicons/logo.png')}}"></center>
            </a>
          </div>
          <!-- /Logo -->
          <center>
          <h4 class="mb-2">Crear usuario</h4>
          <p class="mb-4">Ingrese los datos solicitados</p>
          </center>
          <form id="formAuthentication" class="mb-3" action="{{url('/')}}" method="GET">
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa el nombre" autofocus>
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Usuario</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Ingresa el usuario" autofocus>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Correo electrónico</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Ingresa el correo electrónico">
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Contraseña</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div>
            <label class="form-label" for="basic-default-fullname">Rol</label>
            <select type="text" class="form-control" name="pc-cura" id="pc-cura"/>
              <option value="">Seleccione uno ↓</option>
              <option value="dog">Administrador</option>
              <option value="dog">Párroco</option>
              <option value="dog">Secretaria(o)</option>
              <option value="dog">Solo lectura</option>
            </select>
            </div>

            <div class="mb-3">
              <!--<div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                <label class="form-check-label" for="terms-conditions">
                  I agree to
                  <a href="javascript:void(0);">privacy policy & terms</a>
                </label>
              </div>-->
            </div>
            <button class="btn btn-primary d-grid w-100">
              Registrar
            </button>
          </form>

          <p class="text-center">
            <!--<span>Already have an account?</span>
            <a href="{{url('auth/login-basic')}}">
              <span>Sign in instead</span>
            </a>-->
          </p>
        </div>
      </div>
      <!-- Register Card -->
    </div>
  </div>
</div>
@endsection
