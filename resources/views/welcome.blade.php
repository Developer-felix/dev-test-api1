<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DEV-TEST-API1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="{{ secure_asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ secure_asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ secure_asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ secure_asset('assets/css/variables.css') }}" rel="stylesheet">
  <!-- <link href="{{ secure_asset('assets/css/variables-blue.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ secure_asset('assets/css/variables-green.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ secure_asset('assets/css/variables-orange.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ secure_asset('assets/css/variables-purple.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ secure_asset('assets/css/variables-red.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ secure_asset('assets/css/variables-pink.css') }}" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{ secure_asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DEV-TEST-API1 - v2.1.0
  * Template URL: https://bootstrapmade.com/DEV-TEST-API1-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ secure_asset('assets/img/logo.png') }}" alt=""> -->
        <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
        <span><h1>DEV-TEST-API1<span>.</span></h1></span>

      </a>

      <nav id="navbar" class="navbar">
        <ul>

         <li><a class="nav-link scrollto" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">Docs</a></li>
          <li><a class="nav-link scrollto" href="index.html#team">Team</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a>

    </div>
  </header><!-- End Header -->

  <section id="hero-static" class="hero-static d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <h2>Welcome to <span>DEV-TEST-API1</span></h2>
      <p>As a frontend developer you need API to learn with. We have provide a REST FULL API for you to test and Learn with. Providing you with the best experience working with the fast api and proffecianal responses.</p>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link text-green">Create</a></h4>
              <p>Submiting data into the database, (Insert Into Table ...)</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Read</a></h4>
              <p>Retreaving the data from the database.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Update</a></h4>
              <p>Editing the existing data  in the database.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Delete</a></h4>
              <p>Deleting the data from the database permanently.</p>
            </div>
          </div><!-- End Service Item -->



        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Documentation</h2>
          <p>As a frontend developer you need to have some skills in interacting with the restfull API. DEV-TEST-API1 has provided you with the endpoints to
             learn with. We have focussed on profesional responses and also securing of the endpoints. Basically we have a simple project the has two tables Products and Users. One has to be authenticated in order to perform some operation like POST, DELETE and CREATE products in the system.
             The Other route are not secure like GET all products from database, Get individual products or even searching from the database.
          </p>
        </div>

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-5">
            <div class="about-img">
              <img src="{{ secure_asset('assets/img/about.jpg') }}') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5">Here are the list of the endpoints and the datapoints we are going to focus on in these API</h3>
            <p>The URL to be used is : <code>{{env('APP_URL')}}</code> </p>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Authentication</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Public Endpoints</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Secure Endpoint</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">


                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Register User</h4><br>
                </div>
                  <h5> <br>Send a POST request to these endpoint </h5><br>
                  <p><code> /api/v1/users/register </code></p>

                <h5>These are the datapoints</h5>
                <p>
                    <code>
                        {<br>
                             "name": "", <br>
                              "email": "",<br>
                              "password": "",<br>
                              "password_confirmation": "",<br>
                        }
                    </code>
                </p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Login User</h4>
                </div>
                <h5>Send a Post Request to these endpoint</h5>
                <p><code> /api/v1/users/login </code></p>
                <h5>These are the datapoints</h5>
                <code>
                    {<br>
                          "email": "",<br>
                          "password": "",<br>
                    }
                </code>
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Logout User</h4>
                </div>
                <p>Send A post request to these endpoint.</p>
                <p><code> /api/v1/users/logout </code></p>

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">

                <p class="fst-italic">You do not need to have access token in order to consume these endpoints.</p>

                <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Get All Products</h4>
                  </div>
                  <p>Send a get request to these endpoint.</p>
                  <p><code> /api/v1/products </code></p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Get indiviadual product or product detail</h4>
                </div>
                <p>Send a get request to these endpoint.</p>
                <p><code> /api/v1/products/{id} </code></p>

                <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Searching a product by name</h4>
                  </div>
                  <p>Send a get request to these endpoint.</p>
                  <p><code> /api/v1/products/search/{name} </code></p>
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">

                <p class="fst-italic">These are secure endpoints remember to pust the access token first in the authorization before consuming these API.</p>

                <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Create Product</h4><br>
                  </div>
                    <h5> <br>Send a POST request to these endpoint </h5><br>
                    <p><code> /api/v1/products </code></p>

                  <h5>These are the datapoints</h5>
                  <p>
                      <code>
                          {<br>
                               "name": "", <br>
                                "slug": "",<br>
                                "price": "",<br>
                                "description": "",<br>
                          }
                      </code>
                  </p>

                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Update Product</h4><br>
                  </div>
                    <h5> <br>Send a PUT request to these endpoint </h5><br>
                    <p><code> /api/v1/products </code></p>

                  <h5>These are the datapoints</h5>
                  <p>
                    <code>
                        {<br>
                             "name": "", <br>
                              "slug": "",<br>
                              "price": "",<br>
                              "description": "",<br>
                        }
                    </code>
                  </p>
                  <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Delete Product</h4><br>
                  </div>
                    <h5> <br>Send a DELETE request to these endpoint </h5><br>
                    <p><code> /api/v1/products/{id} </code></p>
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Call To Action Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Let us enjoy coding, <em>Be proud of your work and</em> Suport Developers community</h3>
            <p> We are proud to code with you keep going, lets sharpen our skills together.</p>
            <a class="cta-btn align-self-start" href="#about">Call To Action</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="{{ secure_asset('assets/img/cta.jpg') }}')}}" alt="" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= On Focus Section ======= -->
    <section id="onfocus" class="onfocus">
      <div class="container-fluid p-0" data-aos="fade-up">

        <div class="row g-0">
          <div class="col-lg-6 video-play position-relative">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100">
              <h3>Lets focus on impoving our tecnical skills</h3>
              <p class="fst-italic">
                Coding like a ninja @your own pase is important in your career development.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Are you and android developer.</li>
                <li><i class="bi bi-check-circle"></i> Are you a web frondend developer.</li>
                <li><i class="bi bi-check-circle"></i> Are you a backend developer.</li>
              </ul>
              <a href="#" class="read-more align-self-start"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End On Focus Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="bi bi-binoculars color-cyan"></i>
              <h4>Stability</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="bi bi-box-seam color-indigo"></i>
              <h4>Quality</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="bi bi-brightness-high color-teal"></i>
              <h4>Fast</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="bi bi-command color-red"></i>
              <h4>Easy To Use</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
              <i class="bi bi-easel color-blue"></i>
              <h4>Nice Responses</h4>
            </a>
          </li><!-- End Tab 5 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
              <i class="bi bi-map color-orange"></i>
              <h4>Profesionalism</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>REST API Design Best Practices</h3>
                <p class="fst-italic">
                    Any API (Application Programming Interface) that follows the REST design principle is said to be RESTful.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Use JSON as the Format for Sending and Receiving Data.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Use Nouns Instead of Verbs in Endpoints.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Name Collections with Plural Nouns.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Use Status Codes in Error Handling.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Use Nesting on Endpoints to Show Relationships.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Use Filtering, Sorting, and Pagination to Retrieve the Data Requested.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Use SSL for Security.</li>
                </ul>

              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ secure_asset('assets/img/features-1.svg')}}') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 1 -->

          <div class="tab-pane" id="tab-2">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Undaesenti</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ secure_asset('assets/img/features-2.svg')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 2 -->

          <div class="tab-pane" id="tab-3">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Pariatur</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ secure_asset('assets/img/features-3.svg')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 3 -->

          <div class="tab-pane" id="tab-4">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Nostrum</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ secure_asset('assets/img/features-4.svg')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 4 -->

          <div class="tab-pane" id="tab-5">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Adipiscing</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ secure_asset('assets/img/features-5.svg')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 5 -->

          <div class="tab-pane" id="tab-6">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Reprehit</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ secure_asset('assets/img/features-6.svg')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 6 -->

        </div>

      </div>
    </section><!-- End Features Section -->




    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>Developing our community in tech is one of the things that makes us happy.</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              {{-- <div class="member-img">
                <img src="{{ secure_asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
              </div> --}}
              <div class="member-info">
                <div class="social">
                    <a href="https://twitter.com/fonjomba" ><i class="bi bi-twitter"></i></a>
                    <a href="https://m.facebook.com/public/Felix-Onjomba"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/felix-onjomba-85229a182/" ><i class="bi bi-linkedin"></i></a>
                    <a href="https://github.com/Developer-Felix" ><i class="bi bi-github"></i></a>
                    <a href="https://stackoverflow.com/users/15081184/developer-felix"><i class="bi bi-stack-overflow"></i></a>
                </div>
                <h4>Onjomba Felix</h4>
                <span>Developer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-member">
              {{-- <div class="member-img">
                <img src="{{ secure_asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
              </div> --}}
              <div class="member-info">
                <div class="social">
                    <a href="https://twitter.com/fonjomba" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://m.facebook.com/public/Felix-Onjomba" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/felix-onjomba-85229a182/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    <a href="https://github.com/Developer-Felix" class="github"><i class="bi bi-github"></i></a>
                    <a href="https://stackoverflow.com/users/15081184/developer-felix" class="stack-overflow"><i class="bi bi-stack-overflow"></i></a>
                </div>
                <h4>Onjomba Felix</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              {{-- <div class="member-img">
                <img src="{{ secure_asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
              </div> --}}
              <div class="member-info">
                <div class="social">
                    <a href="https://twitter.com/fonjomba" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://m.facebook.com/public/Felix-Onjomba" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/felix-onjomba-85229a182/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    <a href="https://github.com/Developer-Felix" class="github"><i class="bi bi-github"></i></a>
                    <a href="https://stackoverflow.com/users/15081184/developer-felix" class="stack-overflow"><i class="bi bi-stack-overflow"></i></a>
                </div>
                <h4>Onjomba Felix</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Team Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>DEV-TEST-API1</h3>
              <p>
                Karatina University <br>
                Karatina, Kenya<br><br>
                <strong>Phone:</strong> +254717713943<br>
                <strong>Email:</strong> onjombafelix1@gmail.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Docs</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Keep testing our API and give feedbacks</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>DEV-TEST-API1</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/DEV-TEST-API1-bootstrap-business-template/ -->
            Designed by <a href="www.github.com/developer-felix">DEV-TEST-API1</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="https://twitter.com/fonjomba" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="https://m.facebook.com/public/Felix-Onjomba" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.linkedin.com/in/felix-onjomba-85229a182/" class="linkedin"><i class="bi bi-linkedin"></i></a>
          <a href="https://github.com/Developer-Felix" class="github"><i class="bi bi-github"></i></a>
          <a href="https://stackoverflow.com/users/15081184/developer-felix" class="stack-overflow"><i class="bi bi-stack-overflow"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ secure_asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ secure_asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ secure_asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ secure_asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ secure_asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ secure_asset('assets/js/main.js') }}"></script>

</body>

</html>
