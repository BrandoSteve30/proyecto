<div class="body">

    <div class="logo" id="logo">
        <img src="/logoDash.png" alt="">
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
    
    <div class="date" id="date">
        <h1 id="hora"></h1>   
        <h1 id="min"></h1>
        <h1 id="second"></h1>
        <h1 id="pre"></h1>
        <div class="two">
        </div>
        
    </div>
    
</div>
<script src="view/static/login.js"></script>