
var nav = function() {
    var data = $(".nav").attr("data-accordion");
                     
    $(".Menu").on("click", function(){
        if(data === "close"){
            $(".SubMenu").sliderUp();
               
            if($(this).hasClass("active")){
               $(this).toggleClass("active");
            }
            else{
                $(".Menu").removeClass("active");
              
                $(this).toggleClass("active");
            }
        }
        else{
            $(this).toggleClass("active");
        }
        $(this).next(".SubMenu").not(":animated").slideToggle();
                         
    });
}

nav();
  