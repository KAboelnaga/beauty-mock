<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Product;
use App\Models\Contact;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
        return view('home');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function salon($id) {
        return view('salon', compact('id'));
    }

    public function offer($id) {
        return view('offer', compact('id'));
    }

    public function offers()
{
    $offers = Offer::all();
    return view('offers', compact('offers'));
}

public function products()
{
    $products = Product::all();
    return view('products', compact('products'));
}

    public function product($id) {
        return view('product', compact('id'));
    }

    public function vendors() {
        return view('vendors');
    }

    public function faq() {
        return view('faq');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function terms() {
        return view('terms');
    }

    public function privacy() {
        return view('privacy');
    }
public function submitContact(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Contact::create($request->only('name', 'email', 'message'));

    return back()->with('success', 'تم إرسال رسالتك وتخزينها بنجاح!');
}
}
