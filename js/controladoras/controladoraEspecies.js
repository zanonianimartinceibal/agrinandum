function listarEspecies() {
    $("#container").load("includes/view/especieslist.php");
};
function verEspecie() {
    var info = location.hash.replace("#", "");
    var data = info.split("/");
    var especie = data[0];
    var tipo = data[1];
    $("#container").load("includes/view/especie.php?especie="+especie+"&tipo="+data[1]);
};

function getEspecie() { 
    var arr = '';
    jQuery.ajax({
    url: "db/controller.php",
    type: "POST",
    data: {
    getEspecie:"1",
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

function getHierba() { 
    var arr = '';
    jQuery.ajax({
    url: "db/controller.php",
    type: "POST",
    data: {
    getHierba:"1",
    porte: $("#porte").val(),
    espinas: $("#espinas").val(),
    hoja: $("#hoja").val(),
    borde: $("#borde").val()
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


//identificar
function loadIdentificar() {
    
    $( "#pastoform" ).hide();
    $( "#hierbaform" ).hide();
}


  function showForm() {
    if($("#planta").val()==1){
        $( "#hierbaform" ).hide();
        $("#pastoform").show();
    }
    else if($("#planta").val()==2){
        $( "#pastoform" ).hide();
        $("#hierbaform").show();
    }
}

//buscador
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* captra valor input cuando cambia */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("db/controller.php", {term: inputVal}).done(function(data){
                // muestra lo que devulelve el servidor
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // recarga la pagina al clickear el resultado
    $(document).on("click", ".result p", function(){
        window.location.reload(true);
    });
});

