function editarPlato(codPlato, tp){
    $.ajax({ 
        dataType:'json',
        type:'post',
        url:url+"plato/edit/"+codPlato,
    }).done(function(respuesta){
        if(respuesta.length > 0 ){
            console.log(respuesta,tp);
            $("#txtCodigoEdit").val(respuesta[0].codPlato);
            $("#txtNombreEdit").val(respuesta[0].nombre);  
             $("#txtDescripcionEdit").val(respuesta[0].descripcion);          
            $("#txtPrecioEdit").val(respuesta[0].precioUnitario);
            $("#ImagenEdit").val(respuesta[0].imagen);
            $("#txtTipoPlatoEdit").val(tp);  
        }
    }).fail(function(){

    })
    $("#edit").modal();
}
function ver(codPlato, tp){
    $.ajax({ 
        dataType:'json',
        type:'post',
        url:url+"plato/ver/"+codPlato
    }).done(function(respuesta){
        if(respuesta.length > 0 ){
            console.log(respuesta,tp);
            $("#txtCodigoVer").val(respuesta[0].codPlato);
            $("#txtNombreVer").val(respuesta[0].nombre);
            $("#txtDescripcionVer").val(respuesta[0].descripcion);
            $("#txtPrecioVer").val(respuesta[0].precioUnitario);         
            $("#txtTipoVer").val(tp);  
        }
    }).fail(function(){

    })
    $("#ver").modal();
}
function cambiarEstado(cod, est){
    $.ajax({
        dataType:'json',
        type:'post',
        url:url+"plato/modificarEstado",
        data:{codPlato:cod, estado:est}
    }).done(function(respuesta){
        location.href=url+"plato/index"
    }).fail(function(){

    })
}

