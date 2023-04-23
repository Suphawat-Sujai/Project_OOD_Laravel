
<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> Edit - Hotal  Management</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> 

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="/Project_OOD-main/theme/css/bootstrap-theme.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

    <!-- =======================================================
    * Template Name: Kelly - v4.10.0
    * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

  <body>
    <header id="header" class="fixed-top">
      {{-- <div class="container-fluid d-flex justify-content-between align-items-center">

        <h6 class="logo me-auto me-lg-0"><a href="index.html">Hotal Management</a></h6>
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="checkin.html">CUSTOMER MANAEGMENT</a></li>
            <li><a class="active" href="inventory.html">STOCK MANAGEMENT</a></li>
            <li><a href="editroom.html">ROOM MANAEGMENT </a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div> --}}
      
    </header><!-- End Header -->

    <main id="main">
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>STOCK MANAGEMENT</h2>
          </div>
          <div class="card mb-3">
            <div class="card-header bg-primary text-white d-flex justify-content-between">
              <h4>แบบฟอร์มเเก้ไขสินค้า</h4>
              <a href="{{ route('inventory.index') }}" class="btn btn-light">Back</a>
            </div>

            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
              


            <form action="{{ route('test.update', $data->id) }}" method="POST" enctype="multipart/form-data">

              @csrf
              {{-- @method('PUT')  --}}
              <br>
              <div class="card-body">

                <div class="form-group">
                  <label for="firstname">Name</label>
                  <input type="text" name="itemname" value="{{$data->Name}}" id="firstname" class="form-control">
                  @error('name')
                    <div class="alert alert-danger">{{ $message}}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="recipient-Quantity" class="col-form-label">Quantity</label>
                  <input type="number" name="Quantity" value="{{$data->Quantity}}" class="form-control" id="recipient-name">
                  @error('Quantity')
                    <div class="alert alert-danger">{{ $message}}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="recipient-Unitprice" class="col-form-label">Unitprice:</label>
                  <input type="number" name="Unitprice" value="{{$data->Unitprice}}" class="form-control" id="recipient-name">
                  @error('Unitprice')
                    <div class="alert alert-danger">{{ $message}}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="recipient-Totalprice" class="col-form-label">Totalprice:</label>
                  <input type="number" name="Totalprice" value="{{$data->Totalprice}}" class="form-control" id="recipient-name">
                  @error('Totalprice')
                    <div class="alert alert-danger">{{ $message}}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="message-Detail" class="col-form-label">Detail:</label>
                  <input class="form-control" name="Details" value="{{$data->Details}}" id="message-text" row='15'> 
                  @error('Details')
                      <div class="alert alert-danger">{{ $message}}</div>
                  @enderror
                </div>

                <div class="container">
                  <button class="btn btn-success" type="submit">SAVE</button>
                </div>
                

              </div>
            </form>
              <div class="card">
                <div class="card-body">
      
                  <!-- Default Table -->
                  <!-- End Default Table Example -->
                  </div>
              </div>
              <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

          </div>
        </div>
   
      </section>

      <!-- Modal add -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add imformation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Amount:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Unit price:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Total price:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Add</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal edit -->
      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit imformation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Amount:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Unit price:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Total price:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Edit</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal delete -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">Delete imformation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Cancel</button>
              <button type="button" class="btn btn-danger">confirm</button>
            </div>
        </div>
      </div>

      
      
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
    <script src="../public/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../public/assets/vendor/aos/aos.js"></script>
    <script src="../public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../public/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../public/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../public/assets/js/main.js"></script>

  </body>

  </html>