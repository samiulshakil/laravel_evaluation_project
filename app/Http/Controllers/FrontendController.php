<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductInfo;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::with('productInfos')->get();
        return view('frontends.index', compact('products'));
    }

    public function productItem($slug){
        $product = Product::where('product_slug', $slug)->firstOrFail();
        $product_info = ProductInfo::with('product')->where('product_slug', $slug)->firstOrFail();
        return view('frontends.product_item', compact('product', 'product_info'));
    }

    public function priceList(Request $request){
        if ($request->ajax()) {
            if ($request->product_id) {

                $product = ProductInfo::findOrFail($request->product_id);  
                $product_info = ProductInfo::where('product_id',$product->product_id)->get(); 
                
                $output = '<option value="">Select Please</option>';
                if (!$product_info->isEmpty()) {
                    foreach ($product_info as $value) {
                        $output .= '<option value="' . $value->id . '">' . $value->color . '</option>';
                    }
                }

                return response()->json(['success' => 'Successfully Add', 'product' => $product, 'output' => $output]);
            }
        }
    }

    public function colorList(Request $request){
        if ($request->ajax()) {
            if ($request->product_id) {

                $product = ProductInfo::findOrFail($request->product_id);  
                $product_info = ProductInfo::where('product_id',$product->product_id)->get(); 
                
                $output = '<option value="">Select Please</option>';
                if (!$product_info->isEmpty()) {
                    foreach ($product_info as $value) {
                        $output .= '<option value="' . $value->id . '">' . $value->size . '</option>';
                    }
                }

                return response()->json(['success' => 'Successfully Add', 'product' => $product, 'output' => $output]);
            }
        }
    }
}
