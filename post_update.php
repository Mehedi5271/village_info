<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post Update</title>
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
    
    .update{
        color: black;
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
    <br>


    <?php



$conn = mysqli_connect('localhost','root','','ullapara');

    if(isset($_GET['edit_id'])){
        $getid = $_GET['edit_id'];

        $sql = "SELECT * FROM post WHERE id = $getid";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $id = $row['id'];
        $name = $row['name'];
        $title = $row['title'];
        $catagory = $row['catagory'];
        $description = $row['description'];
        $image = $row['image'];
        $date = $row['date'];
        $email = $row['email'];
    }


        if(isset($_POST['update'])){
            $new_id = $row['id'];
            $new_name = $row['name'];
            $new_title = $row['title'];
            $new_catagory = $row['catagory'];
            $new_description = $row['description'];
            // $new_image = $row['image'];
            $new_date = $row['date'];
            $new_email = $row['email'];
    
            $sql1 = "UPDATE post SET name='$new_name',title='$new_title',catagory='$new_catagory',description='$new_description',date='$new_date',email='$new_email' WHERE id='$new_id' ";
    
            $update = mysqli_query($conn,$sql1);

            echo "<script> window.location.replace('post_show.php') </script>";
           
        }
        
    


?>

    
<div class="row">
        <h1 class="post_korun">পোস্ট আপডেট করুন</h1>
    <div class="col-md-12">
    <form action="post_update.php" method="POST" enctype="multipart/form-data">
     <input type="text" name="id" id="" value = "<?php echo $id ?>" hidden>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">নামঃ</label>
          <input class="mdl-textfield__input" type="text" name="name" value="<?php echo $name; ?>" id="sample3">
        </div>

        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">শিরোনামঃ</label>
          <input class="mdl-textfield__input" type="text" name="title" value="<?php echo $title; ?>" id="sample3">
        </div>
        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">ক্যাটাগরিঃ</label>
        
        <select name="catagory" id="">
        <option value="ক্যাটাগরি নির্বাচন করুন">ক্যাটাগরি নির্বাচন করুন </option>
        <option value="ঐতিহাসিক স্থান"
        <?php 
        if($catagory=='ঐতিহাসিক স্থান'){
            echo "selected";
        }
        ?>

        >ঐতিহাসিক স্থান </option>

            <option value="পর্যটন কেন্দ্র"
            <?php 
        if($catagory=='পর্যটন কেন্দ্র'){
            echo "selected";
        }
        ?>

        >পর্যটন কেন্দ্র</option>

            <option value="নদী"
            <?php 
        if($catagory=='নদী'){
            echo "selected";
        }
        ?>
            
            >নদী</option>

            <option value="খ্যাতিমান ব্যক্তি"
            <?php 
        if($catagory=='খ্যাতিমান ব্যক্তি'){
            echo "selected";
        }
        ?>
            
            >খ্যাতিমান ব্যক্তি</option>

            <option value="ভবন"
            <?php 
        if($catagory=='ভবন'){
            echo "selected";
        }
        ?>
            
            >ভবন</option>

            <option value="স্কুল"
            <?php 
        if($catagory=='স্কুল'){
            echo "selected";
        }
        ?>
            
            >স্কুল</option>

            <option value="কলেজ"
            <?php 
        if($catagory=='কলেজ'){
            echo "selected";
        }
        ?>
            
            >কলেজ</option>

        </select>
          
        </div>

        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">বিস্তারিত বর্ণনাঃ</label>
        <textarea class="mdl-textfield__input" id="sample3" name="description" id="" cols="30" rows="10"><?php echo $description; ?>" </textarea>
        </div>
        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">ছবিঃ</label>
          <input  class="mdl-textfield__input" type="file" name="image" value="<?php echo $image; ?>" id="sample3">
          <?php echo $image; ?>
        </div>
        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">তারিখঃ</label>
          <input  class="mdl-textfield__input" type="date" name="date" value="<?php echo $date; ?>" id="sample3">
        </div>
        <br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">ইমেইলঃ</label>
          <input class="mdl-textfield__input" type="email" name="email" value="<?php echo $email; ?>" id="sample3">
        </div>
        <br/>
        <input  name="update" class="button" type="submit" value="Update"> 
        
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






