<? require $_SERVER["DOCUMENT_ROOT"]."/Project_OOD-main/vendor/autoload.php";?>
<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> Stock - Hotal  Management</title>
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
  <body>
    <header id="header" class="fixed-top">
      <div class="container-fluid d-flex justify-content-between align-items-center">

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
      </div>
    </header><!-- End Header -->

    <main id="main">
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>STOCK MANAGEMENT</h2>
          </div>

          @if ($message = Session::get('success')) 
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
          @endif

          <div class="card mb-3">
            <div class="card-header bg-success text-white d-flex justify-content-between">
              <h4>ข้อมูลในคลัง </h4>
              <a href="{{ route('inventory.create') }}" class="btn btn-light">ลงทะเบียนสินค้าใหม่</a>
              {{-- <a href="{{ route('inventory.crateorder') }}" class="btn btn-primary">ออกใบสั่งซื้อสินค้า</a> --}}
            </div>
            <form  action="" class="form inline mb-3" method="GET" role="form">
              <br>
              <div class="input-group">
                <input type="search" class="form-control rounded" name="query"  placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary">search</button>
              </div>
            </form>
              <div class="card">
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Unit price</th>
                          <th scope="col">Total price</th>
                          <th scope="col">Details</th>
                          <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($items as $data)
                        <tr>
                          <td> {{ $data->id }} </td>
                          @if( $data->Quantity < 5)
                          <td style="color: red"> {{ $data->Name }} </td>
                          <td style="color: red"> {{ $data->Quantity }} </td>
                          <td style="color: red"> {{ $data->Unitprice }} </td>
                          <td style="color: red"> {{ $data->Totalprice }} </td>
                          <td style="color: red"> {{ $data->Details }} </td>
                          @else
                          <td> {{ $data->Name }} </td>
                          <td> {{ $data->Quantity }} </td>
                          <td> {{ $data->Unitprice }} </td>
                          <td> {{ $data->Totalprice }} </td>
                          <td> {{ $data->Details }} </td>
                          @endif
                          <td>  
                            <form action="{{ route('inventory.destroy', $data) }}" method="POST" enctype="multipart/form-data">
                              <a href="{{route('inventory.edit', $data->id)}}"class="btn btn-warning">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>
                            
                            </form>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                    {!! $items->links('pagination::bootstrap-5') !!}
                  
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
    <script src="../../public/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../public/assets/vendor/aos/aos.js"></script>
    <script src="../../public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../public/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../../public/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src=../assets/js/main.js"></script>

  </body>

  </html>