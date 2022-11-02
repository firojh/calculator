
<!-- 
if(isset($_POST['submit'])){
   $add_1 = $_POST['add-1'];
   $add_2 = $_POST['add-2'];
   $total = ($add_1)+( $add_2);
  }elseif(isset($_POST['submi'])){
    $add_1 = $_POST['add-1'];
    $add_2 = $_POST['add-2'];
    $total = ($add_1)-( $add_2);
  }elseif(isset($_POST['subm'])){
    $add_1 = $_POST['add-1'];
    $add_2 = $_POST['add-2'];
    $total = ($add_1)*( $add_2);
  }elseif(isset($_POST['sub'])){
    $add_1 = $_POST['add-1'];
    $add_2 = $_POST['add-2'];
    $total = ($add_1)/( $add_2);
  } -->



<?php 

if(isset($_POST['submit'])){
  if($_POST['add-1']==NULL || $_POST['add-2']==NULL)
{
echo "error";
}else{
  $add_1 = $_POST['add-1'];
  $add_2 = $_POST['add-2'];
  $total = ($add_1)+( $add_2);

   }}
   if(isset($_POST['submi'])){
    if($_POST['add-1']==NULL || $_POST['add-2']==NULL)
  {
  echo "error";
  }else{
    $add_1 = $_POST['add-1'];
    $add_2 = $_POST['add-2'];
    $total = ($add_1)-( $add_2);
  
     }}
     if(isset($_POST['subm'])){
      if($_POST['add-1']==NULL || $_POST['add-2']==NULL)
    {
    echo "error";
    }else{
      $add_1 = $_POST['add-1'];
      $add_2 = $_POST['add-2'];
      $total = ($add_1)*( $add_2);
    
       }}
       if(isset($_POST['sub'])){
        if($_POST['add-1']==NULL || $_POST['add-2']==NULL)
      {
      echo "error";
      }else{
        $add_1 = $_POST['add-1'];
        $add_2 = $_POST['add-2'];
        $total = ($add_1)/( $add_2);
      
         }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input type="number" name = 'add-1' placeholder=''><br><br>
    <input type="number" name = 'add-2' placeholder=''><br><br>
    <button type="submit" name = 'submit' >+</button>
     <button type="submit" name = 'submi' >-</button> 
    <button type="submit" name = 'subm' >*</button>
    <button type="submit" name = 'sub' >/</button><br>

    <p>Output:</p>
    <input type="text"  value='<?php if(isset($_POST['submit'])){ if ($total % 2 == 0)
        {
          echo $total. "  =  event number" ;
        }
        else
        {
          echo $total. "  =  odd number" ;
        }} 
    if(isset($_POST['submi'])){ if ($total % 2 == 0)
        {
          echo $total. "  =  event number" ;
        }
        else
        {
          echo $total. "  =  odd number" ;
        } }
    if(isset($_POST['subm'])){ if ($total % 2 == 0)
        {
          echo $total. "  =  event number" ;
        }
        else
        {
          echo $total. "  =  odd number" ;
        } }


    if(isset($_POST['sub'])){ if ($total % 2 == 0)
        {
          echo $total. "  =  event number" ;
        }
        else
        {
          echo $total. "  =  odd number" ;
        } }?> ' ><br><br>




 
</body>
</html>



<!-- if($_REQUEST['add-1']==NULL || $_REQUEST['add-2']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
}





// if(isset($_POST['submit'])){
//    $add_1 = $_POST['add-1'];
//    $add_2 = $_POST['add-2'];
//    $total = ($add_1)+( $add_2);

//   }elseif(isset($_POST['submi'])){
//     $add_1 = $_POST['add-1'];
//     $add_2 = $_POST['add-2'];
//     $total = ($add_1)-( $add_2);

//   }elseif(isset($_POST['subm'])){
//     $add_1 = $_POST['add-1'];
//     $add_2 = $_POST['add-2'];
//     $total = ($add_1)*( $add_2);

//   }elseif(isset($_POST['sub'])){
//     $add_1 = $_POST['add-1'];
//     $add_2 = $_POST['add-2'];
//     $total = ($add_1)/( $add_2);

  } -->