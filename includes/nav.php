<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if($pagina=="inicio"){echo "class = 'active'";} ?> ><a href="index.php">Inicio</a></li>
        <li  <?php if($pagina=="identificar"){echo "class = 'active'";} ?> ><a href="identificar.php">Identificar especie</a></li>
        <li  <?php if($pagina=="todas"){echo "class = 'active'";} ?> ><a href="todas.php" >Mostrar todos</a></li>
        <li  <?php if($pagina=="contacto"){echo "class = 'active'";} ?> ><a href="contacto.php">Contacto</a></li>
        
      </ul>
      <form class="navbar-form navbar-left">
          <div class="input-group">
          <div class="search-box">
          <input type="text" autocomplete="off" placeholder="Buscar por nombre" />
          <div class="result"></div>
      </div>
            <div id="suggesstion-box"></div>
          </div>
        </form>
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 
<script>
  // AJAX call for autocomplete 
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "db/controller.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(img/icon/LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});
//To select country name
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>