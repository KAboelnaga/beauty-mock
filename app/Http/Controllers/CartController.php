<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Offer;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // ✅ عرض السلة
    public function index()
    {
        $cartItems = Cart::with('offer')->where('user_id', Auth::id())->get();
        return view('cart.index', compact('cartItems'));
    }

    // ✅ إضافة للسلة
    public function add(Request $request, $offerId)
    {
        $offer = Offer::findOrFail($offerId);

        $cartItem = Cart::where('user_id', Auth::id())
                        ->where('offer_id', $offerId)
                        ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'offer_id' => $offerId,
                'quantity' => 1,
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'تمت إضافة العرض إلى السلة.');
    }

    // ✅ إزالة عنصر من السلة
    public function remove($id)
    {
        $cartItem = Cart::where('id', $id)
                        ->where('user_id', Auth::id())
                        ->firstOrFail();

        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'تمت إزالة العنصر من السلة.');
    }

    // ✅ صفحة الدفع
    public function checkout()
    {
        $cartItems = Cart::with('offer')->where('user_id', Auth::id())->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'السلة فارغة.');
        }

        $total = $cartItems->sum(function ($item) {
            return $item->offer->price * $item->quantity;
        });

        return view('cart.checkout', compact('cartItems', 'total'));
    }

    // ✅ تنفيذ الدفع وحذف السلة
    public function processCheckout(Request $request)
    {
        // TODO: ممكن تسجل الطلبات هنا

        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('home')->with('success', 'تم إتمام الطلب بنجاح. شكراً لك!');
    }

    // ✅ تنفيذ شراء مباشر من العرض
    public function checkoutDirect($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $offer = Offer::findOrFail($id);
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'يجب تسجيل الدخول أولاً.');
        }

        // TODO: هنا ممكن تسجل الطلب مباشرة
        return redirect()->route('cart.index')->with('success', 'تم تنفيذ الشراء المباشر لـ: ' . $offer->title);
    }
}
