<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .total{
            text-align: center;
            background-color: red;
        }
        .search{
            margin-left: 550px;
            margin-top: 50px;
            margin-bottom: 20px;
          
        }
        .box{
            background-color: beige;
        }
    </style>
</head>
<body>



<form class="box" action="search.php" method="GET" >
  	<input class="search" type="text" placeholder="Search blood..." name="search">
	  <input type="submit" value="Submit">
    </form>


</body>
</html>


<?php 
$conn = mysqli_connect('localhost','root','','ullapara');

if(isset($_GET['search'])){
    $search_text = $_GET['search'];

    echo "<h1 class='total'  > Total donor list of $search_text </h1>";

    

$query = "SELECT * FROM  blood WHERE blood_group LIKE '$search_text' ";
$result = mysqli_query($conn,$query) ;

if(mysqli_num_rows($result)>0){
      

    echo "<table  class='table table-success' >
    <tr>
    
    <th scope='col'> Name </t>
    <th scope='col'>Blood Group</th>
    <th scope='col'>Address</th>
    <th scope='col'>Number</th>
    <th scope='col'>Date of Birth</th>
    </tr>";
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
  

} 

  }



?>

<thead></thead>



<h1></h1>







<!-- //    <th> Name </th>
//    <th> Blood group </th>
//    <th> Address </th>
//    <th> Number </th>
//    <th> Birth </th>
   
// </tr> -->