<div class="body">

    <div class="logo" id="logo">
        <img src="view/static/img/logoDash.png" alt="Logo">
    </div>
    <div class="box">
        <form class="form" action="controller/acceso/login.php" method="post">
            <h1>Ingresa</h1>
            <div class="inputBox">
                <input type="text" name="dni" id="dni" required autocomplete='off' maxlength="8" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                <span>DNI</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="clave" id="clave" maxlength="6" required autocomplete='off' oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                <span>Contraseña</span>
                <i></i>
            </div>
            <input type="submit" value="Iniciar sesion">
        </form>
    </div> 
    
    
    <div class="capa text-center" id="date">        
        <div class="date">
            <h1 id="hora"></h1>
            <p>:</p> 
            <h1 id="min"></h1>               
                <div class="two text-center">
                    <h1 id="second" class="second text-center"></h1>
                    <h1 id="pre" class="pre text-center"></h1>
                </div>        
        </div>     
    </div>
    
    
</div>
<script src="view/static/login.js"></script>