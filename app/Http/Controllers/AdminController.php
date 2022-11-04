<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\cars;
use App\Models\User;
use App\Models\reviews;
use App\Models\category;
use App\Models\district;
use App\Models\featured;
use App\Models\province;
use App\Models\documents;
use App\Models\car_photos;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    /**CATEGORY RELATED */

    public function view_categories(){

        $data = category::all();
        return view('admin.admin_pages.view_categories', compact('data'));
    }

    public function add_category(Request $request){

        $data = new category();

        $data -> cat_name = $request -> category;
        $data -> save();

        return redirect() -> back() ->with('message', 'Category added succesfully');
    }

    public function delete_cat($id){

        $data = category::find($id);

        $data-> delete();

        return redirect() -> back() ->with('message', 'Category deleted succesfully');
    }

    public function dash(){

        $reservation = reservation::all()->take(5);
        return view('admin.home', compact('reservation'));
    }


    /*LOCATION RELATED*/

    public function view_provinces(){

        $data = province::all();

        return view('admin.admin_pages.view_provinces', compact('data'));
    }

    public function add_province(Request $request){


        $data = new province();

        $data -> name = $request -> province;
        $data -> save();

        return redirect() -> back() ->with('message', 'Province added succesfully');
    }

    public function delete_pro($id){

        $data = province::find($id);

        $data-> delete();

        return redirect() -> back() ->with('message', 'Province deleted succesfully');
    }

    public function view_districts(){

        $province = province::all();
        $district= district::all();

        return view('admin.admin_pages.view_districts', compact('province','district'));
    }

    public function add_district(Request $request){


        $data = new district();

        $data -> name = $request -> district;
        $data-> prov_id = $request -> get('province');
        $data -> save();

        return redirect() -> back() ->with('message', 'District added succesfully');
    }


    /**CAR RELATED */

    public function add_cars(){

        $category = category::all();
        $district = district::all();
        $province = province::all();

        return view('admin.admin_pages.add_car', compact('category', 'district', 'province'));
    }

    public function add_car(Request $request){

        $car = new cars();
        $date_insured = Carbon::createFromTimestamp(strtotime($request->date_insured) )->format('Y-m-d');
        $date_expired = Carbon::createFromTimestamp(strtotime($request->expiry) )->format('Y-m-d');

        $car -> cat_id = $request-> get('category');
        $car -> prov_id = $request -> get('province');
        $car -> district_id = $request-> get('district');
        $car -> model = $request -> name;
        $car -> transmission = $request -> transmission;
        $car -> daily_price = $request -> price;
        $car -> color = $request -> color;
        $car -> fuel_type = $request -> fuel;
        $car -> seat_num = $request -> capacity;
        $car -> plate_num = $request -> plate_num;
        $car -> insure_type = $request->typo;
        $car -> insure_create = $date_insured;
        $car -> insure_expire = $date_expired;
        $car -> insure_company = $request->company;
        $car -> insure_quarter = $request->quarter;
        $image = $request-> image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request -> image->move('cars', $imagename);

        $car -> image = $imagename;



        $image2 = $request-> image2;

        $imagename = time().'.'.$image2->getClientOriginalExtension();

        $request -> image2->move('image2', $imagename);

        $car -> image2 = $imagename;



        $image3 = $request-> image3;

        $imagename = time().'.'.$image3->getClientOriginalExtension();

        $request -> image3->move('image3', $imagename);

        $car -> image3 = $imagename;



        $image4 = $request-> image4;

        $imagename = time().'.'.$image4->getClientOriginalExtension();

        $request -> image4->move('image4', $imagename);

        $car -> image4 = $imagename;



        $image5 = $request-> image5;

        $imagename = time().'.'.$image5->getClientOriginalExtension();

        $request -> image5->move('image5', $imagename);

        $car -> image5 = $imagename;


        $car->save();


        return redirect()-> back() -> with ('message', 'Car added succesfully');

    }

    public function show_cars(){

        $cars = cars::orderBy('id', 'DESC')->paginate(10);

        return view('admin.admin_pages.show_cars', compact('cars'));
    }

    public function delete_car($id){

        $data = cars::find($id);

        $data-> delete();

        return redirect() -> back() ->with('message', 'Car deleted succesfully');
    }

    public function update_car($car_id){

        $car = cars::find($car_id);
        $category = category::all();
        $province = province::all();
        $district = district::all();

        return view('admin.admin_pages.update_car', compact('car', 'category', 'province', 'district'));
    }

    public function update_car_confirm(Request $request, $id){

        $car = cars::find($id);

        $date_insured = Carbon::createFromTimestamp(strtotime($request->date_insured) )->format('Y-m-d');
        $date_expired = Carbon::createFromTimestamp(strtotime($request->expiry) )->format('Y-m-d');


        $car -> cat_id = $request-> get('category');
        $car -> prov_id = $request -> get('province');
        $car -> district_id = $request-> get('district');
        $car -> model = $request -> name;
        $car -> daily_price = $request -> price;
        $car -> color = $request -> color;
        $car -> fuel_type = $request -> fuel;
        $car -> seat_num = $request -> capacity;
        $car -> plate_num = $request -> plate_num;
        $car -> insure_type = $request->typo;
        $car -> insure_create = $date_insured;
        $car -> insure_expire = $date_expired;
        $car -> insure_company = $request->company;
        $car -> insure_quarter = $request->quarter;

        $image = $request -> image;


        if($image){

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request -> image->move('cars', $imagename);

            $car -> image = $imagename;
        }


        $image2 = $request-> image2;

        if($image2){

            $imagename = time().'.'.$image2->getClientOriginalExtension();

            $request -> image2->move('image2', $imagename);

            $car -> image2 = $imagename;
        }



        $image3 = $request-> image3;

        if($image3){

            $imagename = time().'.'.$image3->getClientOriginalExtension();

            $request -> image3->move('image3', $imagename);

            $car -> image3 = $imagename;
        }



        $image4 = $request-> image4;

        if($image4){

            $imagename = time().'.'.$image4->getClientOriginalExtension();

            $request -> image4->move('image4', $imagename);

            $car -> image4 = $imagename;
        }


        $image5 = $request-> image5;

        if($image5){

            $imagename = time().'.'.$image5->getClientOriginalExtension();

            $request -> image5->move('image5', $imagename);

            $car -> image5 = $imagename;
        }


        $car-> save();

        return redirect() -> back()-> with ('message', 'Car Updated succesfully');;
    }


    public function company_reviews(){

        $reviews = reviews::orderBy('id', 'DESC')->paginate(20);
        return view('admin.admin_pages.company_reviews', compact('reviews'));
    }

    public function delete_review($id){

        $data = reviews::find($id);

        $data-> delete();

        return redirect() -> back() ->with('message', 'Review deleted succesfully');
    }

    public function view_users(){

        $usertype = Auth::User()->userType;

        $users = User::orderBy('id', 'DESC')->paginate(20);
        return view('admin.admin_pages.view_users',compact('users', 'usertype'));
    }

    public function reservations(){

        $reservations = reservation::orderBy('id', 'DESC')->paginate(20);
        return view('admin.admin_pages.reservations', compact('reservations'));
    }

    public function delete_reservation($id){

        $data = reservation::find($id);

        $data-> delete();

        return redirect() -> back() ->with('message', 'Reservation deleted succesfully');
    }

    public function paid_confirm($id){

        $reservation = reservation::find($id);
        $car_id = $reservation->car_id;

        $car = cars::find($car_id);

        $car-> state = 'Hired';
        $reservation-> status = 'Paid';
        $reservation-> State = 'Taken';

        $car->save();
        $reservation->save();

        return redirect() -> back() ->with('message', 'Paid succesfully');
    }

    public function car_return($id){

        $reservation = reservation::find($id);
        $car_id = $reservation->car_id;

        $car = cars::find($car_id);
        $car-> state = 'Available';
        $reservation-> State = 'Returned';

        $car->save();
        $reservation->save();

        return redirect() -> back() ->with('message', 'Car returned succesfully');
    }

    public function print_ticket($id){


        $reservation = reservation::find($id);

        $ticket = PDF::loadView('user.ticket', compact('reservation'));

        return $ticket->download('ticket_details.pdf');
    }

    public function featured_cars(){

        $cars = featured::orderBy('id', 'ASC')->paginate(10);

        return view('admin.admin_pages.featured_car', compact('cars'));


    }

    public function search_featured(Request $request){

        $keyword = $request->search;
        $cars = cars::where('model', 'like', "%". $keyword."%")->paginate(9);

        return view('admin.admin_pages.search_featured', compact('cars'));
    }

    public function remove_car($id){

        $data = featured::find($id);
        $data->delete();

        return redirect() -> back() ->with('message', 'Car removed succesfully');
    }

    public function add_featured($id){


        $featured = new featured();

        $featured->car_id = $id;
        $featured->save();

        return redirect() -> back() ->with('message', 'Car Added succesfully');
    }

    public function unverified_users(){


        $users = User::where('acc_status', '=', 'Unverified')->paginate(20);

        return view('admin.admin_pages.unverified_users', compact('users'));
    }

    public function verify_user($id){

        $user=User::find($id);
        $documents = documents::where('user_id', '=', $id)->get();

        return view('admin.admin_pages.verify_user', compact('user', 'documents'));
    }

    public function accept_user($id){

        $user = User::find($id);

        $user-> acc_status = 'Verified';
        $user->save();

        return redirect() -> back() ->with('message', 'User accepted succesfully');
    }

    public function decline_user($id){

        $user = User::find($id);

        $user->delete();

        return to_route('Unverified')->with('message', 'User Declined succesfully');
    }

    public function rented_cars(){

        $cars = cars::where('state', '=', 'Hired')->paginate(10);

        return view('admin.admin_pages.rented_cars', compact('cars'));
    }

    public function available_cars(){

        $cars = cars::where('state', '=', 'Available')->paginate(10);

        return view('admin.admin_pages.available_cars', compact('cars'));
    }
}
