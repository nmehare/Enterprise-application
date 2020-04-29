$(document).ready(function() {
//change CAPTCHA on each click or on refreshing page
$("#reload").click(function() {

$("img#img").remove();
var id = Math.random();
$('<img id="img" src="captcha1.php"/>').appendTo("#imgdiv");
id ='';
});

//validation function
$('#button').click(function() {
var name = $("#username").val();
var password = $("#password").val();
var captcha = $("#captcha").val();

if (name == '' || password == '' || captcha == '')
{
alert("Fill All Fields");
}

else
{ //validating CAPTCHA with user input text
var dataString = 'captcha=' + captcha;
$.ajax({
type: "POST",
url: "verify.php",
data: dataString,
success: function(response) {
	
	 if (response == 'succes') 
		 window.location.href = 'index.php' 
     else if (response == "failed") {		 
		alert("Invalid captcha. Login again");
        window.location.href = 'login.php' 
	 }
     else 
        $("#message").html("<div class='error_log'><p class='error'>Invalid username and/or password.</p></div>");

	
//alert(response);
}
});
}
});
});
// window.onload = function() {
    // if (window.jQuery) {  
        // // jQuery is loaded  
        // alert("Yeah!");
    // } else {
        // // jQuery is not loaded
        // alert("Doesn't Work");
    // }
// }