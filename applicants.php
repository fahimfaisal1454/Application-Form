<?php 
include('connection.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<?php
$query = "SELECT * FROM appform";
$data= mysqli_query($conn, $query);

$total = mysqli_num_rows($data);


if($total != 0)
{
    ?>
    <section>
  <h1 align="center" style="padding: 30px;"><mark style="background-color:rgba(0, 0, 0, 0.7); color:antiquewhite; padding: 10px; border-radius: 5px;">Applicants List</mark></h1>
  <div class="tbl-header">
   <center> <table  cellpadding="10" cellspacing="5" border="1" style="background-color: rgba(0, 0, 0, 0.7); color:aliceblue ; border-radius: 5px; text-align: center;">
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Job Role</th>
        <th>Address</th>
        <th>City</th>
        <th>Pin-Code</th>
        <th>Date</th>
        <th>CV</th>
</tr>
</thead>

</div>
  <div class="tbl-content">
 
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
    echo  "
              <tbody>
        <tr>
        <tr>
        <td>".$result['fname']."</td>
        <td>".$result['lname']."</td>
        <td>".$result['email']."</td>
        <td>".$result['jobrole']."</td>
        <td>".$result['address']."</td>
        <td>".$result['city']."</td>
        <td>".$result['pincode']."</td>
        <td>".$result['date']."</td>
        <td>".$result['addcv']."</td>
        </tr>
        </tbody>

      </div>
    </section>";
    }
}
else
{
    "no found";
}
?>
</table>
</center>
