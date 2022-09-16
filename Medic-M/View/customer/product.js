function myFunctionP(n,x){
  x="quantity"+x;
  //alert(x);
    var input = document.getElementById(x);
   if(input.value<n)
   {
  input.value=(parseInt(input.value)+1);
   }
  }
  function myFunctionM(n,x){
    var input = document.getElementById("quantity"+x);
   if(input.value>0)
   {
  input.value=(parseInt(input.value)-1);
   }
  }