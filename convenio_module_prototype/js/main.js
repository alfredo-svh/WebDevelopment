(function(){
	"use strict";

	document.addEventListener('DOMContentLoaded', function(){

		/*
		// user data fields
		var name= document.getElementById('contact_name');
		var email= document.getElementById('contact_email');
		// add more!!!


		//fix errorDiv 
		if(document.getElementById('add_convenio_form')){

			name.addEventListener('blur', validateFields);
			email.addEventListener('blur', validateFields);
			email.addEventListener('blur', validateEmail);

			function validateFields(){
				if(this.value==''){
					errorDiv.style.display = 'block';
					errorDiv.innerHTML = 'este campo es obligatorio';
					this.style.border = '1px solid red';
					errorDiv.style.border = '1px solid red';
				} else{
					errorDiv.style.display = 'none';
					this.style.border = '1px solid #cccccc';
				}
			}

			function validateEmail(){
				if(this.value.indexOf('@') > -1){
					errorDiv.style.display = 'none';
					this.style.border = '1px solid #cccccc';
				} else{
					errorDiv.style.display = 'block';
					errorDiv.innerHTML = 'el correo electronico no es valido';
					this.style.border = '1px solid red';
					errorDiv.style.border = '1px solid red';
				}
			}

		}
		*/

	}); //DOM content loaded
})();


$(document).ready(function() {
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