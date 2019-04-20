<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use PHPMailer\PHPMailer\PHPMailer;//for PHPMailer
use PHPMailer\PHPMailer\Exception;//for PHPMailer

class HomeController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/
   public function getMiPhone(){
       return view('MiPhone');
   }
   public function getMi9(){
       return view('mi9');
   }
    public function getMi9Global(){
        return view('Mi9Global');
    }
    public function getPcBanner1920(){
        return view('PcBanner1920');
    }
    public function getXiaomi9(){
        return view('xiaomi9');
    }
    public function getMix3BannerPc(){
        return view('Mix3BannerPc');
    }
   public function getCancelCart(){
       Session::forget('cart');
       return redirect()->back();
   }
   public function postCheckout(Request $request){
    $cart=Session::get('cart');
    $order=new Order();
    $order->name=$request['name'];
    $order->email=$request['email'];
    $order->address=$request['address'];
    $order->phone=$request['phone'];
    $order->cart=serialize($cart);
    $order->save();
    Session::forget('cart');
    return redirect()->back();
   }

   public function increaseCart($id){
       $oldCart=Session::get('cart');
       $cart=new Cart($oldCart);
       $cart->increase($id);
       Session::put('cart',$cart);
       return redirect()->back();
   }
    public function decreaseCart($id){
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $cart->decrease($id);
        if(count($cart->items) <=0){
            Session::forget('cart');
        }else{
            Session::put('cart',$cart);
        }
        return redirect()->back();
    }
   public function getAddCart($id){
       $pd=Product::whereId($id)->firstOrFail();
       $oldCart=Session::has('cart') ? Session::get('cart'):null;
       $cart=new Cart($oldCart);
       $cart->addCart($pd->id,$pd);
       Session::put('cart', $cart);
       //dd(Session::get('cart'));
       return redirect()->back();

   }
   public function getCart(){
       if(Session::has('cart')){
           $cart=Session::get('cart');
           return view('cart')->with(['cart'=>$cart->items, 'totallyAmount'=>$cart->totallyAmount]);
       }else{
           return view('cart');
       }
   }
   public function getSearch(Request $request){
       $q=$request['q'];
       $cats=Category::all();
       $pds=Product::OrderBy('id','desc')->where('product_name',"LIKE","%$q%")->paginate("8");
       return view('welcome')->with(['pds'=>$pds,'cats'=>$cats]);
   }
   public function getWelcome(){
       $cats=Category::all();
       $pds=Product::OrderBy('id','desc')->paginate("8");
       return view('welcome')->with(['pds'=>$pds,'cats'=>$cats]);
   }
   public function getProductCategory($id){
       $cats=Category::all();
       $pds=Product::OrderBy('id','desc')->where('category_id',$id)->paginate("8");
       return view('welcome')->with(['pds'=>$pds,'cats'=>$cats]);
   }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function getProductImage($img_name){
        $file=Storage::disk('product')->get($img_name);
        return response($file, 200);
    }
    public function postMessage(Request $request){
        $this->validate($request,[
           'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required'
        ]);
        $email=$request['email'];
        $phone=$request['phone'];
        $message=$request['message'];

        $mail=new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'sithu237010@gmail.com';                 // SMTP username
            $mail->Password = 'edccjrapcawosczv';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom($email, $email);
            $mail->addAddress('sithu237010@gmail.com', 'Si Thu Aung');     // Add a recipient

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'User Contacted My Team';
            $mail->Body    = $message."<br>".$phone;
            $mail->send();
            return redirect()->back()->with('info','Message has been successful');
        } catch (Exception $e) {
            return redirect()->back()->with('err','Has not been successful message');

        }
    }
}
