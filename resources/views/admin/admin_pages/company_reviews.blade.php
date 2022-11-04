<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')

    <style>

        .center{

            margin: auto;
            width: 80%;
            border: 2px solid white;
            margin-top: 40px;
        }

        .font_size{

            font-size: 40px;
            text-align: center;
            padding-top: 20px;
        }

        .img_sie{

            width: 150px;
            height:150px;
        }


        th{

            color: red;
        }
        .th_color{

            background: skyblue;
        }

        .padding-table-columns td{
            padding:0 5px 0 0; /* Only right padding*/
        }

        .th_reg{

            padding: 30px;
        }

        .td_pad{

            padding-left: 30px;
        }
        .cent{

            text-align: center;
        }

        tr{

            padding: 20px;
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
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Database Project-Mr Sikasote</p>

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

       <!-- partial:partials/_sidebar.html -->
       @include('admin.header')
        <!-- partial -->


        <div class="main-panel">
            <div class="content-wrapper">


                @if(session()->has('message'))

                <div class="alert alert-success">

                    {{ session()-> get('message') }}
                </div>
                @endif

                <h2 class= 'font_size'>All Reviews</h2>


                <table class = 'center'>

                    <tr class= "th_color">

                        <th class = "th_reg">First Name</th>
                        <th class = "th_reg">Last Name</th>
                        <th class = "th_reg">Email</th>
                        <th class = "th_reg">Review</th>
                        <th class = "th_reg">Rating</th>

                    </tr>


                    @foreach ($reviews as $review)

                    <tr>


                        <td class = 'td_pad'>{{ $review -> user -> f_name }}</td>
                        <td class = 'td_pad'>{{ $review -> user -> l_name }}</td>
                        <td class = 'td_pad'>{{ $review -> user -> email }}</td>
                        <td class = 'td_pad'>{{ $review -> review }}</td>
                        <td class = 'td_pad'>{{ $review -> rating }}/5</td>

                    @endforeach

                </table>

                <div class="cent">{{ $reviews->links('vendor.pagination.default') }}</div>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
  </body>
</html>
