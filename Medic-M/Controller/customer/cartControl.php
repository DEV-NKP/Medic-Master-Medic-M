<?php
  /*  function abc($name){
        echo '<script type="text/javascript">' .
        'console.log(' . $name . ');</script>';
    }*/
    require "../../Model/customer/cartDB.php";
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
    {
       addcart();
    }

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['all_remove']))
    {
       removeall();
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submitall']))
    {
       order();
    }

    
?>