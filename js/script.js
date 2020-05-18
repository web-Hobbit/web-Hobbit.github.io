/*var elements = document.getElementsByClassName("wt");
for(var i = 0; i < elements.length; i++)
{
	elements[i].onclick = function()
	{
     
       var el = elements[0];
       while(el)
       {
     	  if(el.tagName === "DIV")
     	   {
            el.classList.remove("bak");
            
           }

           el=el.nextSibling;
       }

       this.classList.add("bak");
	};
}*/

   
            var elements = document.getElementsByClassName("wt");
            for(var i = 0; i < elements.length; i++)
            {
                elements[i].onclick = function(){
                    
                    // remove class from sibling
                    
                    var el = elements[0];
                    while(el)
                    {
                        if(el.tagName === "DIV"){
                            //remove class
                            el.classList.remove("active");
                            
                        }
                        // pass to the new sibling
                        el = el.nextSibling;
                    }
                    
                  this.classList.add("active");  
                };
            }
/*
$(".plus").click(function() {
  var $NumberPlus = $(".number");
  $NumberPlus.val(parseInt($NumberPlus.val()) + 1);
  $NumberPlus.change();
}
);

(".minus").click(function() {
  var $NumberMinus = $(".number");
  $NumberMinus.val(parseInt($NumberMinus.val()) - 1);
  $NumberMinus.change();

  if($NumberMinus.val() === 0)
}
);*/

$(document).ready(function() {
    $('.Minus').click(function () {
      var $input = $(this).parent().find('input');
      var count = parseInt($input.val()) - 1;
      count = count < 1 ? 1 : count;
      $input.val(count);
      $input.change();
      return false;
    });
    $('.Plus').click(function () {
      var $input = $(this).parent().find('input');
      $input.val(parseInt($input.val()) + 1);
      $input.change();
      return false;
    });
  });