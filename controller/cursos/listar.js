let paginaActualC = 1

getDataC(paginaActualC)

document.getElementById('numRegistrosC').addEventListener("change", function() {
    getDataC(paginaActualC)
}, false)

function getDataC(pagina) {

    let input = document.getElementById('busquedaC').value
    let select = document.getElementById('numRegistrosC').value
    let contenido=document.getElementById('resultadoCursos')
    // verificar si trae los valores

    // console.log(input)
    // console.log(select)
    // console.log(pagina)

    // para mantener la pagina al cambiar el limite de datos
    // if (pagina != null) {
    //     paginaActualM = pagina
    // }

    // le damos el origen de los datos
    let url='controller/cursos/listar.php';
    let formaData = new FormData()
    formaData.append('busqueda', input)
    formaData.append('registros', select)
    formaData.append('pagina', pagina)
    // para mantener la pagina al cambiar el limite de datos
    // formaData.append('pagina', paginaActualM)

    fetch(url,{
        method: "POST",
        body: formaData
    }).then(response=>response.json())
    .then(data=>{
        contenido.innerHTML=data.data
        // document.getElementById('msgM').innerHTML = data.mensaje
        document.getElementById('munM').innerHTML = data.paginacion
    }).catch(err=>console.log(err))
}