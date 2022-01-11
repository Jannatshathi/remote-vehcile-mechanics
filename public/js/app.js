let a=document.querySelector("select");
let b=document.querySelector(".amount");
let c=document.querySelector(".ip");


 function myFunction()
 {
     if(a.value===`mechanics`){
      
             b.classList.remove("fadeout");
             c.classList.remove("marge");

        
        }
         else if(a.value===`role`){
            
             
                b.classList.add("fadeout");
                c.classList.add("marge");
            }
            else if(a.value===`user`){
            
             
                b.classList.add("fadeout");
                c.classList.add("marge");
            }

}
