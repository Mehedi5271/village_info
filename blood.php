<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donor</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">

        
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">


<style>
    .blood{
        color: #21aac0;
    }
      .btn-grad {
            background-image: linear-gradient(to right, #2C3E50 0%, #4CA1AF  51%, #2C3E50  100%);
           
            padding: 10px 35px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
            margin-left: 150px;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
</style>
    </head>
    <body>

     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa  me-3"></i>Amar Ullapara</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <!-- <a href="courses.html" class="nav-item nav-link">Catagory</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Catagory</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Historical Place</a>
                        <a href="testimonial.html" class="dropdown-item">River</a>
                        <a href="404.html" class="dropdown-item">Famous people</a>
                        <a href="team.html" class="dropdown-item">School</a>
                        <a href="testimonial.html" class="dropdown-item">College</a>
                        <a href="404.html" class="dropdown-item">village Life</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Ullapara Riders Club<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    
      <div class="row">
    <div class="col-md-12">
      <form action="blood.php" method="POST">
        <h1 class="blood"> Blood Donation Form </h1>
        
        <fieldset>
        
          <label for="name">Name:</label>
          <input type="text" id="name" name="donor_name">
          <label for="bg">Blood Group:</label>  <br>
          <select id="bg" name="bg">
            <optgroup label="Web">
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
          </select> <br>
        
          <label for="Address">Address:</label>
          <input type="text" id="mail" name="address">
       
          <label for="number">Mobile Number:</label>
          <input type="text" id="number"name="number">
        
          <label>Dat Of Birth:</label>
         <input type="date" name="birth" id="" >
           <br> 
       
       
           <input name="submit" class="btn-grad" type="submit" value="Submit">
        
       </form>
        </div>
      </div>



       <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
      
    </body>
</html>

<?php

$conn = mysqli_connect('localhost','root','','ullapara');

       if(isset($_POST['submit'])){
        
        $donor_name = $_POST['donor_name'];
        $blood_group = $_POST['bg'];
        $address = $_POST['address'];
        $number = $_POST['number'];
        $birth = $_POST['birth'];

        
        

        $sql = "INSERT INTO blood (donor_name,blood_group,address,number,birth) VALUES ('$donor_name', '$blood_group', '$address','$number','$birth')";

        $result = mysqli_query($conn,$sql);
        

        echo "<script> window.location.replace('myblood.php') </script>";

       }

?>



