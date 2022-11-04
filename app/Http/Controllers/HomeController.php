<?php

namespace App\Http\Controllers;

use Mail;
use DateTime;
use Carbon\Carbon;
use App\Models\faq;
use App\Models\cars;
use App\Models\User;
use App\Models\slider;
use App\Models\contact;
use App\Models\reviews;
use App\Models\featured;
use App\Models\car_photos;
use App\Models\reservation;
use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\district;
use App\Models\documents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail as FacadesMail;

class HomeController extends Controller
{
    public function redirect(){

        $usertype = Auth::User()->userType;

        if($usertype == '1'){

            $reservation = reservation::all()->take(5);
            return view('admin.home', compact('reservation'));
        }

        else{


            $data = Auth::User();
            $user= Auth::User()->id;

            $reservations= reservation::where('user_id', '=', $user)->latest()->take(3)->paginate(2);

            return view('user.UserHome', compact('data', 'reservations'));


        }
    }

    public function dashboard(){

        $usertype = Auth::User()->userType;

        if($usertype == '1'){

            $reservation = reservation::all()->take(5);

            return view('admin.home', compact('reservation'));
        }

        else{



            $data = Auth::User();

            $user= Auth::User()->id;

            $reservations= reservation::where('user_id', '=', $user)->latest()->take(3)->paginate(2);

            return view('user.UserHome', compact('data', 'reservations'));
        }


    }

    public function home(){

        $slider_car = slider::all();
        $below = slider::all();
        $car = featured::all();
        $reviews = reviews::all();

        return view('pages.home', compact('car', 'slider_car', 'below', 'reviews'));
    }

    public function cars(){

        $cars = cars::orderBy('id', 'DESC')->paginate(9);
        $slider_car = slider::all();
        return view('pages.cars', compact('cars', 'slider_car'));
    }

    public function review(){

        $user = Auth::user();
        $reviews = reviews::orderBy('id', 'DESC')-> paginate(5);

        return view('pages.review', compact('user', 'reviews'));
    }

    public function about(){

        $top_left = featured::find(3);
        $top_right = featured::find(2);
        $bottom_left = featured::find(4);
        $bottom_right = featured::find(5);

        $reviews = reviews::latest()->get();

        return view('pages.about', compact('top_left', 'top_right', 'bottom_left', 'bottom_right', 'reviews'));
    }

    public function contact(){

        $user= Auth::user();

        return view('pages.contact', compact('user'));
    }

    public function faq(){

        $random = rand(5,12);
        $cars = cars::find($random);

        $user = Auth::User();
        return view('pages.faq', compact('user', 'cars'));
    }

    public function car_details($id){

        $car = cars::find($id);
        $featured = featured::all();
        $pov = cars::find($id);
        $user = Auth::User();


        return view('pages.car_details', compact('car', 'user', 'pov', 'featured'));
    }


    public function book_car($id){



        $car = cars::find($id);
        $car_province = $car->prov_id;
        $districts = district::where('prov_id', '=', $car_province)->get();

        $user = Auth::User();
        return view('pages.book_car', compact('car', 'user', 'districts'));
    }

    public function make_reservation(Request $request, $id){

        $request->validate([

            'checkbox' => 'required_without_all',
        ]);

        $car = cars::find($id);
        $user = Auth::User()->id;
        $reservation = new reservation();

        $pick_date = Carbon::createFromTimestamp(strtotime($request->pick_up_date) )->format('Y-m-d');
        $return_date = Carbon::createFromTimestamp(strtotime($request->return_date) )->format('Y-m-d');


        $reservation -> user_id = $user;
        $reservation-> car_id = $car-> id;
        $reservation -> pick_up_location = $car-> district_id;
        $reservation -> pick_up_date = $pick_date;
        $reservation -> return_location = $request->get('district');
        $reservation -> return_date = $return_date;

        $fdate = $request->pick_up_date;
        $tdate = $request->return_date;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        $reservation -> days_num = $days;
        $reservation -> f_name = $request -> firstname;
        $reservation -> l_name = $request -> lastname;
        $reservation -> email = $request -> email;
        $reservation -> phone = $request -> phone;
        $reservation -> add_info = $request -> information;



        $reservation -> save();

        return to_route('checkout', [$reservation->id]);

    }

    public function checkout($id){


        $reservation = reservation::find($id);

        return view('pages.checkout', compact('reservation'));
    }


    public function search_car(Request $request){

        $keyword = $request->search;
        $slider_car = slider::all();
        $cars = cars::where('model', 'like', "%". $keyword."%")->paginate(9);

        return view('pages.search', compact('cars', 'slider_car',));
    }

    public function car_review(Request $request, $id){

        $review = new reviews();

        $review-> user_id = $id;
        $review-> review = $request -> review;
        $review -> rating = $request -> rating;

        $review-> save();

        return redirect()-> back() -> with ('message', 'Review added succesfully');

    }

    public function contact_us_form(Request $request, $id){

        $contact = new contact();

        $contact -> user_id = $id;
        $contact -> subject = $request-> subject;
        $contact -> message = $request-> message;

        $contact->save();

        //send the message to the admin

        \Mail::send('pages.mail', array(

            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ),

        function($message) use ($request){
            $message->from($request->email);
            $message->to('admin@admin.com', 'Admin')->subject($request->get('subject'));
        });

        return redirect()-> back() -> with ('message', 'We have recieved your email. We will respond as quickly as we can');
    }

    public function faq_form(Request $request, $id){

        $faq = new faq();

        $faq-> user_id = $id;
        $faq-> Question = $request -> question;
        $faq->save();

        return redirect()-> back() -> with ('message', 'Question asked succesfully');
    }

    public function newsletter(Request $request)

    {
        $newsletter = new Newsletter();
        if ( ! $newsletter-> isSubscribed($request->email) )
        {
            $newsletter->subscribePending($request->email);
            return redirect('newsletter')->with('success', 'Thanks For Subscribe');
        }
        return redirect('newsletter')->with('failure', 'Sorry! You have already subscribed ');

    }

    public function cancel_checkout($id){

        $data = reservation::find($id);

        $data-> delete();

        return to_route('cars');
    }


    public function verify(Request $request,  $id){

        $doc = new documents();

        $doc->user_id = $id;

        $nrc = $request->nrc;
        $filename = time().'.'.$nrc->getClientOriginalExtension();
        $request -> nrc->move('NRC', $filename);
        $doc -> nrc = $filename;

        $license = $request->license;
        $filename = time().'.'.$license->getClientOriginalExtension();
        $request -> license->move('LICENSE', $filename);
        $doc -> license = $filename;

        $doc->save();

        return redirect()-> back() -> with ('message', 'Documents submitted succesfully. kindly wait for verification');
    }

}
