<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactCon extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //xác thực
        $request->validate([
            'name' => 'required|string|max:50',
            'company' => 'required|string|max:255',
            'message' => 'required|string',
            'emailInput' => 'required|email',
            'phone' => 'required|regex:/^\d{3}-\d{3}-\d{3}$/',
        ]);

        // Lấy dữ liệu từ form
        $name = $request->input('name');
        $email = $request->input('emailInput');
        $phone = $request->input('phone');
        $message = $request->input('message');
        $company = $request->input('company');
        //gửi email đến người dùng
        Mail::to($email)->send(new SendEmail($name, $email, $phone, $company));
        //chuyển trang thankyou
        return view('thankyou',
         ['name' => $name,
          'email' => $email, 
          'phone' => $phone, 
          '$message' => $message,
           'company' =>  $company]);
    }

    /**
     * Display the specified resource.
     */
}