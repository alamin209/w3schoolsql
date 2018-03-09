
<?php
$con=mysqli_connect("localhost","root","","w3school");

if(mysqli_connect_error())
{
    echo "this is connection error";
}
?>

<?php
 $all ="Select * from  w3school";
 $all_run=mysqli_query($con,$all);
 if (mysqli_num_rows($all_run) > 0)
   {
    while ($result=mysqli_fetch_assoc($all_run))
    {   ?>



 <table>
     <tr>
         <th>

             Name
         </th>
         <th>
             Email
         </th>
         <th>
             Password
         </th>

         <th>
             Country
         </th>
     </tr>

     <tr>
         <td> <?php echo $result['name'] ?></td>
         <td><?php echo $result['email'] ?> </td>
         <td><?php echo $result['password']  ?></td>
         <td><?php echo $result['country']  ?></td>
         <td></td>

     </tr>

  <?php  } } ?>
 </table>
<?php

$all="SELECT * FROM  w3school ";
$all_run=mysqli_query($con,$all);
if (mysqli_num_rows($all_run) > 0)
{
while ($result=mysqli_fetch_assoc($all_run))
{   ?>

<?php // $id=$result['id']; ?>



<form action="" method="post" >

    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $result['name'] ?>" >
    <input   hidden name="id" value=" <?php echo $result['id'] ?> ">//////////////// make me Cryyy////////////////////////////////
    <label>Email: </label>
    <input type="email" name="email" value="<?php echo $result['email'] ?>">
    <label for=""> Password</label>
    <input type="password" name="pass" value="<?php echo $result['password']  ?>">
    <label for=""> Country:</label>
    <input type="text" name="country" value="<?php echo $result['country']  ?>">
    <input type="submit" name="submit" value="update">
</form>
<?php } } ?>


<?php

if (isset($_POST['submit']))
{
    $id=$_POST['id'];
    print_r($id);
    $name=$_POST['name'];
    print_r($name);
    $email=$_POST['email'];
    print_r($email);
    $pasword=$_POST['pass'];
    $country=$_POST['country'];


}

print_r($name);
$con=mysqli_connect("localhost","root","","w3school");
$upadet ="UPDATE w3school  SET name='$name', email= '$email',password='$pasword',country='$country' WHERE  id='$id'";
$run=mysqli_query($con,$upadet);
if($run){
    echo"<script>alert('Information has been added sucessfully')</script>";

}
else
{

    echo "<script>alert('product is not added')</script>";
}
?>


<?php  mysqli_close($con); ?>