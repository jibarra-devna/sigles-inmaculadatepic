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
          <div class="row">
          <div class="col-6">
            <label class="form-label">Fecha de Matrimonio</label>
            <input type="date" class="form-control" name="ma-fechamatrimonio" id="ma-fechamatrimonio" placeholder="" />
          </div>
          <div class="col-6">
            <label class="form-label">Hora de Matrimonio</label>
            <input type="time" class="form-control" name="ma-horamatrimonio" id="ma-horamatrimonio" placeholder="" />
          </div>
          </div>
          <div>
            <label class="form-label">Celebrante</label>
            <select type="text" class="form-control" name="ma-celebrante" id="ma-celebrante">
              <option value="">Seleccione un Sacerdote ↓</option>
              <option value="dog">Pbro. Cristian Alejandro Conchas Mayorquín</option>
              <option value="dog">Pbro. Bernardo Becerra Gómez</option>
            </select>
          </div>
          <div>
            <label class="form-label">Parroquia</label>
            <input type="text" class="form-control" name="ma-parroquia" id="ma-parroquia" value="Inmaculada Concepción de Tepic" disabled/></td>
          </div>
          <div class="row">
            <div class="col-4">
              <label class="form-label">Libro</label>
              <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" name="ma-libro" id="ma-libro"/>
            </div>
            <div class="col-4">
              <label class="form-label">Pagina</label>
              <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" name="ma-pagina" id="ma-pagina"/></td>
            </div>
            <div class="col-4">
              <label class="form-label">Acta</label>
              <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" name="ma-acta" id="ma-acta"/></td>
            </div>
          </div>
          <div>
            <label class="form-label">Como cura Certifica</label>
            <select type="text" class="form-control" name="ma-doyfe" id="ma-doyfe"/>
              <option value="">Seleccione un Sacerdote ↓</option>
              <option value="dog">Pbro. Cristian Alejandro Conchas Mayorquín</option>
              <option value="dog">Pbro. Bernardo Becerra Gómez</option>
            </select>
          </div>
          <div>
            <label class="form-label">Notas marginales</label>
            <textarea id="basic-default-message" name="ma-notas" id="ma-notas" class="form-control"></textarea>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Datos del Registro Civil</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div class="row">
            <div class="col-4">
              <label class="form-label">Libro</label>
              <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" name="ma-rc-libro" id="ma-rc-libro"/>
            </div>
            <div class="col-4">
              <label class="form-label">Pagina</label>
              <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" name="ma-rc-pagina" id="ma-rc-pagina"/>
            </div>
            <div class="col-4">
              <label class="form-label">Acta</label>
              <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" name="ma-rc-acta" id="ma-rc-acta"/>
            </div>
          </div>
          <div class="row">
          <div class="col-4">
              <label class="form-label">Oficialia</label>
              <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" name="ma-rc-oficialia" id="ma-rc-oficialia"/>
            </div>
            <div class="col-8">
              <label class="form-label">Fecha de Registro</label>
              <input type="date" class="form-control" name="ma-rc-fecha" id="ma-rc-fecha"/>
            </div>
          </div>
          <div>
            <label class="form-label">Lugar de Registro</label>
            <input type="text" class="form-control" name="ma-rc-lugar" id="ma-rc-lugar"/>
          </div>
        </div>
        <br>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Datos del Novio</b></h5>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Datos de la novia</b></h5>
        </div>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label">Nombre Novio</label>
            <input type="text" class="form-control" name="ma-nom-novio" id="ma-nom-novio"/>
          </div>
          <div>
            <label class="form-label">Nombre Novia</label>
            <input type="text" class="form-control" name="ma-nom-novia" id="ma-nom-novia"/>
          </div>
          <div>
            <label class="form-label">Apellidos Novio</label>
            <input type="text" class="form-control" name="ma-ape-novio" id="ma-ape-novio"/>
          </div>
          <div>
            <label class="form-label">Apellidos Novia</label>
            <input type="text" class="form-control"name="ma-ape-novia" id="ma-ape-novia"/>
          </div>
          <div class="row">
            <div class="col-6">
              <label class="form-label">Fecha de Nacimiento</label>
              <input type="date" class="form-control" name="ma-fecha-novio" id="ma-fecha-novio"/>
            </div>
          </div>
           <div class="row">
            <div class="col-6">
              <label class="form-label">Fecha de Nacimiento</label>
              <input type="date" class="form-control" name="ma-fecha-novia" id="ma-fecha-novia"/>
            </div>
           </div>
        </div>
        <br>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Padres del Novio</b></h5>
          <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Padres de la Novia</b></h5>
        </div>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label">Padre</label>
            <input type="text" class="form-control" name="ma-pad-novio" id="ma-pad-novio"/>
          </div>
          <div>
            <label class="form-label">Padre</label>
            <input type="text" class="form-control" name="ma-pad-novia" id="ma-pad-novia"/>
          </div>
          <div>
            <label class="form-label">Madre</label>
            <input type="text" class="form-control" name="ma-mad-novio" id="ma-mad-novio"/>
          </div>
          <div>
            <label class="form-label">Madre</label>
            <input type="text" class="form-control" name="ma-mad-novia" id="ma-mad-novia"/>
          </div>
        </div>
        <br>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Bautismo del Novio</b></h5>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Bautismo de la novia</b></h5>
        </div>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
        <div class="row">
          <div class="col-8">
            <label class="form-label">Bautizado en la Parroquia</label>
            <div class="input-group">
              <select type="text" class="form-control" name="ma-ba-parroquianovio" id="ma-ba-parroquianovio">
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
          <div class="col-4">
            <label class="form-label">Fecha de Bautismo</label>
            <input type="date" class="form-control" name="ma-ba-fechanovio" id="ma-ba-fechanovio"/>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
              <label class="form-label">Bautizada en la Parroquia</label>
              <div class="input-group">
                <select type="text" class="form-control" name="ma-ba-parroquianovia" id="ma-ba-parroquianovia">
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
          <div class="col-4">
            <label class="form-label">Fecha de Bautismo</label>
            <input type="date" class="form-control" name="ma-ba-fechanovia" id="ma-ba-fechanovia"/>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <label class="form-label">Población Parroquia</label>
            <input type="text" class="form-control" name="ma-ba-poparroquianovio" id="ma-ba-poparroquianovio"/>
          </div>
          <div class="col-6">
            <label class="form-label">Estado Parroquia</label>
            <select type="text" class="form-control" name="ma-ba-esparroquianovio" id="ma-ba-esparroquianovio">
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
        </div>
        <div class="row">
          <div class="col-6">
            <label class="form-label">Población Parroquia</label>
            <input type="text" class="form-control" name="ma-ba-poparroquianovia" id="ma-ba-poparroquianovia"/>
          </div>
          <div class="col-6">
            <label class="form-label">Estado Parroquia</label>
            <select type="text" class="form-control" name="ma-ba-esparroquianovia" id="ma-ba-esparroquianovia">
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
        </div>
          <div class="row">
            <div class="col-4">
              <label class="form-label">Libro</label>
              <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="ma-ba-libronovio" id="ma-ba-libronovio"/>
            </div>
            <div class="col-4">
              <label class="form-label">Página</label>
              <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="ma-ba-paginanovio" id="ma-ba-paginanovio"/>
            </div>
            <div class="col-4">
              <label class="form-label">Acta</label>
              <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="ma-ba-actanovio" id="ma-ba-actanovio"/>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <label class="form-label">Libro</label>
              <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="ma-ba-libronovia" id="ma-ba-libronovia"/>
            </div>
            <div class="col-4">
              <label class="form-label">Página</label>
              <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="ma-ba-paginanovia" id="ma-ba-paginanovia"/>
            </div>
            <div class="col-4">
              <label class="form-label">Acta</label>
              <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')" class="form-control" name="ma-ba-actanovia" id="ma-ba-actanovia"/>
            </div>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Padrinos</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label">Padrino</label>
            <input type="text" class="form-control" name="ma-padrino" id="ma-padrino"/>
          </div>
          <div>
            <label class="form-label">Madrina</label>
            <input type="text" class="form-control" name="ma-madrina" id="ma-madrina"/>
          </div>
        </div>
        <br>
        <h5><span style="color: #696cff; vertical-align:2px;">━━━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Testigos</b></h5>
        <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
          <div>
            <label class="form-label">Testigo 1</label>
            <input type="text" class="form-control" name="ma-testigouno" id="ma-testigouno"/>
          </div>
          <div>
            <label class="form-label">Testigo 2</label>
            <input type="text" class="form-control" name="ma-testigodos" id="ma-testigodos"/>
          </div>
          <div>
            <label class="form-label">Testigo 3</label>
            <input type="text" class="form-control" name="ma-testigotres" id="ma-testigotres"/>
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
