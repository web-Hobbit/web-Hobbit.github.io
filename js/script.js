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