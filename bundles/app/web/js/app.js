$(function(){

$(".signup-art").addClass("border");
    $("._modal-content button").click(function(){
       $(this).siblings("button").removeClass("border");
        $(this).addClass("border");
        
//    get the name on the button clicked and display corresponding //    form  
        if($(this).text() === "LOG IN"){
        $(".form1").css("display","none");
        $(".form2").css("display", "block");
    }
        else{
        $(".form2").css("display","none");
        $(".form1").css("display", "block");
    }
  })
  $(".change").click(function(){
      $("._modal-3").css("display","block");
  })
 })