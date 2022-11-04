<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
    @include('admin.css')

    <style type="text/css">

        .div_center{

            text-align: center;
            padding-top: 40px;
        }

        .font_size{

            font-size: 40px;
            padding-bottom: 40px;
        }

        .text_color{

            color: black;
            padding-bottom: 20px;
        }

        label{

            display: inline-block;
            width: 200px;
        }

        .div_design{

            padding-bottom: 15px;
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

                <div class="div_center">

                    <h1 class= 'font_size'>Add Car</h1>


                    <form action="{{ url('update_car_confirm', $car -> id) }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class = "div_design">

                            <label for="">Car Model :</label>
                            <input type="text" class="text_color" name="name" required ="" value ='{{ $car -> model }}'>
                        </div>

                        <div class = "div_design">

                            <label for="">Daily Price :</label>
                            <input type="number" class="text_color" name="price" required ="" value ='{{ $car -> daily_price }}'>
                        </div>

                        <div class = "div_design">

                            <label for="">Color :</label>
                            <input type="text" class="text_color" name="color" required ="" value ='{{ $car -> color }}'>
                        </div>

                        <div class = "div_design">

                            <label for="">Fuel Type :</label>
                            <input type="text" class="text_color" name="fuel" required ="" placeholder="Gasoline,  Electric or Diesel" value ='{{ $car -> fuel_type }}'>
                        </div>

                        <div class = "div_design">

                            <label for="">Seat Capacity :</label>
                            <input type="number" class="text_color" name="capacity" min="0" required ="" value ='{{ $car -> seat_num }}'>
                        </div>

                        <div class = "div_design">

                            <label for="">Number Plate :</label>
                            <input type="text" class="text_color" name="plate_num" required ="" value ='{{ $car -> plate_num }}'>
                        </div>

                        <div class = "div_design">

                            <label for="">Insurance Company:</label>
                            <input type="text" class="text_color" name="company" required ="" value="{{ $car->insure_company }}">
                        </div>

                        <div class = "div_design">

                            <label for="">Insurance Quarter:</label>
                            <input type="number" class="text_color" name="quarter" required ="" value="{{ $car->insure_quarter }}">
                        </div>

                        <div class = "div_design">

                            <label for="">Insurance Type:</label>
                            <input type="text" class="text_color" name="typo" required ="" value="{{ $car->insure_type }}">
                        </div>

                        <div class = "div_design">

                            <label for="">Date Insured :</label>
                            <input type="date" class="text_color" name="date_insured" required ="" value="{{ $car->insure_create }}">
                        </div>

                        <div class = "div_design">

                            <label for="">Insurance Expire:</label>
                            <input type="date" class="text_color" name="expiry" required ="" value="{{ $car->insure_expire }}">
                        </div>

                        <div class = "div_design">

                            <label for="">Category :</label>
                            <select name="category" id="" class="text_color" required ="">

                                <option value="{{ $car-> category-> id }}" selected>{{ $car-> category->cat_name }}</option>

                                @foreach ($category as $category)
                                <option value="{{ $category-> id }}">{{ $category-> cat_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class = "div_design">

                            <label>Province :</label>
                            <select name="province" wire:model="province" id="" class="text_color" required ="">

                                <option value="{{ $car -> province -> id}}" selected>{{ $car -> province -> name }}</option>

                                @foreach ($province as $province)

                                <option value="{{ $province->id }}">{{ $province -> name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class = "div_design">

                            <label>District :</label>

                            <select name="district" wire:model = "district" class="text_color" required ="">

                                <option value="{{ $car-> district-> id }}" selected>{{ $car-> district-> name }}</option>

                                @foreach ($district as $district)

                                <option value="{{ $district-> id }}">{{ $district->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class = "div_design">

                            <label for="">Current Car Image :</label>
                            <img src="/cars/{{ $car -> image }}" alt="{{ $car -> model }}" width="200px" height="200px" style="margin: auto;">
                        </div>

                        <div class = "div_design">

                            <label for="">Change Car Image :</label>
                            <input type="file" class="" name="image">
                        </div>


                        <br>
                        <br>

                        <div class = "div_design">

                            <label for="">Add more Images for the car</label>

                        </div>

                        <div class = "div_design">

                            <label for="">Image 2:</label>
                            <input type="file" name="image2" >
                        </div>

                        <div class = "div_design">

                            <label for="">Image 3:</label>
                            <input type="file" name="image3">
                        </div>

                        <div class = "div_design">

                            <label for="">Image 4:</label>
                            <input type="file" name="image4" >
                        </div>

                        <div class = "div_design">

                            <label for="">Image 5:</label>
                            <input type="file" name="image5">
                        </div>

                        <div class = "div_design">

                            <input type="submit" value="Update Car" class="btn btn-primary">
                        </div>
                    </form>
                </div>

            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
  </body>
</html>
