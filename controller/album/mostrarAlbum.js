let paginaActualW = 1

getDataW(paginaActualW)

function getDataW(pagina) {

    let contenido=document.getElementById('listarAlbum')
    // verificar si trae los valores

    // console.log(contenido)
    // console.log(pagina)
    // le damos el origen de los datos
    let url='controller/album/listar.php';
    let formaData = new FormData()
    formaData.append('pagina', pagina)

    fetch(url,{
        method: "POST",
        body: formaData
    }).then(response=>response.json())
    .then(data=>{
        contenido.innerHTML=data.data
        // document.getElementById('msgW').innerHTML = data.mensaje
        document.getElementById('paginacion').innerHTML = data.paginacion
    }).catch(err=>console.log(err))
}