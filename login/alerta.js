function ir(){

    var pass=2468;
    var user="NAME"

    if (document.forms.txtclave.value==pass && document.form.txtusuario.value==user){
        alert("Bienvenido Usuario");
    window.location="home.php";
    }   
    else{
        alert("Ingrese usuario y contraseña correctamente");
    }

    
}
