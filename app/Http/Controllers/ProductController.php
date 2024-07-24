<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function Laravel\Prompts\text;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        if (!empty($search)) {
            $dataProducts = Product::where('products.name_product', 'like', '%' . $search . '%')
                ->orWhere('products.name_localbrand', 'like', '%' . $search . '%')
                ->paginate(10)->onEachSide(2)->fragment('productshoes');
        } else {
            $dataProducts = Product::paginate(10)->onEachSide(2)->fragment('productshoes');
        }

        return view('admin.admin_dashboard.product', [
            'products' => Product::where('username', auth()->user()->username)->get(),
            'products' => $dataProducts,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin_dashboard.product_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name_product' => 'required|string|max:255',
            'name_localbrand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'image' => 'required|image|file|mimes:jpeg,png,jpg,gif|max:2048',
            'category_people' => 'required|in:man,women',
            'category_shoes' => 'required|in:sneakers,sports,running',
            'link_shoes' => 'required',
        ]);

        $validateData['admin'] = auth()->user()->admin;
        $validateData['username'] = auth()->user()->username;
        $validateData['slug'] = Str::slug($request->name_product, '-');

        $ImagePath = $request->file('image')->store('product-image');
        $validateData['image'] = basename($ImagePath);

        $product = new Product($validateData);
        $product->save();

        ProductDetails::create([
            'product_id' => $product->id,
            'specification' => 'Default Specification',
            'description' => 'Default Description',
            'image_1_header' => 'default_image_1_header.png',
            'image_2_header' => 'default_image_2_header.png',
            'image_3_header' => 'default_image_3_header.png',
            'image_1' => 'default_image_1.png',
            'image_2' => 'default_image_2.png',
            'image_3' => 'default_image_3.png',
        ]);

        return redirect('/dashboard/product')->with('success', 'Product created successfully!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.admin_dashboard.product_show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('admin.admin_dashboard.product_edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        $rules = [
            'name_product' => 'required|string|max:255',
            'name_localbrand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_people' => 'required|in:man,women',
            'category_shoes' => 'required|in:sneakers,sports,running',
            'link_shoes' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['admin'] = auth()->user()->admin;
        $validatedData['username'] = auth()->user()->username;
        $validatedData['slug'] = Str::slug($request->name_product, '-');

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::delete('product-image/' . $product->image);
            }

            $imagePath = $request->file('image')->store('product-image');
            $validatedData['image'] = basename($imagePath);
        } elseif ($request->input('delete_image')) {
            if ($product->image) {
                Storage::delete('product-image/' . $product->image);
            }
            $validatedData['image'] = null;
        } else {
            $validatedData['image'] = $product->image;
        }

        $product->update($validatedData);

        return redirect('/dashboard/product')->with('success', 'Product updated successfully!!!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $product, $slug)
    {
        $product = Product::where('slug', $slug)->first();

        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Product not found!');
        }

        if ($product->image) {
            Storage::delete('product-image/' . $product->image);
        }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
}
