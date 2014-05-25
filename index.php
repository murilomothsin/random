<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<title> teste </title>
</head>
<script type="text/javascript">

$( document ).ready(function() {

	$( "#trocar" ).bind( "click", function() {

		$.ajax({
		  url: "frase.php",
		  method: 'POST',
		  data: {
		    frase: 1
		  },
		  beforeSend: function(){
		  	$('#frase').html( 'Carregando...' );
		  },
		  success: function( data ) {
		    $('#frase').html( data );
		  },
		  error: function(){
		  	$('#frase').html( 'Não foi possivel carregar a frase.' );
		  }
		});

	});

});

</script>

<body>
	<div class="container" style="margin-top: 10px">
		<div class="row">
			<div class="col-md-8"><h2>Random</h2></div>
			<div class="col-md-4">
				<div>
					<button type="button" class="btn btn-default">Autores</button>
					<button type="button" class="btn btn-default">Cadastrar</button>
					<button type="button" class="btn btn-default">Login</button>
				</div>
			</div>
		</div>
		<div class="row">
			<hr />
		</div>
		<div class="row">
			<div class="col-md-10">
				<blockquote>
					<p class="lead" id="frase">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"<p>
				</blockquote>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-7">
				<button type="button" class="btn btn-default" id="trocar">Trocar</button>
			</div>
		</div>
	</div>
</body>
</html>