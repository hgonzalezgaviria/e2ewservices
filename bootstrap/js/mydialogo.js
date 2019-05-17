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
       var student_num = $('input[name="student_number"]').val();

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
});
