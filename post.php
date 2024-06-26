<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post Form</title>
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
  .post_korun{
    margin-top: 15px;
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
        <h1 class="post_korun">পোস্ট করুন</h1>
    <div class="col-md-12">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">নামঃ</label>
          <input class="mdl-textfield__input" type="text" name="name" id="sample3">
        </div>

        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">শিরোনামঃ</label>
          <input class="mdl-textfield__input" type="text" name="title" id="sample3">
        </div>
        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">ক্যাটাগরিঃ</label>
        <select name="catagory" id="">
        <option value="ক্যাটাগরি নির্বাচন করুন">ক্যাটাগরি নির্বাচন করুন </option>
        <option value="ঐতিহাসিক স্থান">ঐতিহাসিক স্থান </option>
            <option value="পর্যটন কেন্দ্র">পর্যটন কেন্দ্র</option>
            <option value="নদী">নদী</option>
            <option value="খ্যাতিমান ব্যক্তি">পরিচিত ব্যক্তিবর্গ</option>
            <option value="ভবন">ভবন</option>
            <option value="স্কুল">স্কুল</option>
            <option value="কলেজ">কলেজ</option>
        </select>
          
        </div>

        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">বিস্তারিত বর্ণনাঃ</label>
        <textarea class="mdl-textfield__input" id="sample3" name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">ছবিঃ</label>
          <input  class="mdl-textfield__input" type="file" name="image" id="sample3">
        </div>
        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">তারিখঃ</label>
          <input  class="mdl-textfield__input" type="date" name="date" id="sample3">
        </div>
        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">ইমেইলঃ</label>
          <input class="mdl-textfield__input" type="email" name="email" id="sample3">
        </div>
        <br/>
         <input  name="submit" class="button" type="submit" value="Done"> 
        
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


<!-- php -->

<?php

$conn = mysqli_connect('localhost','root','','ullapara');

if(isset($_POST['submit'])){

$id = $_POST['id'];

$name = $_POST['name'];
$title = $_POST['title'];
$catagory = $_POST['catagory'];
$description = $_POST['description'];
$date = $_POST['date'];
$email = $_POST['email'];

// $imagename = $_FILES['image']['name'];
// $tmp_name = $_FILES['image']['tmp_name'];


$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];

  if ($error === 0) {
    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpeg", "jpg", "avif","png","mkv","webm"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("Img-", true).'.'.$img_ex_lc;
				$img_upload_path = 'images/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				
				
				
				
				
				$sql = "INSERT INTO post(name,title,catagory,description,image,date,email) VALUES ('$name', '$title', '$catagory','$description','$new_img_name','$date','$email')";

   $result = mysqli_query($conn,$sql);

  
   echo "Nothing";
   
echo "<script> window.location.replace('mypost.php') </script>";
			}
  }



}

?>


