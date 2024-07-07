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
            // 03. gửi email
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order, $total, $subtotal);
            // 04. xóa giỏ hàng
            Cart::destroy();
            // 05. trả về thông báo

            return redirect('/checkout/result')->with('alert', 'Thanh toán thành công ! Vui lòng kiểm tra email');
        }

        if ($request->payment_type == 'online_payment') {
            //01. lấy url thanh toán VNPay

            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id, //ma id don hang
                'vnp_OrderInfo' => 'Mô tả đơn hàng ở đây',
                'vnp_Amount' => Cart::total(0, ',', '.') * 100000,

            ]);
            // dd($data_url);
            //chuyuển  hướng tới địa chỉ trên 
            return redirect()->to($data_url);
        }
    }

    public function vnPayCheck(Request $request)
    {
        //lấy data từ url do vnpay gửi qua $vnp_returnurl
        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); //mã phản hồi thanh toán
        $vnp_TxnRef = $request->get('vnp_TxnRef'); //mã số order_id
        $vnp_Amount = $request->get('vnp_Amount'); //số tiền thanh toán

        //kiểm tra data, xem kết quả giao dịch trả về từ vn pay hợp lệ hay không  
        if ($vnp_ResponseCode != null) {
            //nếu thành công
            if ($vnp_ResponseCode == 00) {
                //gửi email
                $order = Order::with('orderDetails')->find($vnp_TxnRef);
                $total = Cart::total(0, '.', '');
                $subtotal = Cart::subtotal(0, '.', '');
                $this->sendEmail($order, $total, $subtotal);
                Cart::destroy();
                //xóa giỏ hàng
                // dd($order);
                return redirect('checkout/result')->with('alert', 'Thanh toán thành công ! Vui lòng kiểm tra thông tin Email.');
            } else {
                //xóa đơn hàng đã thêm vào 
                $orderDel = Order::find($vnp_TxnRef);
                $orderDel->delete();
                // thông báo lỗi 

                return redirect('checkout/result')->with('alert', 'Thanh toán thất bại ! Vui lòng kiểm tra lại');
            }
        }
    }

    // public function vnPayment(array $data)
    // {
    //     // error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    //     date_default_timezone_set('Asia/Ho_Chi_Minh');

    //     $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    //     $vnp_Returnurl = "https://localhost/vnpay_php/vnpay_return.php";
    //     $vnp_TmnCode = "54SDFCKM"; //Mã website tại VNPAY 
    //     $vnp_HashSecret = "EYCZIVPUZWYOZAXMOQOFQJUJUVWLVBVS"; //Chuỗi bí mật

    //     $vnp_TxnRef = $data['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
    //     $vnp_OrderInfo = $data['order_desc'];
    //     // $vnp_OrderType = $data['order_type'];
    //     $vnp_Amount = $data['amount'] * 100;
    //     $vnp_Locale = 'vn';
    //     // $vnp_BankCode = $_POST['bank_code'];
    //     $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
    //     $inputData = array(
    //         "vnp_Version" => "2.1.0",
    //         "vnp_TmnCode" => $vnp_TmnCode,
    //         "vnp_Amount" => $vnp_Amount,
    //         "vnp_Command" => "pay",
    //         "vnp_CreateDate" => date('YmdHis'),
    //         "vnp_CurrCode" => "VND",
    //         "vnp_IpAddr" => $vnp_IpAddr,
    //         "vnp_Locale" => $vnp_Locale,
    //         "vnp_OrderInfo" => $vnp_OrderInfo,
    //         // "vnp_OrderType" => $vnp_OrderType,
    //         "vnp_ReturnUrl" => $vnp_Returnurl,
    //         "vnp_TxnRef" => $vnp_TxnRef,
    //     );

    //     if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    //         $inputData['vnp_BankCode'] = $vnp_BankCode;
    //     }
    //     if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
    //         $inputData['vnp_Bill_State'] = $vnp_Bill_State;
    //     }

    //     //var_dump($inputData);
    //     ksort($inputData);
    //     $query = "";
    //     $i = 0;
    //     $hashdata = "";
    //     foreach ($inputData as $key => $value) {
    //         if ($i == 1) {
    //             $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    //         } else {
    //             $hashdata .= urlencode($key) . "=" . urlencode($value);
    //             $i = 1;
    //         }
    //         $query .= urlencode($key) . "=" . urlencode($value) . '&';
    //     }

    //     $vnp_Url = $vnp_Url . "?" . $query;
    //     if (isset($vnp_HashSecret)) {
    //         $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
    //         $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
    //     }
    //     $returnData = array(
    //         'code' => '00', 'message' => 'success', 'data' => $vnp_Url
    //     );
    //     if (isset($_POST['redirect'])) {
    //         // header('Location: ' . $vnp_Url);
    //         // die();
    //         return $returnData['data']; //chỉ lấy ra $vnp_Url thôi.
    //     } else {
    //         echo json_encode($returnData);
    //     }
    //     // vui lòng tham khảo thêm tại code demo

    // }


    private function sendEmail($order, $total, $subtotal)
    {
        $email_to = $order->email;

        Mail::send('FrontEnd.checkout.email', compact('order', 'total', 'subtotal'), function ($message) use ($email_to) {
            $message->from('duogbachdev@gmail.com', 'DuogBachMobile Shop');
            $message->to($email_to, $email_to);
            $message->subject('Order notification');
        });
    }

    public function result()
    {
        $categories = Category::all();
        return view('FrontEnd.checkout.result', ['categories' => $categories]);
    }
}
