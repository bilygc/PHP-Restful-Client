$(function () {
    $('#datetimepicker').datetimepicker({
        locale: 'es',
        format: 'YYYY-MM-DDTHH:mm:ss.SSSZ'
    });

    $("#datetimepicker").on("dp.show", function (e) {
	    $('#datetimepicker').data("DateTimePicker").minDate(e.date);
	});

	$("#datetimepicker").on("dp.change", function (e) {
	    //console.log(e.date._i);
	});


	$("#send_sms").submit(function(e) {
	    e.preventDefault();    
	    var formData = new FormData(this);

	    $.ajax({
	        url: './php/loadfile.php',
	        type: 'POST',
	        datatype: 'json',
	        data: formData,
	        success: function (data) {
	            //console.log(data);
	            var response = JSON.parse(data);
	            alert(response["SmsCount"]);
	        },
	        cache: false,
	        contentType: false,
	        processData: false
	    });

	});

	$("#in_text").keydown(function(){
    	//console.log($(this).val().length);
    	if ( $("#in_text").val().length <= 100 ) {
    		$("#divMsg").removeClass( "has-warning has-error" ).addClass( "has-success" );
    		$("#iconmsg").removeClass( "glyphicon-warning-sign glyphicon-remove" ).addClass( "glyphicon-ok" );
    	}
    	else if($("#in_text").val().length > 100 && $("#in_text").val().length <= 150){
    		$("#divMsg").removeClass( "has-success has-error" ).addClass( "has-warning" );
    		$("#iconmsg").removeClass( "glyphicon-ok glyphicon-remove" ).addClass( "glyphicon-warning-sign" );
    	}
    	else if( $("#in_text").val().length > 150){
    		$("#divMsg").removeClass( "has-success has-warning" ).addClass( "has-error" );
    		$("#iconmsg").removeClass( "glyphicon-ok glyphicon-warning-sign" ).addClass( "glyphicon-remove" );
    	}
    	
    });

});