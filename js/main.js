$(document).ready(function(){
   $("#container").css("height",$(window).height());
    
    $("#container-row").css("paddingTop",($(window).height()/2)-70+"px"); 
    
    $("#getWeather").click(function(event){
                     event.preventDefault();        
        if($("#city").val()!= ""){
                                $.post("source.php","city="+$("#city").val(),function(data){
                                         if(data==""){
                                                    $("#displaySuccess").hide();
                                                   $("#displayFailure").show();
                                                  $("#displayFailure").html("<p>Sorry,                                                      the city<u><strong> "+$("#city").val()+"</strong></u> is not a valid city or we don't have a forecast for                                                          it at the moment!</p>").fadeIn();  
                                                    }else{
                                                        $("#displayFailure").hide();
                                                        $("#displaySuccess").show();
                                                        $("#displaySuccess").html("<p> "+data+" </p>" ).fadeIn();
                                                    }
                                    
            });
        }else{   
            $("#displaySuccess").hide();
                $("#displayFailure").show();
               $("#displayFailure").html("<p>Please, input your city of choice. </p>").fadeIn();

              }
            
        
        
        
    });
    
});