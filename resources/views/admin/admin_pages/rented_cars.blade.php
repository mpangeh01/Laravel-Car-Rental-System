<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')

    <style>

        .center{

            margin: auto;
            width: 90%;
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

        .text_color{

            color: black
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

                <div class="font_size">
                    <h2>All Rented Cars</h2>
                    <br><br>
                </div>



                <table class = 'center'>

                    <tr class= "th_color">

                        <th class = "th_reg">Car Model</th>
                        <th class = "th_reg">Days</th>
                        <th class = "th_reg">Color</th>
                        <th class = "th_reg">Pick Up Date</th>
                        <th class = "th_reg">Return Date</th>
                        <th class = "th_reg">Number Plate</th>
                        <th class = "th_reg">Pick Up Location</th>
                        <th class = "th_reg">Return Location</th>
                        <th class = "th_reg">Lessee</th>
                        <th class = "th_reg">Image</th>
                        <th class = "th_reg">Confirm Return</th>

                    </tr>


                    @foreach ($cars as $car)

                    <tr>


                        <td class = 'td_pad'>{{ $car->model}}</td>
                        <td class = 'td_pad'>{{ $car ->reservation->days_num }}</td>
                        <td class = 'td_pad'>{{ $car->color}}</td>
                        <td class = 'td_pad'>{{ $car ->reservation->pick_up_date }}</td>
                        <td class = 'td_pad'>{{ $car ->reservation->return_date }}</td>
                        <td class = 'td_pad'>{{ $car ->plate_num }}</td>
                        <td class = 'td_pad'>{{ $car ->reservation->district->name }}</td>
                        <td class = 'td_pad'>{{ $car ->reservation->return_location }}</td>
                        <td class = 'td_pad'>{{ $car->reservation->user->f_name }} {{ $car->reservation->user->l_name }}</td>
                        <td class = 'td_pad'>
                            <img src="/cars/{{ $car->image }}" alt="{{ $car ->model }}" class = "img_size">
                        </td>
                        <td class = 'td_pad'><a class="btn btn-success btn-sm"onclick="return confirm('Are you sure {{ $car->reservation->f_name }} has returned the {{ $car->model }}')" href="{{ url('car_return', $car->reservation-> id)}}" >RETURNED</a></td>
                    </tr>
                    @endforeach

                </table>

                <div class="cent">{{ $cars->links('vendor.pagination.default') }}</div>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
  </body>
</html>
