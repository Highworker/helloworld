<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function list()
    {
        return view('products.list', [
            'products' => Product::all(),
        ]);
    }

    public function create(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->save();

        return redirect()->route('products.list');
    }

    public function delete($id)
    {
        Product::destroy($id);

        return redirect()->route('products.list');
    }

    public function clear()
    {
        DB::table('products')->delete();

        return redirect()->route('products.list');
    }

    public function edit($id, Request $request)
    {
        if ($request->getMethod() === 'POST') {
            $product = Product::find($id);
            $product->name = $request->name;
            $product->save();

            return redirect()->route('products.list');
        }

        return view('products.edit', [
            'product' => Product::find($id),
        ]);
    }

    public function customSeed()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'name' => Str::random(10).'-auto',
            ]);
        }
        return redirect()->route('products.list');
    }
}
