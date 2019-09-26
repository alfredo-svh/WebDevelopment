<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Convenios</title>
		<!--<link rel="stylesheet" href="css/styles.css" media="screen">-->
	</head>

	<body>
		<div class="container">
			<h1>Convenios</h1>

			<div class="content">
				<div id="add_convenio_form">
					<h2>Nuevo Convenio</h2>
					<form enctype="multipart/form-data" action="agregar.php" method="post">
						<div class="field">
							<label for="logo">Logo
								<input type="file" name="logo" id="logo" accept="image/*">
							</label>
						</div>
						<div class="field">
							<label for="name">Nombre del Convenio
								<input type="text" name="name" id="name" placeholder="Nombre del convenio">
							</label>
						</div>
						<div class="field">
							<label for="campus">Campus
								<input type="text" name="campus" id="campus" placeholder="Nombre del campus">
							</label>
						</div>
						<div class="field">
							<label for="objective">Objetivo
								<textarea name="objective" id="objective" placeholder="Objetivo"></textarea>
							</label>
						</div>
						<div class="field">
							<label for="date">Fecha de registro
								<input type="date" name="date" id="date" placeholder="Fecha de registro">
							</label>
						</div>
						<div class="field">
							<label for="carreras" >Carreras que pueden aplicar
								<div class="carrera_fields_wrap">
									<input type="text" name="carreras[]" id="carreras" placeholder="Carrera">
									<button id="add_carrera_button">Añade más carreras</button>
								</div>
							</label>
						</div>
						<div class="field">
							<label for="contacto">Informacion del contacto
								<div class="contact_fields_wrap">
									<input type="text" name="contact_name[]" id="contact_name" placeholder="Nombre del contacto">
									<input type="text" name="contact_email[]" id="contact_email" placeholder="Email del contacto">
									<button id="add_contact_button">Añade más contactos</button>
								</div>
							</label>
						</div>
						<div id="error"></div>
						<input type="submit" name="submit" value="Agregar convenio">
					</form>

				</div>
				<button id="agregar_convenio">Agregar nuevo convenio</button>
			</div>

			<div class="content campus">
				<h2>Selecciona campus</h2>

				<table>
					<thead>
						<tr>
							<th></th>
							<th>Nombre</th>
						</tr>
					</thead>

					<tbody>
						<?php foreach($campus as $key => $value){ ?>
							<tr>
								<td>
									<a style="cursor:pointer;" onclick="convenio_table(<?php echo $value->id . ", " . $value->name; ?>);">
										Selecciona
									</a>
								</td>
								<td class="name"><?php echo $value->name; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>

			<div class="content existing">
				<h2>Convenios Existentes</h2>

				<table>
					<thead>
						<tr>
							<th>Logo</th>
							<th>Nombre</th>
							<th>Objetivo</th>
							<th>Fecha de registro</th>
							<th>Campus</th>
							<th>Detalles</th>
						</tr>
					</thead>
<!--
					<tbody>
						<?php //foreach($table as $key => $value){ ?>
							<tr>
								<td class="logo">
									<?php //echo $value->logo_url;?>
								</td>
								<td class="name"><?php //echo $value->name; ?></td>
								<td class="objective"><?php //echo $value->objective; ?></td>
								<td><?php //echo $value->register_date; ?></td>
								<td><?php //echo $value->campus; ?></td>
								<td class="detalles">
									<a style="cursor:pointer;" onclick="details(<?php //echo $value->id . ", " . $value->name; ?>);">
										Detalles
									</a>
								</td>
							</tr>
						<?php //} ?>
					</tbody> -->
				</table>
			</div>



		</div>

	
	</body>
</html>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script>

function convenio_table(id, campus){
	$.ajax({
	type:"post",
	url:"Convenio/convenio_table",
	data:"id="+id,
	async:false,
	success:function(msg){
	if(msg!=""){
	msg=$.parseJSON(msg);
	$("#myModalLabels").html("Convenio campus "+campus+"");
	var h="";
		$.each(msg, function(i,o){
			h+="<tr>";
			h+="<td id='tdn"+i+"'>"+this.name+"</td>";
			h+="<td id='tde"+i+"'>"+this.objective+"</td>";
			h+="</tr>";
		});
	
  		
	$("#tablabodyCon").html(h);
	$("#myModalVer").modal({backdrop:"static",keyboard:false});
	}
	else{
		bootbox.dialog({
			message: "Este campus no cuenta con algún convenio",
			title: "Alerta Convenios",
			buttons: {
				success: {
					label: "Aceptar",
					className: "btn-warning",
					callback: function() {
					}
				}
			}
		});
	}
	}
	});
}

$(document).ready(function() {
	$('#add_convenio_form').hide();
	$('#agregar_convenio').on('click',function()
	{
		$('#add_convenio_form').show();
		$('#agregar_convenio').hide();
	});

    var max_fields      = 10; //maximum input boxes allowed
    var car_wrapper         = $(".carrera_fields_wrap"); //Fields wrapper
    var add_carrera      = $("#add_carrera_button"); //Add button ID
    var contact_wrapper         = $(".contact_fields_wrap"); //Fields wrapper
    var add_contact      = $("#add_contact_button"); //Add button ID
   
    var x = 1; //initlal text box count
    $(add_carrera).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(car_wrapper).append('<div><input type="text" name="carreras[]" placeholder="Carrera"/><a href="#" class="remove_field">Remover carrera</a></div>'); //add input box
        }
    });
   
    $(car_wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
	})
	
    $(add_contact).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(contact_wrapper).append('<div><input type="text" name="contact_name[]" placeholder="Nombre del contacto"/><input type="text" name="contact_email[]" placeholder="Email del contacto"/><a href="#" class="remove_field">Remover contacto</a></div>'); //add input box
        }
    });
   
    $(contact_wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});



</script>

<style>

html {
    box-sizing: border-box;
}

*, *:after, *:before {
    box-sizing: inherit;
    margin:0;
    padding:0;
}

.container {
    max-width:1000px;
    margin:0 auto;
    padding: 20px;
    background-color: #ffffff;
}

h1, h2 {
    text-align: center;
    font-family: 'Proza Libre', sans-serif;
}

div.content {
    width: 100%;
    margin: 30px auto 0 auto;
    font-size: 24px;
}

/*div.create{
    padding:20px;
    background-color: #E1E1E1;
} */

div.field {
    margin-bottom: 20px;
}

div.field label {
    /*width: 50%; */
    /*float: left; */
    font-size:14px;
    margin-right:20px;
    text-align: right;
    margin-top:8px;
    font-family:Arial, Helvetica, sans-serif;
    /*text-transform: uppercase; */
    font-weight: bold;
}

div.field input {
    height:30px;
    width: 33%;
    padding: 0px;
}

#objective{
    height: 200px;
    width: 70%;
    vertical-align: text-top;
}

#error{
    clear: both;
    padding: 20px;
    text-align: center;
    display: none;
}

.button {
    background-color: orange;
    border:none;
    padding:10px 30px;
    cursor: pointer;
    color: white;
    font-size: 16px;
    text-transform: uppercase;
}

#add_carrera_button{
    background-color: orange;
    color: white;
    border: none;
    padding:10px 15px;
    cursor: pointer;
}

#add_contact_button{
    background-color: orange;
    color: white;
    border: none;
    padding:10px 15px;
    cursor: pointer;
}

#add_convenio_form a.remove_field{
    text-decoration: none;
    font-weight: normal;
    background-color: orange;
    color: white;
    border: none;
    padding:10px 20px;
    cursor: pointer;
}

div.existing {
    padding: 20px;
    background-color: #e1e1e1;
}

div.existing  table {
    width: 100%;
    font-family: geneva;
    font-size: 16px;
    border-collapse: collapse;
}

div.existing  table thead {
    background-color: #ff9800;
}

div.existing table thead th {
    padding:10px 0;
    color: white;
    text-transform: uppercase;
}

div.existing table tbody tr:nth-child(even) {
    background-color: #9e9e9e;
}

div.existing  table a {
    background-color: #3f51b5;
    padding: 5px 10px;
    display: block;
    text-align: center;
    color: #ffffff;
    text-transform: uppercase;
    text-decoration: none;
}

div.existing  table td {
    padding: 10px 10px;
    line-height: 20px;
    text-align: center;
    vertical-align: center;
}

div.existing .logo img{
    max-height: 150px;
    max-width: 150px;
}

div.existing .objective{
    text-align: left;
    /*vertical-align: text-top;*/
}

div.existing .name{
    text-transform: uppercase;
    font-weight: bold;
}

div.existing h2 {
    margin-bottom: 20px;
}

/*div.existing p {
    text-align: center;
    margin-bottom: 20px;
}

/*td.delete input {
    display: block;
    margin: 0 auto;
} */

.content span{
    text-transform: uppercase;
}

.contactList {
    margin-bottom: 25px;
}

.contactList li{
    margin-left: 25px;
}

.carrerasList li{
    margin-left: 25px;
}

a.volver {
    color: orange;
    text-decoration: none;
    font-weight: bold;
}

/*
#spinner{
    display: none;
}*/

#message {
    margin-top: 10px;
    border:1px solid green;
    height:50px;
    line-height: 50px;
    color: white;
    text-transform: uppercase;
    background-color: green;
    opacity:0;
    text-align: center;
    font-family: arial,helvetica, sans-serif;
}

/*
div#deleted {
    background-color: red;
    padding: 10px;
    text-align: center;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
    font-family: arial,helvetica;
    font-size: 16px;
    opacity:0;
} */

/*
button.delete {
    background-color: transparent;
    border: none;
    background-image: url(../img/borrar.png);
    background-position: center center;
    background-repeat: no-repeat;
    padding: 10px;
    text-indent: -9999px;
    display: block;
    background-size: 20px;
    height: 40px;
    width: 40px;
    margin: 0 auto;
    cursor: pointer;
}

.delete a{
    background-color: red!important;
}

.active {
    background-color: red!important;
}

div.buscar {
    margin-bottom: 20px;
}

div.buscar h2 {
    margin-bottom: 10px;
}

.buscador {
    width: 100%;
    padding: 10px;
}
*/

@keyframes show {
    0%   { opacity: 0; }
    100% { opacity: 1; }
}

@keyframes hide {
    0%   { opacity: 1; }
    100% { opacity: 0; }
}

.show {
    animation: show .5s ease-in 1 forwards;
}

.hide {
    animation: hide .5s ease-in 1 alternate;
}
</style>