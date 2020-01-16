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
     <section id="contact" style="margin-top: 35px;">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">
    
          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe  src="https://maps.google.com/maps?q=16%20Ebony%20Road%2C%20Orazi%20Port%20Harcour&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>

            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>#16 Ebony Road, Orazi Port Harcourt.</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>info@thefutureleadersfoundation.org</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>+234 8037 097 747</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="#"  role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

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
