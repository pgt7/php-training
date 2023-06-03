<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Product App - Web Programming Class</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href={{ asset("bootstrap/css/style.css") }} rel="stylesheet" />
    <!-- responsive style -->
    <link href={{ asset("bootstrap/css/responsive.css") }} rel="stylesheet" />
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('/') }}">Product App</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('products') }}">View All Products</a></li>
                <li><a href="{{ URL::to('products/create') }}">Create a Product</a>
            </ul>
        </nav>
    </div>

    <section class=" slider_section position-relative">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Welcome To <br>
                          <span>
                            Product Application
                          </span>
                        </h1>
                        <p>
                          It is a project for web programming class. My name is Pouria Ghafarbeigi.
                          I was trying to use bootstrap in this project, but I couldn't use npm.
                          If you have enough time, solve this issue, please.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</body>
</html>