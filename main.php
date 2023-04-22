<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puppyhut </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/mystyle.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-dog"></i> puppyhut. </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="#book">book</a>
        <a href="#blogs">blogs</a>
        
    </nav>

    <!-- <div id="menu-btn" class="fas fa-bars"></div> -->

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <!-- <img src="image/walkingdog1.gif" alt=""> -->
        <img src="image/girl-hugs-dog-cartoon.avif" alt="">
        
    </div>

    <div class="content">
        
        <h3>Welcome to Puppyhut!</h3>
        <p>Puppyhut is a Dog Adoption business located in Pune, MH that provides loving homes to abandoned and rescued pups. All puppies are vaccinated. spayed/neutered, and come with a complete health check. Visit us today and find your new best friend!</p>
        <a href="#" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-paw"></i>
        <h3>240+</h3>
        <p>dogs rescued</p>
    </div>

    <div class="icons">
        <i class="fas fa-notes-medical"></i>
        <h3>18+</h3>
        <p>health checkups</p>
    </div>

    <div class="icons">
        <i class="fas fa-grin-beam"></i>
        <h3>500+</h3>
        <p>happy rescuers</p>
    </div>

    <!-- <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>80+</h3>
        <p>available hospitals</p>
    </div> -->

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">



        <div class="box">
            <i class="fas fa-bone"></i>
            <h3>dog training</h3>
            <p>expert dog trainers</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

        <div class="box">
            <i class="fas fa-hands"></i>
            <h3>dog grooming</h3>
            <p>groom your dogs for a fresh look</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

        <div class="box">
            <i class="fas fa-walking"></i>
            <h3>dog walking</h3>
            <p>dog walking services</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>free monthly checkups</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

        <div class="box">
            <i class="fas fa-stethoscope"></i>
            <h3>consult a vet</h3>
            <p>best veternary doctors</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

        <div class="box">
            <i class="fas fa-file-medical"></i>
            <h3>dog insurance</h3>
            <p>best insurance plans for your dog</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> adopt <span>me!</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/puppy1.jpg" alt="">
            <h3>luffy</h3>
            <span>mixed breed</span>
            <!-- <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div> -->
        </div>

        <div class="box">
            <img src="image/puppy5.jpg" alt="">
            <h3>cooper</h3>
            <span>labrador</span>
            <!-- <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div> -->
        </div>

        <div class="box">
            <img src="image/puppy4.jpg" alt="">
            <h3>daisy</h3>
            <span>Australian cattle dog</span>
            <!-- <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div> -->
        </div>

    

    </div>

</section>

<!-- doctors section ends -->

<!-- booking section starts   -->



<section class="book" id="book">

    <h1 class="heading"> <span>give your pet a</span> new shelter </h1>    

    <div class="row">

        <div class="image">
            <img src="image/puppyadopt-transformed2.jpg" alt="">
        </div>
        <form action="/Mini_project/main.php" method="post">

        
            <h3>personal details</h3>
            <input type="text" name="name" placeholder="your name" class="box">
            <input type="contact" name="no"  placeholder="your number" class="box">
            <input type="email" name="email" placeholder="your email" class="box">
            <input type="breed" name="breed" placeholder="dog breed" class="box">
            <input type="city" name="city" placeholder="your city" class="box">
            <input type="submit" name="Confirm" class="btn">

                        <?php
            if(isset($_POST['Confirm'])){
                $name=$_POST['name'];
                $contact=$_POST['no'];
                $email=$_POST['email'];
                $breed=$_POST['breed'];
                $city=$_POST['city'];

            $servername = "localhost" ;
            $username = "root" ;
            $password = "" ;
            $database = "mini_project";

            $conn = mysqli_connect($servername, $username, $password, $database);
            echo "Connection successfull <br>" ;

            $sql = "INSERT INTO `donator` (`Name`, `Contact_no`, `Email`, `Breed`, `City`) VALUES ('$name','$contact', '$email','$breed','$city');" ;
            $result = mysqli_query($conn,$sql);


            if($result){
                echo "Record entered successfully ";
            }
            else{
                // echo "Record failed to entered";
                mysqli_error($conn);
            }

            }
?>
        </form>

        
      
        

    </div>
   

</section>


<!-- booking section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <!-- <img src="image/girl-hugs-dog-cartoon.avif" alt=""> -->
            <img src="image/walkingdog1.gif" alt="">
        </div>

        <div class="content">
            <h3>Adopt a Dog in Pune!</h3>
            <p>We're so excited to introduce you to Puppyhut, the premier dog adoption business in Pune, Maharashtra! We provide happy and healthy puppies for adoption, and the best part is that we deliver the puppies directly to your doorstep. Our puppies are from local breeders and shelters, and we make sure to provide them with all the necessary vaccinations and medical care before they come to you.</p>
            <p>We provide an adoption process that is both straightforward and stress-free. We understand that adopting a pet is not just a financial decision but an emotional one as well, so we make sure to provide a calm and caring atmosphere for our customers. We also offer a wide range of puppy-specific accessories and supplies, so you can be sure that your pup will have the best of everything. We look forward to helping you find your perfect pup!</p>
            
        </div>

    </div>

</section>


<!-- about section ends -->


<!-- footer section starts  -->
<section class="book" id="book">

    <h1 class="heading"> <span>register</span> now</h1>

    <div class="row">

        <form action="" method="post">
            <h3>Join our community</h3>
            <input type="text" name="name2" placeholder="your name" class="box">
            <input type="contact" name="no2" placeholder="your number" class="box">
            <input type="email" name="email2" placeholder="your email" class="box">
            <input type="submit" name="Confirm2" class="btn">

            <?php
            if(isset($_POST['Confirm2'])){
                $name=$_POST['name2'];
                $contact=$_POST['no2'];
                $email=$_POST['email2'];
                

            $servername = "localhost" ;
            $username = "root" ;
            $password = "" ;
            $database = "mini_project";

            $conn = mysqli_connect($servername, $username, $password, $database);
            echo "Connection successfull <br>" ;

            $sql = "INSERT INTO `member` (`Name`, `Contact_no`, `Email`) VALUES ('$name', '$contact', '$email');" ;
            $result = mysqli_query($conn,$sql);


            if($result){
                echo "Record entered successfully ";
            }
            else{
                // echo "Record failed to entered";
                mysqli_error($conn);
            }

            }

            ?>



        </form>

    </div>

</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Dog Training </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Dog Gromming </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Dog Insurance </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Free checkup </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Consult a vet </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 xxxxxxx409 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91 xxxxxxx093 </a>
            <a href="#"> <i class="fas fa-envelope"></i> puppyhut@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Pune india -</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            
        </div>

    </div>

    

</section>

<!-- footer section ends -->
<!-- ending -->
<!-- <section class="doctor" id="doctor">

    <h1 class="heading"> <span>THANK YOU FOR VISTING OUR VIRTUAL HOSPITAL :))</span> </h1>    

</section> -->
<!-- ending -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>