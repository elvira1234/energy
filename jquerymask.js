
$(document).ready(function(){
    $("#Cedula").mask("000-0000000-0");
    $("#telefono").mask("(000) 000-0000");
	$("#FechadeNacimiento").mask("0000-00-00");
    $("#dob").mask("00/00/0000");
    $("#credit_card").mask("0000-0000-0000-xxxx");

});



// $(function(){
//     $("#myid").mask("000.000.000/00");
//     $("#phone").mask("(0000) 0000-0000");
//     $("#dob").mask("00/00/0000");
//     $("#credit_card").mask("0000-0000-0000-xxxx");

// });


//  The .ready() method is typically used with an anonymous function:
//
//  $( document ).ready(function() {
        // Handler for .ready() called.
//  });

//  Which is equivalent to the recommended way of calling:

//  $(function() {
//     // Handler for .ready() called.
//  });

// Read more here: https://api.jquery.com/ready/