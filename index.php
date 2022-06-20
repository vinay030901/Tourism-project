<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style3.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-size: 40px;">TRAVEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" style="font-size: 20px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php" style="font-size: 20px;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#middle" style="font-size: 20px;">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="book.php" style="font-size: 20px;">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php" style="font-size: 20px;">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/LA.jpg" alt="Los Angeles" width="1100" height="500">
                    <div class="carousel-caption">
                        <h2>Los Angeles</h2>
                        <p>We had such a great time in LA!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/london.jpg" alt="Chicago" width="1100" height="500">
                    <div class="carousel-caption">
                        <h2>London</h2>
                        <p>All hail the queen!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/paris.jpg" alt="Paris" width="1100" height="500">
                    <div class="carousel-caption">
                        <h2>Paris</h2>
                        <p>Let's climb this big tower!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <section class="my-5">
            <div>
                <h3 class="text-center" style="font-size: 40px;">About Us</h3>
            </div>
            <div class="row">
                <div class="col--lg-6 col-md-6 com-12">
                    <img src="images/aboutUss1.jpg" alt="About Us" class="img-fluid aboutImg">
                </div>
                <div class="col--lg-6 col-md-6 com-12">
                    <h2 class="display-4">Travel and Tourism</h2>
                    <p class="py-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatum similique ipsa recusandae fugit, quae illum delectus cum quaerat? Possimus fugiat ullam debitis maxime. Tempore, totam blanditiis. Vitae, rerum ea?
                        Cumque voluptates minus maxime sint magni qui, velit similique. Corrupti debitis in ipsam vel totam? At sunt facere voluptates officiis consequatur dolorum aliquid, ea deleniti! Dolorem quod possimus eum nam.
                        Nisi quasi in magnam repudiandae quas ex repellendus assumenda adipisci. Dolor, deleniti dolorem dignissimos nemo perspiciatis quae in quam ipsum. Iusto libero beatae explicabo facilis veritatis quod expedita id eos?
                    </p>
                    <a href="about.php" class="btn btn-success">Read More</a>
                </div>
            </div>
        </section>
        <h2 style="text-align: center;font-size: 40px;" id="middle">Our Services</h2>
        <div class="row">
            <div class="column">
                <img src="images/icon1.jpg" alt="Adventure" style="width:100%">
                <p style="text-align: center;">Adventure</p>
            </div>
            <div class="column">
                <img src="images/icon2.jpg" alt="Tourguide" style="width:100%;">
                <p style="text-align: center;">Tourguide</p>
            </div>
            <div class="column">
                <img src="images/icon3.jpg" alt="Trekking" style="width:100%">
                <p style="text-align: center;">Trekking</p>
            </div>
            <div class="column">
                <img src="images/icon4.jpg" alt="Hotels" style="width:100%">
                <p style="text-align: center;">Hotels</p>
            </div>
            <div class="column">
                <img src="images/icon5.jpg" alt="Campfire" style="width:100%">
                <p style="text-align: center;">Campfire</p>
            </div>
        </div>
        <center>
            <section>
                <div class="txtcenter">
                    <h1>Upto 50% off</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
                    <a href="book.php" class="btn1">Book now</a>
                </div>
            </section>
        </center>
        <br><br>
        <section style="background-image: url('images/footer1.jpg');background-repeat: no-repeat;" class="img-fluid aboutImg">

            <div class="container">

                <div class="box" id="item1">
                    <h3 style="color: white;">QUICK LINKS</h3>
                    <div><a href="index.php">home</a></div>
                    <div><a href="about.php">about us</a></div>
                    <div><a href="index.php#middle">services</a></div>
                    <div><a href="book.php">book</a></div>
                </div>

                <div class="box" id="item2">
                    <h3 style="color: white;">CONTACT INFO</h3>
                    <a href="#">+91-8088-6077-32</a>
                    <a href="#">+91-8088-6077-33</a>
                    <a href="#">abc@gmail.com </a>
                    <a href="#">dehradun, india -248001 </a>
                </div>

                <div class="box" id="item3">
                    <h3 style="color: white;">FOLLOW US</h3>
                    <div><a href="#">facebook </a></div>
                    <div><a href="#"> twitter </a></div>
                    <div><a href="#">instagram </a></div>
                    <div> <a href="#">linkedin </a></div>
                </div>

            </div>

            <center>
                <div class="credit" style="color:white;"> created by <span>ABC</span> | all rights reserved! </div>
            </center>

        </section>

</body>

</html>