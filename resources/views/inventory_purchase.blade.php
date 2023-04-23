<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>purchase- Hotal Management</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../public/assets/img/favicon.png" rel="icon">
  <link href="../public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
  <link href="../public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
  <link href="../../public/assets/css/style.css" rel="stylesheet">
    
  <!-- <link rel="stylesheet" href="/Project_OOD-main/theme/css/bootstrap-theme.css"> -->
  <link rel="stylesheet" href="../theme/css/bootstrap-theme.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

  <!-- =======================================================
  * Template Name: Kelly - v4.10.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h6 class="logo me-auto me-lg-0"><a href="index.html">Hotal Insign Management</a></h6>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="about.html">CHECK IN</a></li>
          <li><a href="checkout.html">CHECK OUT</a></li>
          <li><a class="active" href="inventory.html">INVENTORY MANAGEMENT</a></li>
          <li><a href="portfolio.html">ROOM MANAEGMENT </a></li>
          <li><a href="contact.html">STAFF MANAGEMENT</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Purchase order</h2>
        </div>
        
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">

          <div class="col-md-3 colform-group mt-1">
            <label><i></i>Date</label>
            <input type="date" class="form-control" name="Date" id="Date" required>
          </div>
          <br>

            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
              
          <div class="card">
            <div class="card-body">
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Quantity</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td> <select class="col-md-2 form-select form-select-lg mb-2" id="mySelect" name="mySelect" onchange="showInput()">
                      <option value="option1">Option 1</option>
                      <option value="option2">Option 2</option>
                      <option value="option3">Option 3</option>
                      <option value="other">Other</option>
                    </select> 
                    
                    <div id="otherInput" style="display:none;">
                      <label for="otherValue">Other Value:</label>
                      <input type="text" id="otherValue" name="otherValue">
                    </div>

                    <script>
                      function showInput() {
                        var select = document.getElementById("mySelect");
                        var inputDiv = document.getElementById("otherInput");
                        if (select.value == "other") {
                          inputDiv.style.display = "block";
                        } else {
                          inputDiv.style.display = "none";
                        }
                      }
                      </script>

                    </td>
                    <td><div class="col-md-8 form-group mt-3-0">
                      <input type="number" class="form-control" name="Amount" id="Amount" placeholder="Your amount" required>
                    </div>
                    </td>
                  </tr>
                  
                  <tr>
                    <th scope="row">2</th>
                    <td> <select class="col-md-2 form-select form-select-lg mb-2" id="mySelect2" name="mySelect2" onchange="showInput2()">
                      <option value="option1">Option 1</option>
                      <option value="option2">Option 2</option>
                      <option value="option3">Option 3</option>
                      <option value="other">Other</option>
                    </select> 
                    
                    <div id="otherInput2" style="display:none;">
                      <label for="otherValue">Other Value:</label>
                      <input type="text" id="otherValue" name="otherValue">
                    </div>

                    <script>
                      function showInput2() {
                        var select = document.getElementById("mySelect2");
                        var inputDiv = document.getElementById("otherInput2");
                        if (select.value == "other") {
                          inputDiv.style.display = "block";
                        } else {
                          inputDiv.style.display = "none";
                        }
                      }
                      </script>

                    </td>
                    <td><div class="col-md-8 form-group mt-3-0">
                      <input type="number" class="form-control" name="Amount" id="Amount" placeholder="Your amount" required>
                    </div>
                    </td>
                    </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td> <select class="col-md-2 form-select form-select-lg mb-2" id="mySelect3" name="mySelect3" onchange="showInput3()">
                      <option value="option1">Option 1</option>
                      <option value="option2">Option 2</option>
                      <option value="option3">Option 3</option>
                      <option value="other">Other</option>
                    </select> 
                    
                    <div id="otherInput3" style="display:none;">
                      <label for="otherValue">Other Value:</label>
                      <input type="text" id="otherValue" name="otherValue">
                    </div>

                    <script>
                      function showInput3() {
                        var select = document.getElementById("mySelect3");
                        var inputDiv = document.getElementById("otherInput3");
                        if (select.value == "other") {
                          inputDiv.style.display = "block";
                        } else {
                          inputDiv.style.display = "none";
                        }
                      }
                      </script>

                    </td>
                    <td><div class="col-md-8 form-group mt-3-0">
                      <input type="number" class="form-control" name="Amount" id="Amount" placeholder="Your amount" required>
                    </div>
                    </td>
                    </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td> <select class="col-md-2 form-select form-select-lg mb-2" id="mySelect4" name="mySelect4" onchange="showInput4()">
                      <option value="option1">Option 1</option>
                      <option value="option2">Option 2</option>
                      <option value="option3">Option 3</option>
                      <option value="other">Other</option>
                    </select> 
                    
                    <div id="otherInput4" style="display:none;">
                      <label for="otherValue">Other Value:</label>
                      <input type="text" id="otherValue" name="otherValue">
                    </div>

                    <script>
                      function showInput4() {
                        var select = document.getElementById("mySelect4");
                        var inputDiv = document.getElementById("otherInput4");
                        if (select.value == "other") {
                          inputDiv.style.display = "block";
                        } else {
                          inputDiv.style.display = "none";
                        }
                      }
                      </script>

                    </td>
                    <td><div class="col-md-8 form-group mt-3-0">
                      <input type="number" class="form-control" name="Amount" id="Amount" placeholder="Your amount" required>
                    </div>
                    </td>
                    </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td> <select class="col-md-2 form-select form-select-lg mb-2" id="mySelect5" name="mySelect5" onchange="showInput5()">
                      <option value="option1">Option 1</option>
                      <option value="option2">Option 2</option>
                      <option value="option3">Option 3</option>
                      <option value="other">Other</option>
                    </select> 
                    
                    <div id="otherInput5" style="display:none;">
                      <label for="otherValue">Other Value:</label>
                      <input type="text" id="otherValue" name="otherValue">
                    </div>

                    <script>
                      function showInput5() {
                        var select = document.getElementById("mySelect5");
                        var inputDiv = document.getElementById("otherInput5");
                        if (select.value == "other") {
                          inputDiv.style.display = "block";
                        } else {
                          inputDiv.style.display = "none";
                        }
                      }
                      </script>

                    </td>
                    <td><div class="col-md-8 form-group mt-3-0">
                      <input type="number" class="form-control" name="Amount" id="Amount" placeholder="Your amount" required>
                    </div>
                    </td>
                  </tr>

                    
                    
                  
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
            
          
          
          <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

          <div class="container">
            <div class="my-3">
            </div>
            <div class="text-center"><button type="submit">Comfirm order</button></div>
          </div>


        </form>    
              
                

      </div>
    </section>
    
  </main>

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Thank you for watching
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a>Group 7</a>
      </div>
    </div>
  </footer><!-- End  Footer -->
  <!-- Vendor JS Files -->
  <script src="../../public/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../public/assets/vendor/aos/aos.js"></script>
  <script src="../../public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../public/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../public/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../../public/assets/vendor/php-email-form/validate.js"></script>
  <script src="../../public/assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->
    <script src=../../public/assets/js/main.js"></script>

</body>

</html>