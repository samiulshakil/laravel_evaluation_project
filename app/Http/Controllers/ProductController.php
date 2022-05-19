<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductInfo;
use App\Http\Requests\ProductStoreFormRequest;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $product_infos = ProductInfo::with('product')->get();
        return view('products.index', compact('product_infos'));
    }
    
    public function create(){
        return view('products.create');
    }

    public function store(ProductStoreFormRequest $request){
        $product = Product::create([
            'product_name' => $request->product_name,
            'product_slug' => Str::slug($request->product_name),
            'status' => $request->status,
        ]);

        ProductInfo::create([
            'product_id' => $product->id,
            'product_slug' => $product->product_slug,
            'quantity' => $request->quantity,
            'gender' => $request->gender,
            'color' => $request->color,
            'size' => $request->size,
            'price' => $request->price,
        ]);

        return redirect()->route('products.index');

    }

    public function createVariant($id){
        $product = Product::findOrFail($id);
        return view('products.variant', compact('product'));
    }

    public function storeVariant(Request $request){
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        $product_id = $request->product_id;
        $product = Product::find($product_id);
        ProductInfo::create([
            'product_id' => $product_id,
            'product_slug' => $product->product_slug,
            'quantity' => $request->quantity,
            'gender' => $request->gender,
            'color' => $request->color,
            'size' => $request->size,
            'price' => $request->price,
        ]);

        return redirect()->route('products.index');

    }

    public function show($id){
       $product_info = ProductInfo::findOrFail($id);
        return view('products.show', compact('product_info'));
    }

    public function edit($id){
        $product_info = ProductInfo::with('product')->where('id', $id)->first();
        return view('products.edit', compact('product_info'));
    }

    public function update(ProductStoreFormRequest $request){
        $id = $request->product_info_id;
        $product_info = ProductInfo::findOrFail($id);
        $product = Product::findOrFail($product_info->product->id);

        $product->update([
            'product_name' => $request->product_name,
            'product_slug' => Str::slug($request->product_name),
            'status' => $request->status,
        ]);

        $product_info->update([
            'product_id' => $product->id,
            'product_slug' => $product->product_slug,
            'quantity' => $request->quantity,
            'gender' => $request->gender,
            'color' => $request->color,
            'size' => $request->size,
            'price' => $request->price,
        ]);

        return redirect()->route('products.index');

    }

    public function destroy($id){
        $product_info = ProductInfo::findOrFail($id);
        $product = Product::findOrFail($product_info->product->id);
        $count = ProductInfo::where('product_id', $product_info->product->id)->count();

        if ($count == 1) {
            $product_info->delete();
            $product->delete();
        }else{
            $product_info->delete();
        }

        return redirect()->route('products.index');
    }
}
