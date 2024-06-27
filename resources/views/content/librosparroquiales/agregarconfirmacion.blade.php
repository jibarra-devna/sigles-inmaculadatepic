@extends('layouts/contentNavbarLayout')

@section('title', 'Agregar Confirmación')

@section('content')
<div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
    <h6><span class="text-muted fw-light"><a href="\laravel\siglesia-inmaculadatepic\public\inicio">Libros Parroquiales</a> / <a href="\laravel\siglesia-inmaculadatepic\public\librosparroquiales\primeracomunion">Confirmaciones</a> / </span> Agregar Confirmación</h6>
  
    <div style="text-align: right;">
      <a href="\laravel\siglesia-inmaculadatepic\public\librosparroquiales\confirmaciones">
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
            <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Datos del Confirmado</b></h5> <!--<small class="text-muted float-end">Default label</small>-->
          </div>
          <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">

          <div>
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="co-nombre" id="co-nombre"/>
          </div>
          <div>
            <label class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="co-apellido" id="co-apellido"/>
          </div>
          <div class="row">
          <div class="col-6">
            <label class="form-label">Fecha de Confirmación</label>
            <input type="date" class="form-control" name="co-fechaconfirmacion" id="co-fechaconfirmacion"/>
          </div>
          <div class="col-6">
            <label class="form-label">Hora de Confirmación</label>
            <input type="time" class="form-control" name="co-horaconfirmacion" id="co-horaconfirmacion"/>
          </div>
          </div>
          <div class="row">
          <div class="col-4">
            <label class="form-label">Libro</label>
            <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="co-libro" id="co-libro"/>
          </div>
          <div class="col-4">
            <label class="form-label">Página</label>
            <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="co-pagina" id="co-pagina"/>
          </div>
          <div class="col-4">
            <label class="form-label">Acta</label>
            <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="co-acta" id="co-acta"/>
          </div>
          </div>
          <div>
            <label class="form-label">Grupo de Confirmación</label>
            <input type="text" class="form-control" name="co-catequista" id="co-grupo"/>
          </div>
          <div>
            <label class="form-label">Celebrante</label>
            <select type="text" class="form-control" name="co-celebrante" id="co-celebrante"/>
              <option value="">Seleccione uno ↓</option>
              <option value="dog">Pbro. Cristian Alejandro Conchas Mayorquín</option>
              <option value="dog">Pbro. Bernardo Becerra Gómez</option>
            </select>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Como cura certifica</label>
            <select type="text" class="form-control" name="co-certifica" id="co-certifica"/>
              <option value="">Seleccione uno ↓</option>
              <option value="dog">Pbro. Cristian Alejandro Conchas Mayorquín</option>
              <option value="dog">Pbro. Bernardo Becerra Gómez</option>
            </select>
          </div>
          <div>
            <label class="form-label" for="basic-default-message">Notas marginales</label>
            <textarea class="form-control" name="co-notas" id="co-notas"></textarea>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Datos del Bautismo</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label">Bautizado en la Parroquia</label>
          <div class="input-group">
            <select type="text" class="form-control" name="co-ba-parroquia" id="co-ba-parroquia"/>
              <option value="">Seleccione uno ↓</option>
              <option value="dog">Inmaculada Concepción de Tepic</option>
              <option value="dog">San Isidro Labrador de Tepic</option>
            </select>
            &nbsp;
          <div>
            <button class="btn btn-outline-secondary" type="button"><span class="bx bx-plus"></button>
          </div>
          </div>
          </div>
          <div>
            <label class="form-label">Fecha de Bautismo</label>
            <input type="date" class="form-control" name="co-ba-fecha" id="co-ba-fecha"/>
          </div>
          <div>
            <label class="form-label">Población Parroquia</label>
            <input type="text" class="form-control" name="co-ba-poblacion-parroquia" id="co-ba-poblacion-parroquia"/>
          </div>
          <div>
            <label class="form-label">Estado Parroquia</label>
            <select type="text" class="form-control" name="co-ba-estado-parroquia" id="co-ba-estado-parroquia"/>
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
          <div class="row">
            <div class="col-4">
              <label class="form-label">Libro</label>
              <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="co-ba-libro" id="co-ba-libro"/>
            </div>
            <div class="col-4">
              <label class="form-label">Página</label>
              <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="co-ba-pagina" id="co-ba-pagina"/>
            </div>
            <div class="col-4">
              <label class="form-label">Acta</label>
              <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="co-ba-acta" id="co-ba-acta"/>
            </div>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="co-ba-fechanac" id="co-ba-fechanac"/>
          </div>
          <div>
            <label class="form-label">Diócesis</label>
          <div class="input-group">
            <select type="text" class="form-control" name="co-ba-diocesis" id="co-ba-diocesis"/>
              <option value="">Seleccione uno ↓</option>
              <option value="dog">Diócesis de Tepic</option>
              <option value="dog">Diócesis de Autlán</option>
            </select>
            &nbsp;
          <div>
            <button class="btn btn-outline-secondary" type="button"><span class="bx bx-plus"></button>
          </div>
          </div>
          </div>
          </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Padres</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label">Nombre Padre</label>
            <input type="text" class="form-control" name="co-pad-padre" id="co-pad-padre"/>
          </div>
          <div>
            <label class="form-label">Nombre Madre</label>
            <input type="text" class="form-control" name="co-pad-madre" id="co-pad-madre"/>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Padrinos</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label">Nombre Padrino</label>
            <input type="text" class="form-control" name="co-padr-padrino" id="co-padr-padrino"/>
          </div>
          <div>
            <label class="form-label">Nombre Madrina</label>
            <input type="text" class="form-control" name="co-padr-madrina" id="co-padr-madrina"/>
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
