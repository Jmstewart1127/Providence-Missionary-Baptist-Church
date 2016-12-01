var request;
    $(document).ready(function () {
        $("#database").submit(function (event) {
            if (request) {
              request.abort();
            }

    var $form = $(this);
    var serializedData = $form.serialize();
          request = $.ajax({
                url:'sendMail.php',
                type:'POST',
                data: serializedData
	  });

      request.fail(function (jqXHR, textstatus, errorThrown){
        console.error(
          "Error: "+
          textStatus, errorThrown
        );
      });

request.always(function () {
    $inputs.prop("disabled", false);
});

event.preventDefault();
	});
});

$('#submit').click(function(){
$('#posted').fadeIn("fast");
	var x = document.forms["form1"]["name"].value;
	var y = document.forms["form1"]["email"].value;
	var z = document.forms["form1"]["phoneNumber"].value;
	var xx = document.forms["form1"]["message"].value;
    if (x == null || x == "" || y == null || y == "" || z == null || z == "" || xx == null || xx == "") {
        alert("Complete all fields.");
	}
	else {
	var message = "Record Successfully Added";
	document.getElementById("message").innerHTML = message;
	}
	});
	
	
	
	
var request;
    $(document).ready(function () {
        $("#databas3").submit(function (event) {
            if (request) {
              request.abort();
            }
    var $form = $(this);
    var serializedData = $form.serialize();
          request = $.ajax({
                url:'prayerRequestSend.php',
                type:'POST',
                data: serializedData
	  });

      request.fail(function (jqXHR, textstatus, errorThrown){
        console.error(
          "Error: "+
          textStatus, errorThrown
        );
      });

request.always(function () {
    $inputs.prop("disabled", false);
});

event.preventDefault();

	});
});

$('#submi7').click(function(){
	$('#post3d').fadeIn("fast");
    		var x = document.forms["form2"]["name"].value;
		var y = document.forms["form2"]["email"].value;
		var xx = document.forms["form2"]["message"].value;
    	if (x == null || x == "" || y == null || y == "" || xx == null || xx == "") {
        	alert("Complete all fields.");
	}
	else {
	var message = "Record Successfully Added";
	document.getElementById("messag3").innerHTML = message;
	}
});	