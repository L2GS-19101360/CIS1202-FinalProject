<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/fav-icon" href="./Preview Page - Ochavo/img/logo.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,wght@0,300;0,500;1,200;1,400;1,600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- <link rel="stylesheet" href="styles/styles.css"> for debugging-->
        <title> Marjhun's Apartelle </title>

        <style>
            body {
            margin: 0;
            background: linear-gradient(-45deg, #ee7752, #ffde5e, #ffa220, #ff8502);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
            font-family: "Roboto Serif", serif;
            overflow: overlay;
            }

            body::-webkit-scrollbar {
            width: 0.5vw;
            transition-duration: 1000ms;
            border-radius: 10px;
            }

            body::-webkit-scrollbar-track {
            background-color: #5555;
            transition-duration: 500ms;
            }

            body::-webkit-scrollbar-track:hover {
            background-color: #555;
            }

            body::-webkit-scrollbar-thumb {
            background: #7775;
            border-radius: 10px;
            transition-duration: 500ms;
            }

            body::-webkit-scrollbar-thumb:hover {
            background: #777;
            }

            @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
            }

            .card-title {
            font-size: 5rem;
            }

            .card-text {
            padding: 3rem;
            }

            .btn-dark {
            padding: 15px 32px;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
            
            .container{
                margin-top: 250px;
            }

            .slide_container{
                margin-top: 185px;
            }

            .slide {
            padding-top: 100px;
            }

            .col-sm-4 {
            padding: 50px;
            }

            .col-sm-4 p {
            text-align: justify;
            }

            .col-sm-4 h3 {
            border-bottom: 1px solid #000;
            padding-bottom: 10px;
            margin-top: 30px;
            }

            .carousel-inner {
            background: white;
            }

            .carousel .carousel-control .glyphicon-chevron-left {
            left: 10px;
            }

            .carousel .carousel-control .glyphicon-chevron-right {
            right: 10px;
            }

            .footer {
            background: white;
            padding: 30px 0px;
            font-family: "Play", sans-serif;
            text-align: center;
            }

            .footer .row {
            width: 100%;
            margin: 1% 0%;
            padding: 0.6% 0%;
            color: black;
            font-size: 0.8em;
            }

            .footer .row a {
            text-decoration: none;
            color: black;
            transition: 0.5s;
            }

            .footer .row a:hover {
            color: gray;
            }

            .footer .row ul {
            width: 100%;
            }

            .footer .row ul li {
            display: inline-block;
            margin: 0px 30px;
            }

            .footer .row a i {
            font-size: 2em;
            margin: 0% 1%;
            }

            @media (max-width: 720px) {
            .footer {
                text-align: left;
                padding: 5%;
            }
            .footer .row ul li {
                display: block;
                margin: 10px 0px;
                text-align: left;
            }
            .footer .row a i {
                margin: 0% 3%;
            }
            }
                                    
        </style>

    </head>

    <body>

    <main>
        <center>
            <section class="main">
                <div class="container">
                <div class="d-flex flex-column justify-content-center w-100 h-100">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="btn-group my-5">
                        <div class="card-body">
                        <h1 class="card-title"> Marjhun's Apartelle </h1>
                        <p class="card-text"> The perfect retreat for those seeking a peaceful escape </br>from the hustle and bustle of daily life. Witness a charming </br> and intimate apartelle, where you'll experience the perfect </br> blend of luxury, natural beauty, and golden rays of sunsets </br> only at <b> Marjhun's Apartelle! </b>  </p>
                    </div>

                        </div>
                        <a href="./Login - Nacario/login.php"><button class="btn btn-dark" type="button"> Book Now! </button></a>
                    </div>
                </div>

                </div>
            </section>

            <section>
                <div class="slide_container">
                    <div id="slider" class="carousel slide" data-ride="carousel">
                        <!--INDICATORS-->
                        <ol class="carousel-indicators">
                            <li data-target="#slider" data-slide-to="0" class="active"></li>
                            <li data-target="#slider" data-slide-to="1"></li>
                            <li data-target="#slider" data-slide-to="2"></li>
                            <li data-target="#slider" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h3>Rooms</h3>
                                        <p>
                                            Stay in style at our Apartelle! Choose from our range of rooms - Standard, Luxurious, 1-Day Use, and Guest House - all designed to fit your needs and budget. Come and experience the perfect blend of comfort and affordability today!
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <img src="../CIS1202-FinalProject/Preview Page - Ochavo/img/for_slides/Luxury Room.jpg" alt="" />
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h3>Activities</h3>
                                        <p>
                                            Experience the ultimate staycation at our oceanfront apartelle! Sing your heart out at our KTV or host a party at our multi-purpose hall. With the beach just steps away, your adventure awaits!
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <img src="../CIS1202-FinalProject/Preview Page - Ochavo/img/for_slides/KTV.jpg" alt="" />
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h3>Ocean View</h3>
                                        <p>
                                            Set in the southeast coast of Bohol,  Marjhun's Apartelle is a welcoming, family-run with a charming sea front of marine sanctuary water of Camiguin sea and a fresh sea breeze in a headland. Marjhun's Apartelle offers you the opportunity to relax and enjoy in a beautiful town of Jagna.
                                        </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <img src="../CIS1202-FinalProject/Preview Page - Ochavo/img/for_slides/sea_view.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div> <!--CAROUSEL INNER ENDS HERE-->
                        
                        <!--LEFT AND RIGHT CONTROLS-->
                        <a class="left carousel-control" href="#slider" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#slider" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> <!--CAROUSEL ENDS HERE-->
                </div> <!--CONTAINER ENDS HERE-->
            </section>
        </center>
    </main>  
    
    <footer>
        <div class="footer">
            <div class="row">
                <p> Visit us in our Facebook Page!</p><a href="https://www.facebook.com/marjhunsapartelle"><i class="fa fa-facebook">Marjhun's Apartelle</i></a>
            </div>

            <div class="row">
                <ul>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Career</a></li>
                </ul>
            </div>
        </div>
    </footer>

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>

</html>