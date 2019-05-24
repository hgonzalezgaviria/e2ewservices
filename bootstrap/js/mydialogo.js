function myModal(urlApp) {
		$("#modalContent1")[0].src = urlApp;
		$("#modalContent1").css("min-height", "48rem");
		$("#myModalDialog1").addClass("modal-lg");		
		if (urlApp=='logs/'){
			$('#miModal .modal-title').html('<b>Logs e2ew</b>');		
		}else{
			$('#miModal .modal-title').html('<b>Estado de App</b>');		
		}
		
		setTimeout(function() { $('#miModal').modal('show'); }, 500);
}

function accionLogs()
    {
		var opcion = confirm("Esta seguro de limpiar los logs");
		 if (opcion == true) {
        $.ajax({
            type:'POST', //aqui puede ser igual get
            url: 'Clientes/cleanlogs.php',//aqui va tu direccion donde esta tu funcion php
            //data: {id:1,otrovalor:'valor'},//aqui tus datos
            success:function(data){
                //lo que devuelve tu archivo mifuncion.php
				//alert('ok');
           },
           error:function(data){
            //lo que devuelve si falla tu archivo mifuncion.php
			//alert('NO-ok');
           }
         });
		 } else {	
	    //mensaje = "Has clickado Cancelar";
	}
    }

$(document).ready(function(){

   $('#universalModal form').submit(function (event){
       event.preventDefault();

       var formObj = {};
       var inputs = $(this).serializeArray();
       var url = '';
       $.each(inputs, function(i, input) {
           formObj[input.name] = input.value;
       });
       var len = inputs.length;
       var  dataObj = {};
       for (i=0; i<len; i++) {
                dataObj[inputs[i].name] = inputs[i].value;
        }
            //inputs['lname'];
                    $.post(url, inputs, function(data) {
                   $('#universalModal').modal('hide');

               });

   });

   $('#searchBtn_logs').off('click').click(function(){       

	    //$('#universalModal').modal('show');
		$("#modalContent")[0].src = './logs/';
		$("#modalContent").css("min-height", "48rem");
		$("#myModalDialog").addClass("modal-lg");		
		$('#universalModal .modal-title').html('<b>Logs e2ew</b>');		
		setTimeout(function() { $('#universalModal').modal('show'); }, 500);
//       $('#universalModal').modal('show');       
       //$('#universalModal .modal-body').html($('#searchResultForm').val());
       $('#universalModal .modal-footer button#submitBtn').html('Save and Exit');


   });
   /*
 var URLdomain = window.location.host;
 var portGlass = ':8080';
 if (URLdomain == 'e2ew.inttegrio-aws.com'){
var URLdomain = window.location.host;	 
 }else{
	 var URLdomain = window.location.host;
	 var URLdomain = URLdomain.concat(portGlass);
 }
     $('#searchBtn_views').off('click').click(function(){       

	    //$('#universalModal').modal('show');
		$("#modalContent1")[0].src = 'http://'+URLdomain+'/EICW/services/servicesEIC?wsdl';
		$("#modalContent1").css("min-height", "48rem");
		$("#myModalDialog1").addClass("modal-lg");		
		$('#miModal .modal-title').html('<b>Logs e2ew</b>');		
		setTimeout(function() { $('#miModal').modal('show'); }, 500);
//       $('#universalModal').modal('show');       
       //$('#universalModal .modal-body').html($('#searchResultForm').val());
       $('#miModal .modal-footer button#submitBtn').html('Save and Exit');


   });
   */
});

