<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function products() {
        $products=Product::latest()->paginate(5);
        return view('product',compact('products'));
    }

    public function addproducts(Request $request) {
        $request->validate(
            ['name' => 'required|unique:products',
            'price'=>'required',
       ],
       ['name.required'=>"Name is required",
         'name.unique' => "Name allready exixts",
         'price.required'=>"Price is required",
       ]
        );

       $product = new Product();
       $product->name=$request->name;
       $product->price=$request->price;
       $product->save();
       return response()->json([
        'status' => 'success',
       ]);
    }

    public function updateproduct(Request $request) {
        $request->validate(
            ['up_name' => 'required|unique:products,name,'.$request->up_id,
            'up_price'=>'required',
       ],
       ['up_name.required'=>"Name is required",
         'up_name.unique' => "Name allready exixts",
         'up_price.required'=>"Price is required",
       ]
        );
      
    //   Product::where('id',$request->up_id)->update([
    //     'name'=>$request ->up_name,
    //     'price'=>$request ->up_price,
    //   ]);
     $id=$request->up_id;
     $data=Product::find($id);
     $data->name=$request->up_name;
     $data->price=$request->up_price;
     $data->save();
   
    
       return response()->json([
        'status' => 'success',
       ]);
    }


    public function deleteproduct( Request $request ){
       $id=$request->product_id;
       $data=Product::find($id);
       $data->delete();
       return response()->json([
        'status' => 'success',
       ]);

    }


}
