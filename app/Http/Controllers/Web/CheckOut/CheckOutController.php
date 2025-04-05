<?php

namespace App\Http\Controllers\Web\CheckOut;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckOut\CheckOutRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Utilities\Constant;
use App\Utilities\VNPay;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
    //
    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $categories = Category::all();

        return view('FrontEnd.checkout.check-out', ['categories' => $categories, 'total' => $total, 'subtotal' => $subtotal, 'carts' => $carts]);
    }

    public function create(CheckOutRequest $request)
    {
        // 01. Thêm đơn hàng
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->company_name = $request->company_name;
        $order->country = $request->country;
        $order->street_address = $request->street_address;
        $order->postcode_zip = $request->postcode_zip;
        $order->town_city = $request->town_city;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->payment_type = $request->payment_type;
        $order->status = Constant::order_status_ReceiveOrders;
        $order->save();


        // dd($order);

        // 02. thêm chi tiết đơn hàng
        $carts = Cart::content();

        foreach ($carts as $cart) {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->price * $cart->qty,
            ];

            // dd($order);
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $data['order_id'];
            $orderDetail->product_id = $data['product_id'];
            $orderDetail->qty = $data['qty'];
            $orderDetail->amount = $data['amount'];
            $orderDetail->total = $data['total'];
            $orderDetail->save();
            // dd($request->all());
        }

        if ($request->payment_type == 'pay_later') {
            // 04. xóa giỏ hàng
            Cart::destroy();
            // 05. trả về thông báo

            return redirect('/checkout/result')->with('alert', 'Thanh toán thành công !');
        }
    }


    public function result()
    {
        $categories = Category::all();
        return view('FrontEnd.checkout.result', ['categories' => $categories]);
    }
}
