@extends('layouts/contentNavbarLayout')

@section('title', 'Agregar Matrimonio')

@section('content')
<div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
    <h6><span class="text-muted fw-light"><a href="\laravel\siglesia-inmaculadatepic\public\inicio">Libros Parroquiales</a> / <a href="\laravel\siglesia-inmaculadatepic\public\librosparroquiales\matriomonios">Matrimonios</a> / </span> Agregar Matrimonio</h6>
  
    <div style="text-align: right;">
      <a href="\laravel\siglesia-inmaculadatepic\public\librosparroquiales\matrimonios">
      <button type="button" class="btn btn-sm btn-primary" style="justify-content: flex-end;">
      <span class="tf-icons bx bx-book me-1"></span>Ir al Índice
      </button>
    </a>
    </div>
  </div>
  <p></p>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-body">
        <form>
          <div class="mb-3">
            <p></p>
            <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Datos del Matrimonio</b></h5> <!--<small class="text-muted float-end">Default label</small>-->
          </div>
          <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">

          <div>
            <label class="form-label" for="basic-default-fullname">Nombre</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Apellidos</label>
            <input type="text" class="form-control" id="apellido"/>
          </div>
          <div class="row">
          <div class="col-6">
            <label class="form-label" for="basic-default-company">Fecha de Bautismo</label>
            <input type="date" class="form-control" id="basic-default-company" placeholder="" />
          </div>
          <div class="col-6">
            <label class="form-label" for="basic-default-company">Hora de Bautismo</label>
            <input type="time" class="form-control" id="basic-default-company" placeholder="" />
          </div>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Ministro de Bautismo</label>
            <select type="text" class="form-control" id="nombre"/>
              <option value="">Seleccione uno ↓</option>
              <option value="dog">Pbro. Cristian Alejandro Conchas Mayorquín</option>
              <option value="dog">Pbro. Bernardo Becerra Gómez</option>
            </select>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Parroquia</label>
            <input type="text" class="form-control" id="nombre" value="Inmaculada Concepción de Tepic" disabled/></td>
          </div>
          <div class="row">
            <div class="col-4">
              <label class="form-label" for="basic-default-fullname">Año</label>
              <input type="text" class="form-control" id="nombre"/>
            </div>
            <div class="col-4">
              <label class="form-label" for="basic-default-fullname">Libro</label>
              <input type="text" class="form-control" id="nombre"/></td>
            </div>
            <div class="col-4">
              <label class="form-label" for="basic-default-fullname">Página</label>
              <input type="text" class="form-control" id="nombre"/></td>
            </div>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Diócesis</label>
            <input type="text" class="form-control" id="nombre"/></td>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Como cura certifica</label>
            <select type="text" class="form-control" id="nombre"/>
              <option value="">Seleccione uno ↓</option>
              <option value="dog">Pbro. Cristian Alejandro Conchas Mayorquín</option>
              <option value="dog">Pbro. Bernardo Becerra Gómez</option>
            </select>
          </div>
          <div>
            <label class="form-label" for="basic-default-message">Notas marginales</label>
            <textarea id="basic-default-message" class="form-control"></textarea>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Datos del Registro Civil</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div class="row">
            <div class="col-4">
              <label class="form-label" for="basic-default-fullname">Acta</label>
              <input type="text" class="form-control" id="nombre"/>
            </div>
            <div class="col-4">
              <label class="form-label" for="basic-default-fullname">Oficialia</label>
              <input type="text" class="form-control" id="nombre"/>
            </div>
            <div class="col-4">
              <label class="form-label" for="basic-default-fullname">Libro</label>
              <input type="text" class="form-control" id="nombre"/>
            </div>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Fecha</label>
            <input type="date" class="form-control" id="nombre"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="nombre"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Lugar de nacimiento</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Sexo</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Estado</label>
            <select type="text" class="form-control" id="nombre"/>
              <option value="">Seleccione uno ↓</option>
              <option value="Aguascalientes">Aguascalientes</option>
              <option value="Baja California">Baja California</option>
              <option value="Baja California Sur">Baja California Sur</option>
              <option value="Campeche">Campeche</option>
              <option value="Chiapas">Chiapas</option>
              <option value="Chihuahua">Chihuahua</option>
              <option value="CDMX">Ciudad de México</option>
              <option value="Coahuila">Coahuila</option>
              <option value="Colima">Colima</option>
              <option value="Durango">Durango</option>
              <option value="Estado de México">Estado de México</option>
              <option value="Guanajuato">Guanajuato</option>
              <option value="Guerrero">Guerrero</option>
              <option value="Hidalgo">Hidalgo</option>
              <option value="Jalisco">Jalisco</option>
              <option value="Michoacán">Michoacán</option>
              <option value="Morelos">Morelos</option>
              <option value="Nayarit">Nayarit</option>
              <option value="Nuevo León">Nuevo León</option>
              <option value="Oaxaca">Oaxaca</option>
              <option value="Puebla">Puebla</option>
              <option value="Querétaro">Querétaro</option>
              <option value="Quintana Roo">Quintana Roo</option>
              <option value="San Luis Potosí">San Luis Potosí</option>
              <option value="Sinaloa">Sinaloa</option>
              <option value="Sonora">Sonora</option>
              <option value="Tabasco">Tabasco</option>
              <option value="Tamaulipas">Tamaulipas</option>
              <option value="Tlaxcala">Tlaxcala</option>
              <option value="Veracruz">Veracruz</option>
              <option value="Yucatán">Yucatán</option>
              <option value="Zacatecas">Zacatecas</option>
            </select>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Municipio</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Localidad</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Datos del Padre</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label" for="basic-default-fullname">Nombre</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Apellidos</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Datos de la Madre</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label" for="basic-default-fullname">Nombre</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Apellidos</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Abuelos paternos</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label" for="basic-default-fullname">Abuelo paterno</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Abuela materna</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Abuelos maternos</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label" for="basic-default-fullname">Nombre</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Apellidos</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Padrinos</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label" for="basic-default-fullname">Padrino</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Madrina</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Testigos</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label" for="basic-default-fullname">Testigo 1</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Testigo 2</label>
            <input type="text" class="form-control" id="nombre"/>
          </div>
        </div>
        <br>
          <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
