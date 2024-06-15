@extends('layouts/contentNavbarLayout')

@section('title', 'Agregar Bautismo')

@section('content')
<div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
    <h6><span class="text-muted fw-light"><a href="\laravel\siglesia-inmaculadatepic\public\inicio">Libros Parroquiales</a> / <a href="\laravel\siglesia-inmaculadatepic\public\librosparroquiales\bautismos">Bautismos</a> / </span> Agregar Bautismo</h6>
  
    <div style="text-align: right;">
      <a href="\laravel\siglesia-inmaculadatepic\public\librosparroquiales\bautismos">
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
            <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Datos del Bautismo</b></h5> <!--<small class="text-muted float-end">Default label</small>-->
          </div>
          <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">

          <div>
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="ba-nombre" id="ba-nombre"/>
          </div>
          <div>
            <label class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="ba-apellidos" id="ba-apellidos"/>
          </div>
          <div>
            <label class="form-label">Fecha de Bautismo</label>
            <input type="date" class="form-control" name="ba-fecha" id="ba-fecha"/>
          </div>
          <div>
            <label class="form-label">Hora de Bautismo</label>
            <input type="time" class="form-control" name="ba-hora" id="ba-hora"/>
          </div>
          <div>
            <label class="form-label">Ministro de Bautismo</label>
            <select type="text" class="form-control" name="ba-ministro" id="ba-ministro"/>
              <option value="">Seleccione uno ↓</option>
              <option value="dog">Pbro. Cristian Alejandro Conchas Mayorquín</option>
              <option value="dog">Pbro. Bernardo Becerra Gómez</option>
            </select>
          </div>
          <div>
            <label class="form-label">Parroquia</label>
            <input type="text" class="form-control" name="ba-parroquia" id="ba-parroquia" value="Inmaculada Concepción de Tepic" disabled/></td>
          </div>
          <div>
            <label class="form-label">Libro</label>
            <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="ba-libro" id="ba-libro"/>
          </div>
          <div>
            <label class="form-label">Página</label>
            <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="ba-pagina" id="ba-pagina"/></td>
          </div>
          <div>
            <label class="form-label">Acta</label>
            <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="ba-acta" id="ba-acta"/></td>
          </div>
          <div>
            <label class="form-label">Diócesis</label>
          <div class="input-group">
            <select type="text" class="form-control" name="ba-diocesis" id="ba-diocesis"/>
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
          <div>
            <label class="form-label">Como cura certifica</label>
            <select type="text" class="form-control" name="ba-certifica" id="ba-certifica"/>
              <option value="">Seleccione uno ↓</option>
              <option value="dog">Pbro. Cristian Alejandro Conchas Mayorquín</option>
              <option value="dog">Pbro. Bernardo Becerra Gómez</option>
            </select>
          </div>
          <div>
            <label class="form-label" for="basic-default-message">Notas marginales</label>
            <textarea class="form-control" name="ba-notas" id="ba-notas"></textarea>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Datos del Registro Civil</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="ba-rc-fecha" id="ba-rc-fecha"/>
          </div>
          <div>
            <label class="form-label">Lugar de nacimiento</label>
            <input type="text" class="form-control" name="ba-rc-lugar" id="ba-rc-lugar"/>
          </div>
          <div>
            <label class="form-label">Estado</label>
            <select type="text" class="form-control" name="ba-rc-estado" id="ba-rc-estado"/>
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
            <label class="form-label">Oficialia</label>
            <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="ba-rc-oficialia" id="ba-rc-oficialia"/>
          </div>
          <div>
            <label class="form-label">Libro</label>
            <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="ba-rc-libro" id="ba-rc-libro"/>
          </div>
          <div>
            <label class="form-label">Acta</label>
            <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="ba-rc-acta" id="ba-rc-acta"/>
          </div>
          <div class="col-md-6">
            <small class="form-label">Sexo</small>
            <div class="mt-3">
              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="ba-rc-sexo" id="ba-rc-sexoh">
                <label class="btn btn-outline-secondary" for="ba-rc-sexoh">Hombre</label>
                <input type="radio" class="btn-check" name="ba-rc-sexo" id="ba-rc-sexom">
                <label class="btn btn-outline-secondary" for="ba-rc-sexom">Mujer</label>
              </div>
            </div>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Municipio</label>
            <input type="text" class="form-control" name="ba-rc-municipio" id="ba-rc-municipio"/>
          </div>
          <div>
            <label class="form-label" for="basic-default-fullname">Localidad</label>
            <input type="text" class="form-control" name="ba-rc-localidad" id="ba-rc-localidad"/>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Padres</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label">Nombre Padre</label>
            <input type="text" class="form-control" name="ba-pad-padre" id="ba-pad-padre"/>
          </div>
          <div>
            <label class="form-label">Nombre Madre</label>
            <input type="text" class="form-control" name="ba-pad-madre" id="ba-pad-madre"/>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Abuelos</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label">Nombre Abuelo</label>
            <input type="text" class="form-control" name="ba-abu-padre" id="ba-abu-padre"/>
          </div>
          <div>
            <label class="form-label">Nombre Abuela</label>
            <input type="text" class="form-control" name="ba-abu-madre" id="ba-abu-madre"/>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Padrinos</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label">Nombre Padrino</label>
            <input type="text" class="form-control" name="ba-padr-padrino" id="ba-padr-padrino"/>
          </div>
          <div>
            <label class="form-label">Nombre Madrina</label>
            <input type="text" class="form-control" name="ba-padr-madrina" id="ba-padr-madrina"/>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Testigos</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label">Nombre Testigo 1</label>
            <input type="text" class="form-control" name="ba-tes-1" id="ba-tes-1"/>
          </div>
          <div>
            <label class="form-label">Nombre Testigo 2</label>
            <input type="text" class="form-control" name="ba-tes-2" id="ba-tes-2"/>
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
