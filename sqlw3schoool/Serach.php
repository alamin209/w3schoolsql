<?php


$server = "localhost";
$username = "root";
$password = "";
$dbname = "w3school";///i///////////////////  Forgating database name               ////////////////////////////////////////////////////////////
$con = new mysqli($server, $username, $password, $dbname);
if (!$con) {
    die("Connection fail" . mysqli_connect_error());

}


?>
<?php

if (isset($_POST['searches'])) {

$search = $_POST['searches'];
$sendserach=$_POST['sendserach'];
print_r($sendserach);
/////////////////////////multipulle serch or  IN Serch exmple////////////////////////////////////////////////
///
///
///
///
///
///
///
/// first is without using in and next is using in opratior /// ///
///
///
///


//$serch= "SELECT * FROM w3school WHERE `name` LIKE '%".$search."%'";
///solve  here because i take in put not search % i reemove it and it work fine
$serch= "SELECT * FROM w3school WHERE `name` IN  ('$search','$sendserach')";



$all_run=mysqli_query( $con,$serch);


if (mysqli_num_rows($all_run)>0)
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
        <th>
            PRICE
        </th>
        <th></th>
    </tr>

    <tr>
        <td> <?php echo $result['name'] ?></td>
        <td><?php echo $result['email'] ?> </td>
        <td><?php echo $result['password']  ?></td>
        <td><?php echo $result['country']  ?></td>
        <td>
            <?php echo $result['price'] ?>
        </td>

    </tr>
        <?php  } }
    else   { ?>
     <?php   echo "Nothnihg Found";   ?>

   <?php  }  ?>

    <?php  } ?>

    /////////////////////////////////    here is a date serch /////////////////////////////////////////////////////

<?php
    if (isset($_POST['datepost'])) {

 $startdate = $_POST['startdate'];
  $enddate=$_POST['enddate'];

   $serch= "select * from  w3school  where `reg_time` between '$startdate' and ' $enddate'";
    $all_run=mysqli_query( $con,$serch);


    if (mysqli_num_rows($all_run)>0)
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
            <th>
                PRICE
            </th>
            <th></th>
        </tr>

        <tr>
            <td> <?php echo $result['name'] ?></td>
            <td><?php echo $result['email'] ?> </td>
            <td><?php echo $result['password']  ?></td>
            <td><?php echo $result['country']  ?></td>
            <td>
                <?php echo $result['price'] ?>
            </td>

        </tr>
        <?php  } }
    else   { ?>
        <?php   echo "Nothnihg Found";   ?>

        <?php  }  ?>

        <?php  } ?>

