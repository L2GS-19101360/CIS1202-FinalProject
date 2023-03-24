<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title> Marjhun's Apartelle </title>

        <style>
            .container {
                margin-top: 250px;
                width: 50%;
            }
            .card-title{
                font-size: 5rem;
            }
            .card-text{
                padding: 3rem;
            }
            .btn-dark{
                padding: 15px 32px;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
            .slide{
                padding-top: 100px;
            }

            .footer{
            background:#000;
            padding:30px 0px;
            font-family: 'Play', sans-serif;
            text-align:center;
            }

            .footer .row{
            width:100%;
            margin:1% 0%;
            padding:0.6% 0%;
            color:gray;
            font-size:0.8em;
            }

            .footer .row a{
            text-decoration:none;
            color:gray;
            transition:0.5s;
            }

            .footer .row a:hover{
            color:#fff;
            }

            .footer .row ul{
            width:100%;
            }

            .footer .row ul li{
            display:inline-block;
            margin:0px 30px;
            }

            .footer .row a i{
            font-size:2em;
            margin:0% 1%;
            }

            @media (max-width:720px){
                .footer{
                text-align:left;
                padding:5%;
                }
                .footer .row ul li{
                display:block;
                margin:10px 0px;
                text-align:left;
                }
                .footer .row a i{
                margin:0% 3%;
                }
            }
        </style>

    </head>

    <body>

    <main>
        <center>
            <section>
                <div class="container">
                    <div class="card-body">
                        <h1 class="card-title"> Marjhun's Apartelle </h1>
                        <p class="card-text"> The perfect retreat for those seeking a peaceful escape </br>from the hustle and bustle of daily life. Witness a charming </br> and intimate apartelle, where you'll experience the perfect </br> blend of luxury, natural beauty, and golden rays of sunsets </br> only at <b> Marjhun's Apartelle! </b>  </p>
                    </div>
                    <button class="btn btn-dark" type="button"> Book Now! </button>
                </div>
            </section>

            <section class="slide">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
                        </div>
                        <div class="carousel-item active">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
                        </div>
                        <div class="carousel-item">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
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
            </section>
        </center>
    </main>  
    
    <footer>
        <div class="footer">
            <div class="row">
                <a href="#"><i class="fa fa-facebook">Facebook</i></a>
                <a href="#"><i class="fa fa-instagram">Instagram</i></a>
                <a href="#"><i class="fa fa-youtube">Youtube</i></a>
                <a href="#"><i class="fa fa-twitter">Twitter</i></a>
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

            <div class="row">
                Copyright 
            </div>
        </div>
    </footer>

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>

</html>