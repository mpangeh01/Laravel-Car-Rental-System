<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
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

        .credentials{

            margin: auto;
            text-align: center;
            padding: 10%;
            font-size: 25px;
            width: 40%;
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

                <div class="font_size">

                    <h2>Verify User Credentials</h2>
                </div>

                @if(session()->has('message'))

                <div class="alert alert-success">

                    {{ session()-> get('message') }}
                </div>
                @endif

                <div class="credentials">

                    @foreach ($documents as $document)



                    <h2>First name: <span>{{ $document->user->f_name }}</span></h2><br>
                    <h2>Last name: <span>{{ $document-> user->l_name}}</span></h2><br>
                    <h2>Email Address: <span>{{ $document->user->email }}</span></h2><br>

                    <h2>Drivers Licence: <span><img src="/LICENSE/{{ $document->license }}" alt=""></span></h2><br>
                    <h2>National Registration Card: <span><img src="/NRC/{{ $document->nrc }}" alt=""></span></h2><br>
                    @endforeach

                    <a class="btn btn-success" onclick="return confirm('Are you sure you want to Accept {{ $user->f_name }}')" href="{{ url('accept_user', $user->id) }}">Accept</a>
                    <span><a class="btn btn-danger" onclick="return confirm('Are you sure you want to Decline {{ $user->f_name }}')" href="{{ url('decline_user', $user->id) }}">Decline</a></span>
            </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
  </body>
</html>
