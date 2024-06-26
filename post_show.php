<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .table{
           margin-top: 20px;
        }
        .disabled-link {
  pointer-events: none;
}
.m:hover{
  background-color: green;
  color: white;
}
    </style>
</head>
<body>
    

<?php

$conn = mysqli_connect('localhost','root','','ullapara');

// delete part

if(isset($_GET['deleteid'])){
   $deleteid = $_GET['deleteid'];

   $sql = "DELETE FROM post WHERE id = $deleteid";

   $adanprodan = mysqli_query($conn,$sql);
   
}



$query = "SELECT * FROM  post ORDER BY id DESC ";

$result = mysqli_query($conn,$query) or die("failed");

$count = mysqli_num_rows($result);
if($count>0){
    
?>

<div class="container">
<table class="table table-success ">
  <thead>
    
    <tr>
    <h3 class="text-center p-2 mt-2 text-primary bg-primary-subtle">Post Information</h3>
      <th scope="col">Serial</th>
      <!-- <th scope="col">ID</th> -->
      <th scope="col">Name</th>
      <th scope="col">Title</th>
      <th scope="col">Catagory</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Date</th>
      <th scope="col">Email</th>
      <th scope="col">status</th>
      <th scope="col">Delete</th>
      
     
      
    </tr>
  </thead>
  <tbody>

<?php 

$serial = 1;
$image = $row['image'];



while($row = mysqli_fetch_assoc($result)){
  $id=$row['id'];
  $email=$row['email'];


?>

    <tr>
    <td><?php echo $serial++ ?></td>
    
      
      <!-- <td><?php echo $row['id'] ?></td> -->
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['title'] ?></td>
      <td><?php echo $row['catagory'] ?></td>
      <td><?php echo $row['description'] ?></td>
      <td> <img width="100px" src="images/<?php echo $row['image']; ?>"> </td>
      <td><?php echo $row['date'] ?></td>
      <td><?php echo $row['email'] ?></td>
    
      <p></p>

      <td>
       <?php 

       if($row['status']==1){
        echo "<p>  <a href='active.php?id=$id&&status=0&&email=$email' class='btn btn-success disabled-link n'  >   Approved    </a></p>";
       }
       else {
        echo "<p> <a href='active.php?id=$id&&status=1&&email=$email' class='btn btn-warning m'> Approve </a></p>";
       }
       
       ?>
        
      </td>
      <td>
      <span class='btn btn-danger'><a class="text-white text-decoration-none" href='post_show.php?deleteid=<?php echo $row['id'] ?>'>  Delete </a></span>
      </td>
      <i class="bi bi-check-circle-fill"></i>
      
    
    </tr>

    <?php } ?>
   
  </tbody>
</table>
</div>
<?php } ?>




</body>

</html>







