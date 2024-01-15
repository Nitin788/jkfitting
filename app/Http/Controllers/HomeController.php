<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\category;
use App\Models\subcategory;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::all();
        $subcategories = subcategory::all();
        $blog = blog::all();
        return view('frontend.index.home', compact('categories', 'subcategories', 'blog'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.index.contactt');
    }
    public function about()
    {
        return view('frontend.index.about');
    }
    public function subcat()
    {
        $subcategories = subcategory::all();
        return view('frontend.index.sub-home', compact('subcategories'));
    }
    public function showSuccessPage()
    {
        return view('payment.success');
    }

    public function payment(Request $request)
    {
        $data = [
            'items' => [
                [
                    'name' => 'Product 1',
                    'price' => 10,
                    'qty' => 1,
                ],
            ],
            'invoice_id' => uniqid(),
            'invoice_description' => 'Description for the invoice',
            'return_url' => route('payment.success'),
            'cancel_url' => route('payment.failure'),
            'total' => 10,
        ];
        // Set your payment details in $data

        $response = $this->provider->setExpressCheckout($data);

        return redirect($response['paypal_link']);
    }
   
    public function executePayment()
    {
        $token = request('token');
        $payerId = request('PayerID');

        $response = $this->provider->getExpressCheckoutDetails($token);

        $data = [];
        // Set your payment details in $data

        $response = $this->provider->doExpressCheckoutPayment($data, $token, $payerId);

        if ($response['ACK'] === 'Success') {
            // Payment successful, perform your actions
            return view('payment.success');
        } else {
            // Payment failed, handle accordingly
            return view('payment.failure');
        }
    }
}
