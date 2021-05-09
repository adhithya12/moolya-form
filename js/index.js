$(document).ready(function(){
    $("#regform").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
 
        $.post("controllers/submit.php", formValues, function(data){
	if(data=="no"){
		alert("error");
	}
        else{
	$("#sub").css("display","block");
	$("#reg").css("display","none");
	$("#reg").css("opacity","0");
	$("#sub").html(data);
	}
        });
    });
	 $("#searchform").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
 
        $.post("controllers/search.php", formValues, function(data){
	if(data=="no"){
		alert("error");
	}
        else{
	$("#search").css("display","none");
	$("#sub").css("display","block");
	$("#search").css("opacity","0");
	$("#sub").html(data);
	}
        });
    });
    $("#search_btn").click(function(){
	$("#reg").css("display","none");
	$("#search").css("display","block");
    });
    $("#redirect1").click(function(){
	$("#reg").css("display","block");
	$("#search").css("display","none");
    });
    $("#redirect2").click(function(){
	
    });
});
function func(){
	$("#sub").css("display","none");
	$("#reg").css("display","block");
}