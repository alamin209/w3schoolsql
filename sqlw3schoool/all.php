<?php
$con=mysqli_connect("localhost","root","","w3school");

if(mysqli_connect_error())
{
    echo "this is connection error";
}
?>

<?php
$all= "SELECT  * FROM w3school";
$all_run=mysqli_query($con,$all);
 if (mysqli_num_rows($all_run) > 0)
 {
    while ($result=mysqli_fetch_assoc($all_run))
    {   ?>



        <table border="1px">
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
        </table>

    <?php  } } ?>
            ////sreach cration in php
            <form action="Serach.php"  method="post">

                <input type="text" placeholder="Search by anaothing " name="searches">
                <input type="text" placeholder="Search by anaothing " name="sendserach">
                <input type="submit" name="search" value="serch ">
            </form>
            </br></br></br></br></br></br>
//////////////////////betweeen example here///////////////////////////////////////////////////////
            <form action="Serach.php"  method="post">

                <input type="date" placeholder="Search by anaothing " name="startdate">
                <input type="date" placeholder="Search by anaothing " name="enddate">
                <input type="submit" name="datepost" value="serch ">
            </form>

            <?php

    $all="SELECT MIN(`price`) as prices FROM w3school";
            $all_run=mysqli_query($con,$all);
            if (mysqli_num_rows($all_run) > 0)
            {
            while ($result=mysqli_fetch_assoc($all_run))
            {   ?>



            <table>
                <tr>
                    <th>
                       Minimam  PRICE
                    </th>
                </tr>

                <tr>
                    <td>
                        <?php echo $result['prices'] ?>
                    </td>

                </tr>

                <?php  } } ?>
<?php


                $all="SELECT MAX(`price`) as MAXprices FROM w3school";
                $all_run=mysqli_query($con,$all);
                if (mysqli_num_rows($all_run) > 0)
                {
                while ($result=mysqli_fetch_assoc($all_run))
                {   ?>



                <table>
                    <tr>
                        <th>
                            Maximum  PRICE
                        </th>
                    </tr>

                    <tr>
                        <td>
                            <?php echo $result['MAXprices'] ?>
                        </td>

                    </tr>

                    <?php  } } ?>

<?php
                    $all="SELECT COUNT(`id`) as allname FROM w3school";
                    $all_run=mysqli_query($con,$all);
                    if (mysqli_num_rows($all_run) > 0)
                    {
                    while ($result=mysqli_fetch_assoc($all_run))
                    {   ?>



                    <table>
                        <tr>
                            <th>
                                  Total Insert Data
                            </th>
                        </tr>

                        <tr>
                            <td>
                                <?php echo $result['allname'] ?>
                            </td>

                        </tr>

                        <?php  } } ?>


                        <?php

                        $all="SELECT AVG(`price`) as  avriageprice  FROM w3school";
                        $all_run=mysqli_query($con,$all);
                        if (mysqli_num_rows($all_run) > 0)
                        {
                        while ($result=mysqli_fetch_assoc($all_run))
                        {   ?>



                        <table>
                            <tr>
                                <th>
                              Avarage Price
                                </th>
                            </tr>

                            <tr>
                                <td>
                                    <?php echo $result['avriageprice'] ?>
                                </td>
                            </tr>

                            <?php  } } ?>
<?php

                            $all="SELECT SUM(`price`) as  Total  FROM w3school";
                            $all_run=mysqli_query($con,$all);
                            if (mysqli_num_rows($all_run) > 0)
                            {
                            while ($result=mysqli_fetch_assoc($all_run))
                            {   ?>

                            <table>
                                <tr>
                                    <th>
                                        Total Sum of the Price
                                    </th>
                                </tr>

                                <tr>
                                    <td>
                                        <?php echo $result['Total'] ?>
                                    </td>
                                </tr>

                                <?php  } } ?>
                </table>
/////////////////////////////////  alisisssssssssssssssss example /////////////////////////////////////////
      <?php
//     particuler one colume  value
//      $all= "SELECT `id` AS ID, `name` AS Customer FROM w3school";
//      if the colume name has  a apace then use [give a name and another  like anam name]
// multipule colume selction from table
//      $all= "SELECT `id` +','+ 'name'+ 'wmail'+ ',' + country + ',' + price as totaluserdetail FROM w3school";
//      but  it was not working so i add diffent thnimgs here
      $all ="SELECT  id,  CONCAT(`name`,', ',`email`) AS cols  
    FROM w3school ORDER BY cols";

      $all_run=mysqli_query($con,$all);
                            if (mysqli_num_rows($all_run) > 0)
                            {
                            while ($result=mysqli_fetch_assoc($all_run))
                            {   ?>

                                <table border="1px">
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Details
                                        </th>

                                    </tr>

                                    <tr>
                                        <td> <?php echo $result['id'] ?></td>
                                        <td><?php echo $result['cols'] ?> </td>

                                        </td>

                                    </tr>
                                </table>


                            <?php  } } ?>
                            ////sreach cration in php
                            <form action="Serach.php"  method="post">

                                <input type="text" placeholder="Search by anaothing " name="searches">
                                <input type="text" placeholder="Search by anaothing " name="sendserach">
                                <input type="submit" name="search" value="serch ">
                            </form>
                            </br></br></br></br></br></br>