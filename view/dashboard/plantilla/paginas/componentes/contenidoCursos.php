<section class="body_dashboard">
    <hgroup>Cursos</hgroup>
    <div class="contenedor">
    <div class="campos">
        <div class='mostrar'>
            <label for="numRegistrosC">Mostrar</label>
            <select name="numRegistrosC" id="numRegistrosC">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            <label for="numRegistrosC">Registros.</label>            
        </div>
        <div class="buscar form-floating mb-3">                        
            <input class="a form-control form-control-sm" placeholder="Type to search..." autocomplete="off" type="text" name="busquedaW" id="busquedaC" onkeyup="getDataC(1);">
            <label for="busquedaC" class="form-label">Buscar</label>
        </div>
    </div>
    <div>
        <div id='resultadoCursos'>
        </div>
    </div>
    <div class="paginacion">
        <div class="mensaje">
            <label id="msgC"></label>
        </div>
        <div id="munC" class="pasar">

        </div>
    </div>
    </div>
</section>

<script src="controller/cursos/listar.js"></script>