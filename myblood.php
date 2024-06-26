<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ullapara</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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

   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <style>

        
   
  .b1{
    margin-left: 540px;
    margin-right: 30px;
    margin-top: 25px;
    border-radius: 10px;
  }
    .b2{
        margin-top: 25px;
        border-radius: 10px;
        padding-left: 20px;
        padding-right: 20px;
    }







.popup{
    width: 400px;
    background: #fff;
    border-radius: 6px;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%,-50%)scale(0.1);
    text-align: center;
    padding: 0 30px 30px;
    color: #333;
    visibility: hidden;
    transition: transform 0.4s,top 0.4s;


}

.open-popup{
    visibility: visible;
    top: 50%;
    transform: translate(-50%,-50%)scale(1);

}
.popup img{
    width: 100px;
    margin-top: -50px;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgb(0, 0,0.2);

}
.popup h2{
    font-size: 38px;
    font-weight: 500;
    margin: 30px 0 10px;
}
.popup button{
    width: 100%;
    margin-top: 50px;
    padding: 10px 0;
    background: #6fd649;
    color: #fff;
    border: 0;
    outline: none;
    font-size:  18px;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 5px 5px rgb(0, 0,0.2);
}
    </style>

    
   
</head>

<body>


    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2  class="m-0 text-primary"><i class="fa  me-3"></i>Amar Ullapara</h2>
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
    <br>
    <!-- Navbar End -->

    <!-- card start -->

    <?php 
     
     $conn = mysqli_connect('localhost','root','','ullapara');
     $query = "SELECT * FROM  blood ORDER BY donor_id DESC ";

     $result = mysqli_query($conn,$query) or die("failed");
     $row = mysqli_fetch_assoc($result);

    
     
     ?>

<div class="container">
<div class="card mb-3">
  <img src="myblood.jpeg" height="400px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 style="text-align: center; color:red;" class="card-title">Donor Name: <?php echo $row['donor_name']; ?></h5>
  </div>
</div>
  <ul style="text-align: center;" class="list-group list-group-flush">
    <li class="list-group-item">Blood Group: <?php echo $row['blood_group']; ?></li>
    <li class="list-group-item">Address: <?php echo $row['address']; ?></li>
    <li class="list-group-item">Number: <?php echo $row['number']; ?></li>
    <li class="list-group-item">Date of birth: <?php echo $row['birth']; ?></li>
    
  </ul>
  <div class="container">
  <button type="submit" class="btn btn-success b1" onclick="openPopup()">SUBMIT</button>
  <a href="myblood_update.php?edit_id=<?php echo $row['donor_id']; ?>"> <button type="button" class="btn btn-danger b2">EDIT</button> </a>

      <div class="popup" id="popup">
            <img src="tick.png" alt="">
            <h2>Thank you</h2>
            <p>Your blood info has been successfully submitted.Thanks!</p>

           <a href="index.html"> <button type="button" onclick="closePopup()">OK</button> </a>
        </div>

  

   
  </div>
</div>
</div>
    
     <!-- card end -->

     <br>
     <br>

    

    
      <!-- footer start -->

      <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
       
           
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="index.html">Amar Ullapara</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://www.facebook.com/official.mehedih52">Mehedi Hassan</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <!-- <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <script>
    let popup = document.getElementById("popup");

    function openPopup(){
        popup.classList.add("open-popup");
    }
    function closePopup(){
        popup.classList.remove("open-popup");
    }

</script>
</body>

</html>