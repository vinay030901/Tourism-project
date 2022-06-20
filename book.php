<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple HTML Form</title>
    <script src="js/validator.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <script src="js/validator.js"></script>
    <style>
        video {
            object-fit: cover;
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
        }

        html,
        body {
            height: 100%;
        }

        html {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 150%;
            line-height: 1.4;
        }

        body {
            margin: 0;
        }

        .viewport-header {
            position: relative;
            height: 100%;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h1 {
            font-family: 'Syncopate', sans-serif;
            color: white;
            text-transform: uppercase;
            letter-spacing: 3vw;
            line-height: 1.2;
            font-size: 3vw;
            text-align: center;
        }

        h1 span {
            display: block;
            font-size: 10vw;
            letter-spacing: -1.3vw;
        }

        main {
            background: rgba(0, 0, 0, 0.66);
            color: white;
            position: relative;
            padding: 1rem;
        }

        main p {
            max-width: 600px;
            margin: 1rem auto;
        }
        /* .error{
            color: white;
            font-size: 90%;
        } */
    </style>
</head>

<body>
    <!-- <div class="container">
        <img src="images/header.jpg" alt="header" style="width: 100%; height: 400px;">
        <h1 class="centered">BOOK NOW</h1>
    </div> -->
    <video autoplay muted loop>
        <source src="images/background.mp4" type="video/mp4">
    </video>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-size: 30px;">TRAVEL</a>
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
                        <a class="nav-link" href="index.php#middle" style="font-size: 20px;">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="book.php" style="font-size: 20px;">Book</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <header class="viewport-header">
        <h1>
            Explore
            <span>THE EARTH</span>
        </h1>
    </header>
    <main>
        <form name="contactForm" onsubmit="return validateForm()" action="userinfo.php" method="post" class="content">
            <h2>BOOK YOURSELF A RIDE</h2>
            <div class="row">
                <label>Full Name</label>
                <input type="text" name="name">
                <div class="error" id="nameErr"></div>
            </div>
            <div class="row">
                <label>Email Address</label>
                <input type="text" name="email">
                <div class="error" id="emailErr"></div>
            </div>
            <div class="row">
                <label>Mobile Number</label>
                <input type="text" name="mobile" maxlength="10">
                <div class="error" id="mobileErr"></div>
            </div>
            <div class="row">
                <label>Destination</label>
                <select name="destination">
                    <option>Select</option>
                    <option>Los Angeles</option>
                    <option>London</option>
                    <option>New Delhi</option>
                    <option>Paris</option>
                    <option>Sydney</option>
                    <option>Bern</option>
                    <option>Rio</option>
                </select>
                <div class="error" id="destinationErr"></div>
            </div>
            <div class="row">
                <label>Gender</label>
                <div class="form-inline">
                    <label><input type="radio" name="gender" value="male"> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                </div>
                <div class="error" id="genderErr"></div>
            </div>
            <div class="row">
                <label>Date to Travel</label>
                <input type="date" name="date">
                <div class="error" id="dateErr"></div>
            </div>
            <div class="row">
                <label>Choose Services <i>(Optional)</i></label>
                <div class="form-inline">
                    <label><input type="checkbox" name="services[]" value="sports">Flights</label>
                    <label><input type="checkbox" name="services[]" value="movies">Hotels</label>
                    <label><input type="checkbox" name="services[]" value="music"> Tourguide</label>
                    <label><input type="checkbox" name="services[]" value="music"> Trekking</label>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="PROCEED">
            </div>
        </form>
        
    </main>
</body>

</html>