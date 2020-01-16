<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>  @yield('title') | {{ config('FutureLeaders', 'Prodigy') }}</title>
    <!-- Bootstrap CSS -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/animate/animate.min.css" rel="stylesheet">
    <link href="css/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="css/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
    
  </head>
  <body>
   <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h6 class="text-light"><a href="index.php"><span>Future Leaders Foundation</span></a></h6>
        <!-- <a href="{{ route('index') }}" class="scrollto"><i class="fab fa-asymmetrik"></i></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->

<main>
        
 <!--Carousel Wrapper-->
<section style="margin-top: 4rem;">
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" >
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
        <li data-target="#carousel-example-2" data-slide-to="3"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
            <!--Mask color-->
            <div class="view">
                    <img class="d-block w-100" src="img/images/secondary-students.jpg"
                    alt="Second slide">
                    <div class="mask rgba-light-strong"></div>
                </div>
            <div class="carousel-caption wow fadeInDown">
                <h1 class="changefont">Every Child is One Caring Adult Away From Being a Success Story</h1>
                <p style="color: yellow;"  class="yy"><strong>Partner with us to make a difference</strong></p>
                <button class="btn btn-primary btn-circle">Read more <i class="fas fa-angle-right"></i> </button>
            </div>
        </div>

        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="img/images/maxresdefault.jpg"
                alt="Third slide">
                <div class="mask rgba-light-strong"></div>
            </div>
            <div class="carousel-caption text-justify wow fadeInUp">
                <h1 class="changefont">Future Leaders Foundation</h1>
                <p style="color: yellow;" class="yy"><b>A scholar resource & support system that leads to success</b></p>
                <button class="btn btn-primary btn-circle">Read more <i class="fas fa-angle-right"></i> </button>
            </div>
        </div>

        <div class="carousel-item">
            <!--Mask color-->
           <div class="view">
                <img class="d-block w-100" src="img/images/qkanxXOBicqZspO-800x450-noPad.jpg"
                alt="Second slide">
                <div class="mask rgba-light-strong"></div>
            </div>
            <div class="carousel-caption wow fadeInLeft">
                <h1  class="changefont">Education is our number one priority</h1>
                <p style="color: yellow;" class="yy"><b>Each one, Reach One! Each One Teach One!!</b></p>
                <button class="btn btn-primary btn-circle">Read more <i class="fas fa-angle-right"></i> </button>
            </div>
        </div>

        <div class="carousel-item">
            <!--Mask color-->
           <div class="view">
                <img class="d-block w-100" src="img/images/nigerian-schoolboy.jpg"
                alt="Second slide">
                <div class="mask rgba-light-strong"></div>
            </div>
            <div class="carousel-caption text-justify wow fadeInLeft">
                <h1 class="changefont1"><span style="color:#D58E30;">Show Them Their Goal,</span> Not The Gun! <span style="color: #112B59;">Give Them The Key,</span>  Not The Cage!!</h1>
                <p class="yy" style="color: yellow;"><b>Show Them The Way Not To War!!!</b></p>
                <button class="btn btn-primary btn-circle">Read more <i class="fas fa-angle-right"></i> </button>
            </div>
        </div>

    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
    </div>
    </section>
    <!--/.Carousel Wrapper-->

 <section id="about">
      <div class="container">

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p class="text-justify text-muted">
                <b>The Future Leaders Foundation</b> is an organisation which creates and supports programs that directly achieves positive outcomes for underprivileged teenage students in mostly in mostly public/government owned secondary schools, by improving high discipline, moral and ethical standards through educational enrichment activities, internships, mentoring, community engagement, leadership development and parental involvement.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
              <h4 class="title"><a href="">Coaching Sessions</a></h4>
              <p class="description">Coaching sessions are mandatory and an integral part for all participants, program managers and mentors of the future leaders foundation program.</p>
            </div>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fas fa-user-friends"></i></i></div>
              <h4 class="title"><a href="">Mentoring</a></h4>
              <p class="description">Mentoring program, mentors senior secondary school students on the path to success. The success of a mentoring relationship depends in great part upon the contribution made by the mentee and mentor.</b></p>
            </div>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fas fa-hand-holding-usd"></i></i></div>
              <h4 class="title"><a href="">Supportive</a></h4>
              <p class="description">It allows for building strong relationships, supportive foundations,academic and social success for the program. Each month student sign up for coaching sessions lead by either a program manager/mentor three goals will be set: <b>Academic, Leadership and Personal</b></p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/images/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- #about -->

    
    <div class="row no-gutters">
        <div class="col-md-6">
        <img src="img/images/01.jpg" class="card-img" alt="Img" >
        </div>
        <div class="col-md-6 card bg-light-purple-blue">
            <div class="card-body pl-5 mt-4">
               <div class="quote">
                    
                    <h2 class="text-bold mb-3">We Are Targeting Over 2,000 Teens and Counting</h2>
                    <p style="font-size: 1.5rem;"> <i class="fas fa-quote-left" ></i><i> We have developed this program to truly help teens thrive. We mentor teens, onthe habits and attitudes they need to be successful. We are currently working with over 500 teens. and more applications are cpming indaily for the program. </i><i class="fas fa-quote-right"></i></p>
               </div>
            </div>
        </div>
    </div>

 <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h6 class="text-uppercase text-justify"><b>Teens will learn the importance of</b></h6>
        </header>

        <div class="row">
          <div class="col-lg-6">
                <canvas id="labelChart"></canvas>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-5">
                <div class="list-group" id="list-tab" role="tablist">
                  <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Self-Management</a>
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Self-Awareness</a>
                  <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Social Awareness</a>
                  <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Relationship Skills</a>
                  <a class="list-group-item list-group-item-action" id="list-Responsible-list" data-toggle="list" href="#list-Responsible" role="tab" aria-controls="settings">Responsible Decision Making</a>
                </div>
              </div>
              <div class="col-7">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="card-header"><span class="text-justify text-muted text-uppercase"><b style="color: #F7464A;">Self Managemnet</b></span></div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">- The Impotance of Resilience</li>
                        <li class="list-group-item">- A clear Strategy for Achieving Goals</li>
                        <li class="list-group-item">- Teachinques for improving Focus</li>
                      </ul>
                  </div>
                  <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                     <div class="card-header"><span class="text-justify text-muted text-uppercase"><b style="color: #46BFBD;">Self Awareness</b></span></div>
                       <ul class="list-group list-group-flush">
                        <li class="list-group-item">- Gratefulness and Respect</li>
                        <li class="list-group-item">- Methods for developing Healthy Habits</li>
                        <li class="list-group-item">- Earing Trust to gain Freedom</li>
                      </ul>
                  </div>
                  <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                     <div class="card-header"><span class="text-justify text-muted text-uppercase"><b style="color: #FDB45C;">Social Awareness</b></span></div>
                       <ul class="list-group list-group-flush">
                        <li class="list-group-item">- Failure: You either Win or you Learn</li>
                        <li class="list-group-item">- How to apologize with maturity</li>
                        <li class="list-group-item">- Behaviours that make you a role model</li>
                      </ul>
                  </div>
                  <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                     <div class="card-header"><span class="text-justify text-muted text-uppercase"><b style="color: #949FB1;">Relationship Skills</b></span></div>
                       <ul class="list-group list-group-flush">
                        <li class="list-group-item">- Earning your parents trust</li>
                        <li class="list-group-item">- How to choose supportive friends</li>
                        <li class="list-group-item">- Learning from caring adults</li>
                      </ul>
                  </div>
                  <div class="tab-pane fade" id="list-Responsible" role="tabpanel" aria-labelledby="list-Responsible-list">
                     <div class="card-header"><span class="text-justify text-muted text-uppercase"><b style="color: #4D5360;">Responsible Decision Making</b></span></div>
                       <ul class="list-group list-group-flush">
                        <li class="list-group-item">- The path to making wise decisions</li>
                        <li class="list-group-item">- Getting motivated to do things you don't feel like</li>
                        <li class="list-group-item">- The importance of a positive attitude</li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </section><!-- #testimonials -->



<!--==========================
  Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Mentors</h3>
          <p>Give back and see the difference! Become a Mentor today!</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

  <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>What we do</h3>
          <p>Future Leaders Fundation reach out to children out there in the society to educate them and bring out the best in them.</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-6 mb-4">
            <div class="card wow bounceInUp">
                <i class="far fa-eye"></i>
              <div class="card-body">
                <h5 class="card-title">Our Vision</h5>
                <p class="card-text">To help under privileged students in public/government owned secondary schools build and develop better inter-personal and leadership qualities.</p>
                <a href="{{route('about')}}" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="card wow bounceInUp">
                <i class="fas fa-podcast"></i>
              <div class="card-body">
                <h5 class="card-title">Our Mission</h5>
                <p class="card-text">The mission of the Future Leaders Foundation is to create educational, leadership and career opportunities for under-privileged secondary school students in our communities through relationships with a volunteer mentor.</p>
                <a href="{{route('about')}}" class="readmore">Read more </a>
              </div>
            </div>
          </div>


        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">24</span>
            <p>Mentors</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">21</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Schools covered</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Total students</p>
          </div>
  
        </div>

      </div>
    </section>


<section id="about">
    <div class="container">
        <!-- <h3 class="section-title text-center font-weight-bold text-greenish-blue">WHAT WE DO</h3> -->
        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/images/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">

            <h5 class="font-weight-bold mb-3">Vocational Training Programs and Pre-University Readiness</h5>
            <p class="text-muted">
                <i class="fas fa-check text-green mr-2"></i> 
                Weekly/Monthly Leadership Sessions
            </p>
            <p class="text-muted">
                <i class="fas fa-check text-green mr-2"></i> 
                Engagement with Peer and Professional Mentors
            </p>
            <p class="text-muted">
                <i class="fas fa-check text-green mr-2"></i>
                Community Service
            </p>
            <p class="text-muted">
                <i class="fas fa-check text-green mr-2"></i>
                Tutoring and Academic Coaching
            </p>
            <p class="text-muted">
                <i class="fas fa-check text-green mr-2"></i>
                College and Career Advisors
            </p>
            <p class="text-muted">
                <i class="fas fa-check text-green mr-2"></i>
                College Tours
            </p>
            <p class="text-muted">
                <i class="fas fa-check text-green mr-2"></i>
                Scholarships (When available) 
            </p>
            <p class="text-muted">
                <i class="fas fa-check text-green mr-2"></i>
            Career Explorations and Internships
            </p>
            <p class="text-muted">
                <i class="fas fa-check text-green mr-2"></i>
            Counseling
            </p>
          </div>
        </div>
    </div>
</section>


<section class="padding-90px-tb xs-padding-60px-tb cover-background tz-builder-bg-image border-none bg-img-four" id="content-section15" data-img-size="(W)1920px X (H)900px" style="background: linear-gradient(rgba(22, 22, 22, 0.8), rgba(22, 22, 22, 0.8)) repeat scroll 0% 0%, transparent url('img/images/qkanxXOBicqZspO-800x450-noPad.jpg') repeat scroll 0% 0%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 center-col text-center">
                <h6 class="alt-font text-white line-height-50 sm-section-title-large xs-section-title-large sm-no-margin-top margin-six-bottom sm-margin-five-bottom tz-text">Become a Mentor today!</h6>
                <div class="title-medium sm-title-medium xs-title-medium text-white width-85 sm-width-100 center-col font-weight-100 margin-six-bottom sm-margin-five-bottom tz-text">Give back and see the difference.</div>
                <div class="text-medium sm-text-medium text-light margin-twelve-bottom sm-margin-fifteen-bottom width-85 sm-width-100 center-col tz-text">
                    <p><b>Future Leaders Foundation</b> <i>Mentoring Program, mentors senior secondary</i>school students on the path to success.  The success of a mentoring relationship depends in great part upon the contribution made by the mentee and mentor.</p>
                    <p>Through the <b>Future Leaders Foundation</b> <i>Mentoring Program,</i> our teenagers/scholars will be able to create a focused personal, academic and career-related plan for their future.</p>
                </div>
                <a class="btn-large btn bg-greenish-blue sm-no-margin-bottom btn-circle text-white inner-link" href="{{route('register')}}"><span class="tz-text">Contribute Here </span> </a>
            </div>
        </div>
    </div>
</section>

<!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Gallery</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Section 1</li>
              <li data-filter=".filter-card">Section 2</li>
              <li data-filter=".filter-web">Section 3</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/images/aifa-news.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Section 1(a)</a></h4>
                <p>Section 1</p>
                <div>
                  <a href="img/images/aifa-news.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/images/DGyVoClXoAAxpOv.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Section 1(b)</a></h4>
                <p>Section 1</p>
                <div>
                  <a href="img/images/DGyVoClXoAAxpOv.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/images/IMG_4292.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Section 2(a)</a></h4>
                <p>Section 2</p>
                <div>
                  <a href="img/images/IMG_4292.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/images/nigerian-schoolboy.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Section 2(b)</a></h4>
                <p>Section 2</p>
                <div>
                  <a href="img/images/nigerian-schoolboy.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/images/OponImo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Section 3(b)</a></h4>
                <p>Section 3</p>
                <div>
                  <a href="img/images/OponImo.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/images/qkanxXOBicqZspO-800x450-noPad.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Section 2(c)</a></h4>
                <p>Section 2</p>
                <div>
                  <a href="img/images/qkanxXOBicqZspO-800x450-noPad.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/images/slide_0002_IMG_4137.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Section 2(c)</a></h4>
                <p>Section 2</p>
                <div>
                  <a href="img/images/slide_0002_IMG_4137.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/images/social-investment.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Section 3(b)</a></h4>
                <p>Section 3</p>
                <div>
                  <a href="img/images/social-investment.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/images/Opon-Imo-students.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Section 3(a)</a></h4>
                <p>Section 3</p>
                <div>
                  <a href="img/images/Opon-Imo-students.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>
  
  <!--==========================
    Footer
  ============================-->
  <footer id="footer" style="padding: 0 0 30px 0; color: #eee; font-size: 14px; background: #00428a;">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h6>Powered By:</h6>
            <p><b> Prodigy</b> Projects</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="{{route('index')}}">Home</a></li>
              <li><a href="{{route('about')}}">About us</a></li>
              <li><a href="{{route('contact')}}">contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              #16 Ebony Road, Orazi<br>
              Port Harcourt,<br>
              Nigeria. <br>
              <strong>Tel:</strong> +234 8037 097 747<br>
              <strong>Email:</strong> info@thefutureleadersfoundation.org<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Welcome</p>
            <form action="#">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright  &copy; 2020 <strong>Future </strong>Leaders Foundation
      </div>
      <div class="credits">
         All rights reserved
      </div>
    </div>
  </footer>
  <!-- #footer -->
<!-- Alisi Daniel developer -->
<a href="#" class="back-to-top"><i class="fas fa-angle-up"></i></a>
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/jquery/jquery-migrate.min.js"></script>
  <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/easing/easing.min.js"></script>
  <script src="js/mobile-nav/mobile-nav.js"></script>
  <script src="js/wow/wow.min.js"></script>
  <script src="js/waypoints/waypoints.min.js"></script>
  <script src="js/counterup/counterup.min.js"></script>
  <script src="js/owlcarousel/owl.carousel.min.js"></script>
  <script src="js/isotope/isotope.pkgd.min.js"></script>
  <script src="js/lightbox/js/lightbox.min.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
// $(function() {

    var ctxP = document.getElementById("labelChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      plugins: [ChartDataLabels],
      type: 'pie',
      data: {
        labels: ["Self-Management", "Self-Awareness", "Social Awareness", "Relationship Skills", "Responsible Decision Making"],
        datasets: [{
          data: [1000, 1000, 1000, 1000, 1000],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true,
        legend: {
          position: 'right',
          labels: {
            padding: 20,
            boxWidth: 10
          }
        },
        plugins: {
          datalabels: {
            formatter: (value, ctx) => {
              let sum = 0;
              let dataArr = ctx.chart.data.datasets[0].data;
              dataArr.map(data => {
                sum += data;
              });
              let percentage = (value * 100 / sum).toFixed(2) + "%";
              return percentage;
            },
            color: 'white',
            labels: {
              title: {
                font: {
                  size: '16'
                }
              }
            }
          }
        }
      }
    });
// });
</script>
</body>
</html>
