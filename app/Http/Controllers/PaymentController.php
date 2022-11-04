<?php

namespace App\Http\Controllers;

use Throwable;
use Omnipay\Omnipay;
use App\Models\payment;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct(){

        $this->gateway = Omnipay:: create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request){

        try{

            $response = $this->gateway->purchase(array(

                'amount' => $request -> amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();

            if($response-> isRedirect()){

                $response->redirect();
            }

            else{

                return $response->getMessage();
            }
        }
        catch(Throwable $th){

            return $th->getMessage();

        }
    }

    public function error(){

        $user = Auth::User()->id;
        $data = Auth::User();
        $reservations= reservation::where('user_id', '=', $user)->latest()->take(3)->paginate(2);

        return view('user.UserHome', compact('data', 'reservations'));

    }

    public function success(Request $request)
    {

        $user = Auth::User()->id;
        $data = Auth::User();
        $reservations= reservation::where('user_id', '=', $user)->latest()->take(3)->paginate(2);

        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(

                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));

            $response = $transaction->send();

            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                // Insert transaction data into the database
                $isPaymentExist = payment::where('payment_id', $arr_body['id'])->first();

                if(!$isPaymentExist)
                {
                    $payment = new Payment;

                    $payment-> user_id = $user;
                    $payment->payment_id = $arr_body['id'];
                    $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                    $payment->currency = env('PAYPAL_CURRENCY');
                    $payment->save();
                }

                return view('user.UserHome', compact('data', 'reservations'), ['message'=> ' Payment succesful print ticket below and get driving']);
            } else {
                return $response->getMessage();
            }
        }
        else {
            return 'Transaction is declined';
        }


    }
}
