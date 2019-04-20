<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Auth;

class ProductController extends Controller
{
    public function postNewProduct(Request $request){
        $this->validate($request,[
           'product_name'=>'required',
            'price'=>'required',
            'category_id'=>'required',
            'image'=>'required|image|mimes:jpg,png,gif,jpeg'
        ]);
        $img_name=$request['product_name'].'.'.$request->file('image')->getClientOriginalExtension();
        $img_file=$request->file('image');

        //model;
        $pd=new Product();
        $pd->product_name=$request['product_name'];
        $pd->price=$request['price'];
        $pd->category_id=$request['category_id'];
        $pd->image=$img_name;
        $pd->user_id=Auth::user()->id;
        $pd->Save();

        Storage::disk('product')->put($img_name, file::get($img_file));
        return redirect()->back();


    }
    public function getDeleteProduct(Request $request){
        $id=$request['id'];
        $pd=Product::whereId($id)->FirstOrFail();
        Storage::disk('product')->delete($pd->image);
        $result=$pd->delete();
        return redirect()->back()->with('info','The selected category have been delete');
    }
    public function postEditProduct(Request $request){
        $id=$request['id'];
        $pd=Product::whereId($id)->firstOrFail();
        $pd->product_name=$request['product_name'];
        $pd->price=$request['price'];
        $pd->category_id=$request['category_id'];
        $pd->update();
        return redirect()->back()->with('info','The selected category have been success');
    }
    public function postUpdateProduct(Request $request){
        $image=$request->file('image');//use image
        $id=$request['id'];//use hidden id
        $pd=Product::whereId($id)->firstOrFail();
        if(!empty($image)){
            Storage::disk('product')->delete($pd->image);
            $img_name=$request['product_name'].'.'.$request->file('image')->getClientOriginalExtension();
            $pd->image=$img_name;//$img_name->product table and file ka nay extension ka nay use tar
            Storage::disk('product')->put($img_name, File::get($image));
        }
        $pd->product_name=$request['product_name'];
        $pd->price=$request['price'];
        $pd->category_id=$request['category_id'];
        $pd->update();
        return redirect()->route('product');
    }
    public function getProductImage($img_name){
        $file=Storage::disk('product')->get($img_name);
        return response($file,200);
    }
    public function getProduct(){
        $pds=Product::Orderby('id','desc')->get();
        $cats=Category::all();
        return view('product')->with(['cats'=>$cats,'pds'=>$pds]);
    }
    public function getEditProduct($id){
        $cats=Category::all();
        $pd=Product::whereId($id)->firstOrFail();
        return view('edit-product')->with(['pd'=>$pd,'cats'=>$cats]);
    }
    public function postUpdateCategory(Request $request){
        $id=$request['id'];
        $cat_name=$request['cat_name'];
        $cat=Category::whereId($id)->firstOrFail();
        $cat->cat_name=$cat_name;
        $cat->update();
        return redirect()->back()->with('alert','The selected category have been success');
    }
    public function postNewCategory(Request $request){
        $this->validate($request,[
           'cat_name'=>'required|unique:categories'
        ]);
        $cat=new Category();
        $cat->cat_name=$request['cat_name'];
        $cat->Save();
        return redirect()->back()->with('alert','This category has been success');
    }
    public function getRemoveCategory($id){
        $cat=Category::where('id',$id)->firstOrFail();
        $cat->delete();
        return redirect()->back()->with('info','This selected category have benn remove');
    }
    public function getCategory(){
        //$cats=Category::all();
        //$cats=Category::OrderBy('id','desc')->get();
        $cats=Category::OrderBy('id','desc')->paginate('5');
        return view('category')->with(['cats'=>$cats]);
    }
}
