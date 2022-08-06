<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.bundle.js" async></script>
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
       
         </style>
</head>

<body>
    <?php
    ?>
    <!--Navbar-->
    <nav class="navbar navbar-dark bg-dark navbar-expand-sm sticky-top">
        <img src="sk3.jpg" alt="" class="logo m-2">
        <a href="#" class="navbar-brand "> S Kamala <span>Garments</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#skamala-navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="skamala-navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item px-3">
                    <a href="#" class="nav-link"> Home</a>
                </li> 
                
                <li class="nav-item px-3">
                    <a href="#menus" class="nav-link"> About Us</a>
                </li>

                <li class="nav-item px-3">
                    <a href="#services" class="nav-link"> Services</a>
                </li>
                <li class="nav-item px-3">
                    <a href="#gallery" class="nav-link"> Collections</a>
                </li>
                <li class="nav-item px-3">
                    <a href="#contact" class="nav-link"> Contact Us </a>
                </li>
            </ul>
          </div>
        <!-- Navbar content -->
      </nav>
      <!--slider-->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="sk3.jpg" class="fix-img" class="d-block w-100" alt="..."  class="img-fluid">
          </div>
          <div class="carousel-item">
            <img src="sk8.jpg"  class="fix-img" class="d-block w-100" alt="..." class="img-fluid">
          </div>
          <div class="carousel-item">
            <img src="sk9.jpg"  class="fix-img"  class="d-block w-100" alt="..." class="img-fluid">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      
      <hr>
<!--About-->
<section class="menus">
    <div class="menu-1 bg-dark p-5" id="menus">
        <div class="container">
            <p class="h1 text-center fw-bold text-white m-2"> About Us</p> <br>

            <div class="grid">
                <div class="row text-white  fw-bold align-items-center"  >
                    <div class="col-md-6">
                        <img src="sk3.jpg" alt="" class="img-fluid">
                        
                    </div>
                    <div class="col-md-6">
                        <p class="h4 fw-bold">  <br>
                            <br>   Specialist in Kid'S  &  Girl's Western Dresses.</p> <br>
                        <p class="lead text-align-jusitify " >Hello, We are speciaist in kid's and girl's western dresses making and manufacturing. Our range is widely acclaimed first-class features like quality, durable, efficient perfectness and so on. All the products we offer conformto best quality standards and accomplish the complete demand of customers. Our products are using in various places. The team we have has more than 4 years of working experiance in this industry and stay in close coordination with customers to understand their requirements and offer the line accordingly. We have different categorized dresses for kids. S kamala Garments is offering children readymade retailers. </p>
                    </div>                  
                     
                </div>
            </div>
        </div>

    </div>

</section>
<!--Services-->
<hr> 
<div class="services p-5 bg-dark"  id="services">
    <div class="container">
        <div class="grid">
            <div class="row m-5">
                <p class="h1 text-center fw-bold text-white m-2">Our Services</p> <br>
                <br>

                <div class="col-md-4 text-center">
                    <br>
                    <i class="fa-solid fa-child-dress fa-4x text-success"></i>  
                    <p class="h2 fw-bold text-white"> Kids Dresses</p> 
                    <p class="lead text-white">We offer our clients excellent quality services for many years, with best Dreeses for the Kid's</p>
                </div>

                <div class="col-md-4 text-center">
                    <br>

                    <i class="fa-solid fa-child-dress fa-4x text-success"></i>  
                    <p class="h2 fw-bold text-white"> Uniforms</p> 
                    <p class="lead  text-white"> We offer our clients excellent quality services for many years, with best School Uniforms</p>
               

                    </div>

                <div class="col-md-4 text-center">
                    <br>

                    <i class="fa-solid fa-child-dress fa-4x text-success"></i>  
                    <p class="h2 fw-bold text-white"> Western Dresses</p> 
                    <p class="lead  text-white">We offer our clients excellent quality services for many years, with best Western Dreeses</p>
               
                    </div>
            </div>
        </div>
    </div>
</div>
<hr>
<!--Gallery-->

<section class="gallery p-5 bg-dark" id="gallery">
    <div class="container">
        <div class="grid">

            <div class="row">
                <p class="h1 text-center fw-bold  text-white"> Our Collections</p>
                <div class="col-md-4" class="img-card">
                    <br>
                    <a href="gallery.php" target="_blank">
                    <img src="d4.jpg" alt="" class="img-fluid img-thumbnail" > 
                </a>
                </div>

                <div class="col-md-4">
                    <br>

                    <a href="gallery.php" target="_blank">
                        <img src="d2.jpg" alt="" class="img-fluid img-thumbnail" > 
                    </a>

                </div>

                <div class="col-md-4">
                    <br>
                    <a href="gallery.php" target="_blank">
                    <img src="d18.jpg" alt="" class="img-fluid img-thumbnail"> 
                </a>

                </div>
            </div>
        </div>

    </div>
</section>

    <hr> 
    <!--contact -section-->
    <section class="bg-dark text-white p-4" id="contact">
        <div class="container">
            <p class="h1 text-white text-center fw-bold"> <br> Contact Us <br> </p>
            <div class="row">
                <div class="col-md-6">
                    <br><br>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.857608697068!2d75.92652851558474!3d17.656901787917686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5db32a4efe561%3A0x1bf7a831b3823be0!2sS%20Kamala%20Garments!5e0!3m2!1sen!2sin!4v1659029605842!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
                </div>

                <div class="col-md-6">
                    <br><br>
                    <p class="h6 text-center"> 
                        <img src="bhanudada.jpg" alt="" class="logo1 m-2">  <br>
                        <a href="https://m.facebook.com/bhanu6267?_rdr" target="_blank" class="text-warning " class="h6 text-center" > Mr. Bhanudas C Achugatla</a> 
                    </p>
                    

                    <p class="h4 text-center"> 
                        <br> <br>

                        <i class="fa-solid fa-envelope"></i> Mail Us </p>
                    <p class="text-center"> 
                              bhanuachugatla@gmail.com
                    </p>
                    <br>
                

                    <p class="h4    text-center"> 
                        <i class=" fa fa-phone"></i>
                        Call Us</p>
                    <p class="text-center">8149418132  &nbsp; &nbsp; 9272037777</p>

                    <br> 
                

                    <p class="h4 text-center"> 
                        <i class="fa-solid fa-clock"></i>                       
                         Working Hr's</p>
                    <p class="text-center">Mon-Sun->10:00Am To 8:00 PM<br> Closed->Wed</p>
                    <br> 


                    <p class="h4 text-center"> 
                        Follow  Us
                                <a href="https://m.facebook.com/skamlagarments/" target="_blank"> <br> <i class="fa-brands fa-facebook"></i> </a>&nbsp;
                                 <a href="https://www.instagram.com/s_kamala_garments/?igshid=YmMyMTA2M2Y%3D" target="_blank"> <i class="fa-brands fa-square-instagram"></i></i> </a>
                                </p>

                    <br> 
                
                
                </div>
                
            </div>
            <hr>
            <div class="row text-center">
                <div class="col">
                    <h3>Copyright &copy;2022, S Kamala Garments</h3>
                    <h6>All Rights Reserved</h6>
                    <h6>Developed and Maintained By
                        <a href="https://github.com/nandiniachugatala?tab=repositories"  target="_blank" class="text-warning"> <br>
                            Nandini Achugatla </a>
                            <a href="#" class="text-warning"> And Aishwarya Annam</a>
                    </h6>
                </div>
            </div>
        </div>
    </section>



<hr>
</body>
</html>