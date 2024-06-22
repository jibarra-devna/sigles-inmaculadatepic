@extends('layouts/blankLayout')

@section('title', 'Iniciar Sesión')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
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
          <h4 class="mb-2">Bienvenido(a)</h4>
          <p class="mb-4">Introduzca las credenciales para iniciar sesión.</p>
          </center>

          @if ($errors->has('username'))
          <center>
            <div class="alert alert-danger" role="alert">
            <span>{{ $errors->first('username') }}</span>
          </div>
          </center>
          @endif

          @if ($errors->has('password'))
          <center>
          <div class="alert alert-danger" role="alert">
            <span>{{ $errors->first('password') }}</span>
          </div>
          </center>
          @endif

          <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Usuario</label>
              <input type="username" class="form-control" id="username" name="username" placeholder="Ingresa tu usuario" autofocus required>
              <!--@if ($errors->has('username'))
                <span>{{ $errors->first('username') }}</span>
            @endif -->
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Contraseña</label>
                <a href="{{url('auth/forgot-password-basic')}}">
                  <small>¿Olvidaste tu contraseña?</small>
                </a>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required />
                <!--@if ($errors->has('password'))
                <span>{{ $errors->first('password') }}</span>
               @endif-->
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Mantener la sesión iniciada
                </label>
              </div>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Iniciar Sesión</button>
            </div>
          </form>

          <!--<p class="text-center">
            <span>New on our platform?</span>
            <a href="{{url('auth/register-basic')}}">
              <span>Create an account</span>
            </a>
          </p>-->
        </div>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
</div>
@endsection
