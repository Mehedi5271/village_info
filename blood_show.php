
<?php 
$conn = mysqli_connect('localhost','root','','ullapara');

if(isset($_GET['search'])){
    $search_text = $_GET['search'];

$query = "SELECT * FROM  blood WHERE blood_group LIKE '$search_text' ";
$result = mysqli_query($conn,$query) ;

if(mysqli_num_rows($result)>0){
    echo "<table border='1'>";
  while($data = mysqli_fetch_assoc($result)){
 

   $donor_id = $data['donor_id'];
   $donor_name= $data['donor_name'];
   $blood_group= $data['blood_group'];
   $address= $data['address'];
   $number= $data['number'];
   $birth= $data['birth'];

   echo "<tr>
       <td> $donor_name </td>
       <td>$blood_group</td>
       <td>$address</td>
       <td>$number</td>
       <td>$birth</td>
  
   </tr>";
  }
echo "</table>";
  

} header("location:blood_show.php");



  }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .table{
           margin-top: 20px;
        }

        .search{
            margin-left: 520px;
        }
        .box{
            background-color: beige;
        }

        

    </style>
</head>
<body>

<?php

$conn = mysqli_connect('localhost','root','','ullapara');

// delete part

if(isset($_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
 
    $sql = "DELETE FROM blood WHERE donor_id = $deleteid";
 
    $adanprodan = mysqli_query($conn,$sql);
    
 }



$query = "SELECT * FROM  blood ORDER BY donor_id DESC";

$result = mysqli_query($conn,$query) or die("failed");

$count = mysqli_num_rows($result);
if($count>0){
    
?>



<div class="container">
<table class="table table-success ">
  <thead>
    
    <tr>
    <h3 class="text-center p-2 mt-2 text-primary bg-primary-subtle">Donor Information</h3>
    <form class="box" action="search.php" method="GET" >
  	<input class="search" type="text" placeholder="Search blood..." name="search">
	  <input type="submit" value="Submit">
    </form>
      <th scope="col">Serial</th>
      <!-- <th scope="col">ID</th> -->
      <th class="text-center" scope="col">Name</th>
      <th class="text-center" scope="col">Blood Group</th>
      <th class="text-center" scope="col">Address</th>
      <th class="text-center" scope="col">Number</th>
      <th class="text-center" scope="col">Date Of Birth</th>
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

<?php 

$serial = 1;



while($row = mysqli_fetch_assoc($result)){




?>

    <tr class="text-center">
    <td><?php echo $serial++ ?></td>
    
      
      <!-- <td><?php echo $row['donor_id'] ?></td> -->
      <td><?php echo $row['donor_name'] ?></td>
      <td><?php echo $row['blood_group'] ?></td>
      <td><?php echo $row['address'] ?></td>
      <td><?php echo $row['number'] ?></td>
      <td><?php echo $row['birth'] ?></td>
    
      <p></p>

      <td>
        <span class='btn btn-success'> <a class="text-white text-decoration-none"  href='blood_update.php?edit_id=<?php echo $row['donor_id'] ?>'>  Update </a> </span>
         <span class='btn btn-danger'><a class="text-white text-decoration-none" href='blood_show.php?deleteid=<?php echo $row['donor_id'] ?>'>  Delete </a></span>
      </td>
      
    
    </tr>

    <?php } ?>
   
  </tbody>
</table>
</div>
<?php } ?>
</body>
</html>
