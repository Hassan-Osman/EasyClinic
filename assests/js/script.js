/*
$(document).ready(function() {
    $("#demo").html("now dom is working!..welcome to jquery and javascript");
});



$(document).ready(function() {
    $("#trigger").click(

    		function() {
    		$("#demo").html("Hello, World!...this is a jquery button");
					   }

    	);
});

*/

$(document).ready(function() {
    $("#trigger").click(function() {
    $("#demo").html("Hello, World!");
    });
});



$(document).ready(function() {
    $(".trigger").click(function() {
        $(".overlay").toggle();
    });
});