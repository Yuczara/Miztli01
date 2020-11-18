<?php
session_start();
    
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
          $myitems=array_column($_SESSION['cart'],'Item_Name');
          if(in_array($_POST['Item_Name'],$myitems))
          {
              echo "<script>
              alert('Item Already Added');
              window.location.href='index2.php';
              </script>";
          }
          $count=count($_SESSION['cart']); 
          $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'price'=>$_POST['price'],'Quantity'=>1);
          print_r($_SESSION['cart']);
        }
        else
        {
          $_SESSION['cart'][0]==array('Item_Name'=>$_POST['Item_Name'],'price'=>$_POST['price'],'Quantity'=>1);
            print_r($_SESSION['cart']);

        }
    }
}
?>