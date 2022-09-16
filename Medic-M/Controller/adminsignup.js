var flag=false;
var flag1=false;
var input2 = document.getElementById("signup_email");
input2.addEventListener("keyup", function(event2)
{

condition="";
    $.ajax({
        url:"findemail.php",
        type:"post",
        data: { id: input2.value },
        success:function(data){
           // $("#main").html(data);
           //alert(data);
           condition=data;
           if(condition=="true")
    {
    document.getElementById("signup_email_alreadymsg").style.display="block";
    document.getElementById("nogap1").classList.remove("nogap");

    flag=false;

    check();

}  
else{
    document.getElementById("signup_email_alreadymsg").style.display="none";
    document.getElementById("nogap1").classList.add("nogap");   

    flag=true;
    check();

}
        }
    });
  
    
});


var input1 = document.getElementById("signup_uname");
input1.addEventListener("keyup", function(event1) 
{

    condition="";
    $.ajax({
        url:"finduname.php",
        type:"post",
        data: { id: input1.value },
        success:function(data){
           // $("#main").html(data);
           //alert(data);
           condition=data;
           if(condition=="true")
    {
    document.getElementById("signup_uname_alreadymsg").style.display="block";
    document.getElementById("nogap2").classList.remove("nogap");

    flag1=false;

    check();
}  
else{
    document.getElementById("signup_uname_alreadymsg").style.display="none";
    document.getElementById("nogap2").classList.add("nogap");   

    flag1=true;

    check();
}
        }
    });

});

function check()
{
    if(flag && flag1)
    {
        document.getElementById("seller_sign_submit_id").disabled = false;
    }

    else
    {
        document.getElementById("seller_sign_submit_id").disabled = true;
    }
}

$(document).ready(function(){
    $("#profilepic").on('change',function(){
    
      var src = document.getElementById("profilepic");
      var target = document.getElementById("imageshow");
      showImage(src, target);
      
    });
});
function showImage(src, target) {
    var fr = new FileReader();
    fr.onload = function(){
        target.src = fr.result;
    }
    fr.readAsDataURL(src.files[0]);
}