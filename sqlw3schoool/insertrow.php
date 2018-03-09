<?php 
$con=mysqli_connect("localhost","root","","w3school");

echo "you done it";
  if(mysqli_connect_error())
  {
    echo "this is connection error";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 <form action="" method="post" >
     <label>Name:</label>
<input type="text" name="name">
     <label>Email: </label>
<input type="email" name="email">
     <label for=""> Password</label>
<input type="password" name="pass">
     <label for=""> Country:</label>
<input type="text" name="country">
<input type="submit" name="submit" value="submit">
</form>





<?php

if (isset($_POST['submit'])) {
  $n=$_POST['name'];
  $e=$_POST['email'];
  $p=$_POST['pass'];
  $c=$_POST['country'];

  $insrt="INSERT  into  w3school(name,email,password,country) values('$n','$e','$p','$c')";
  $insetadd=mysqli_query($con,$insrt);
   if ($insetadd==true) {
      echo ("<script> alert ('good job');


 window.location.href='http://localhost/w3shool/w3schoolsql/sqlw3schoool/insertrow.php'; </script>");

  }
else  {
    echo 'nothing to deon yet';
  }


}

// else  {
//   echo "somthing might be wrong";
// }

 $all="SELECT * FROM  w3school";
 $all_run=mysqli_query($con,$all);

 if (mysqli_num_rows($all_run) > 0)
 {
   while ($result=mysqli_fetch_assoc($all_run))

   {
//     echo "ID".  $result['id']."name".$result['name']."password".
//     $result['password'];mysqli_close($con);

       echo " <table>
  <th>NAme</th>
   <th>CountryName</th>
   <th></th>
  
  
  </table> ";

   }
 }
 else
 {
   echo "you do not left any row";
 }

/*
while ($row_production=mysqli_fetch_array($all_run))
  {
    $product_id=$row_production['id'];
    $product_cat=$row_production['name'];
    $product_brand=$row_production['password'];
    $product_title=$row_production['country'];
   
      echo  "
     <div>
     <h3>Id:$product_id</h3>
     <h3> NAme:$product_cat</h3>
     <h3> Password:$product_brand</h3>

     </div>
     
     ";
  } 
  */

?>








</body>
</html>
