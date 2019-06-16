$(document).ready( function(){

    // Show Sign in Section
    $("#signin").click(function(){
        $("#signInDiv").css({
            "visibility": "visible" 
        }) ; 
        $("#signInDiv").addClass("bounceInRight") ;
        $("#signInDiv").removeClass("bounceOutRight") ; 

    }) ;


    // Hide Sign In Section
    $("#hideSignIn").click( function(){
        $("#signInDiv").addClass("bounceOutRight") ;
        $("#signInDiv").removeClass("bounceInRight") ;

    }) ; 
    $("#closeSignIn").click( function(){
        $("#signInDiv").addClass("bounceOutRight") ; 
        $("#signInDiv").removeClass("bounceInRight") ;
    }) ; 

    // Show About us 
    $("#aboutBtn").click(function(){
        $("#about").css({
            "visibility": "visible" 
        }) ; 
        $("#about").addClass("bounceInRight") ;
        $("#about").removeClass("bounceOutRight") ; 
    }) ; 
    $("#closeAbout").click(function(){
        $("#about").addClass("bounceOutRight") ; 
        $("#about").removeClass("bounceInRight") ;
    })
}) ;