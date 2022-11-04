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

                <h2 class= 'font_size'>All Users</h2>


                <table class = 'center'>

                    <tr class= "th_color">

                        <th class = "th_reg">First Name</th>
                        <th class = "th_reg">Last Name</th>
                        <th class = "th_reg">Email</th>
                        <th class = "th_reg">Phone</th>
                        <th class = "th_reg">Status</th>
                        <th class = "th_reg">Date Joined</th>
                        <th class = "th_reg">Delete</th>
                    </tr>


                    @foreach ($users as $user)

                    <tr>


                        <td class = 'td_pad'>{{ $user -> f_name }}</td>
                        <td class = 'td_pad'>{{ $user -> l_name }}</td>
                        <td class = 'td_pad'>{{ $user -> email }}</td>
                        <td class = 'td_pad'>{{ $user -> phone }}</td>
                        <td class = 'td_pad'>{{ $user -> acc_status }}</td>
                        <td class = 'td_pad'>{{ $user -> created_at }}</td>
                        @if($user->userType = '1')

                        <td class = 'td_pad'><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete {{ $user->f_name }}')" href="{{ url('delete_user', $user->id) }}" aria-disabled="true">Delete</a></td>
                        @else
                        <td class = 'td_pad'><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Review')" href="{{ url('delete_user', $user->id) }}">Delete</a></td>
                        @endif
                    </tr>
                    @endforeach

                </table>

                <div class="cent">{{ $users->links('vendor.pagination.default') }}</div>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
  </body>
</html>
