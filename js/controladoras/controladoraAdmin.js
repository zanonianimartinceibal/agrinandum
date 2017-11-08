function cargarEspecie() {
    console.log("entra"); 
    var arr = '';
    jQuery.ajax({
    url: "db/controller.php",
    type: "POST",
    data: {
    cargarEspecie:"1",
    nombre: $("#nombre").val(),
    cientifico:$("#cientifico").val(),
    descripcion1:$("#descripcion1").val(),
    descripcion2:$("#descripcion2").val(),
    vegetativo: $("#vegetativo").val(),
    macollo: $("#macollo").val(),
    ligula: $("#ligula").val(),
    lamina: $("#lamina").val()
    
    },
    success: function (data) {
        arr = JSON.parse(data);
        jQuery('#resultado').empty();
        jQuery.each(arr,function(i,val) {
         
            jQuery('#resultado').append(val);
        });
    }
    });
    
    
};