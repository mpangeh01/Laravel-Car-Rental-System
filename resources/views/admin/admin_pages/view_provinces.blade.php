
<!DOCTYPE html>
<html lang="en">
  <head>

        @include('admin.css')

        <style>


            .div_center{

                text-align: center;
                padding-top:40px;

            }
            .h2_font{

                font-size: 40px;
                padding-bottom: 10px;
            }

            .text_color{

                color: black;
            }

            .center{

                margin: auto;
                width: 50%;
                text-align: center;
                margin-top: 30px;
                border: 3px solid whitesmoke;
            }

            table#T_rows{

                border-collapse:separate;
                border-spacing:0 5px;
            }

        </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wr apper">

        <!-- partial:partials/_navbar.html -->

            @include('admin.header')
        <!-- partial -->

        <div class="main-panel">

            <div class="content-wrapper">

                @if(session()->has('message'))

                    <div class="alert alert-success">

                        {{ session()-> get('message') }}
                    </div>
                @endif

                <div class = "div_center">

                    <h2 class = 'h2_font'>Add Province</h2>

                    <form action="{{ url('/add_province') }}" method="POST">

                        @csrf
                        <input type="text" class ='text_color' name="province" placeholder="write province name">

                        <input type="submit" name="submit" value="Add category" class = 'btn btn-primary'>
                    </form>
                </div>


                <table class="center" id = "T_rows">

                    <tr>

                        <td>Province Name</td>
                        <td>Action</td>

                    </tr>

                    @foreach ($data as $data)


                    <tr>

                        <td>{{ $data-> name}}</td>
                        <td><a onclick="return confirm('Are you sure you want to delete {{ $data->name }}')" href="{{ url('delete_pro', $data->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->


    <!-- js -->
    @include('admin.js')
    <!-- end of js -->
  </body>
</html>
