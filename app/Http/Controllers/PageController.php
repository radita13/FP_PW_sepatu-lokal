<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        return view('index_home');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name_product', 'LIKE', "%{$query}%")
            ->orWhere('name_localbrand', 'LIKE', "%{$query}%")
            ->orWhere('category_people', 'LIKE', "%{$query}%")
            ->orWhere('category_shoes', 'LIKE', "%{$query}%")
            ->get();

        return view('page.search_results', compact('products', 'query'));
    }


    // Localbrand area shoes
    public function localbrandJohnson()
    {
        $menProducts = Product::where('category_people', 'man')
            ->where('name_localbrand', 'Johnson Shoes')
            ->whereNotNull('image')
            ->get();

        $womenProducts = Product::where('category_people', 'women')
            ->where('name_localbrand', 'Johnson Shoes')
            ->whereNotNull('image')
            ->get();

        return view('page.localbrand_johnson', compact('menProducts', 'womenProducts'));
    }

    public function localbrandAthletica()
    {
        $menProducts = Product::where('category_people', 'man')
            ->where('name_localbrand', 'Athletica Shoes')
            ->whereNotNull('image')
            ->get();

        $womenProducts = Product::where('category_people', 'women')
            ->where('name_localbrand', 'Athletica Shoes')
            ->whereNotNull('image')
            ->get();

        return view('page.localbrand_athletica', compact('menProducts', 'womenProducts'));
    }

    public function localbrandAerostreet()
    {
        $menProducts = Product::where('category_people', 'man')
            ->where('name_localbrand', 'Aerostreet Shoes')
            ->whereNotNull('image')
            ->get();

        $womenProducts = Product::where('category_people', 'women')
            ->where('name_localbrand', 'Aerostreet Shoes')
            ->whereNotNull('image')
            ->get();

        return view('page.localbrand_aerostreet', compact('menProducts', 'womenProducts'));
    }

    public function localbrandCompass()
    {
        $menProducts = Product::where('category_people', 'man')
            ->where('name_localbrand', 'Compass Shoes')
            ->whereNotNull('image')
            ->get();

        $womenProducts = Product::where('category_people', 'women')
            ->where('name_localbrand', 'Compass Shoes')
            ->whereNotNull('image')
            ->get();

        return view('page.localbrand_compass', compact('menProducts', 'womenProducts'));
    }

    // Man area shoes
    public function man_sneakers()
    {
        $brands = ['Johnson Shoes', 'Athletica Shoes', 'Aerostreet Shoes', 'Compass Shoes'];

        $products = [];
        foreach ($brands as $brand) {
            $products[$brand] = Product::where('name_localbrand', $brand)
                ->where('category_people', 'man')
                ->where('category_shoes', 'sneakers')
                ->get();
        }

        return view('page.man_sneakers', compact('products'));
    }

    public function man_sports()
    {
        $brands = ['Johnson Shoes', 'Athletica Shoes', 'Aerostreet Shoes', 'Compass Shoes'];

        $products = [];
        foreach ($brands as $brand) {
            $products[$brand] = Product::where('name_localbrand', $brand)
                ->where('category_people', 'man')
                ->where('category_shoes', 'sports')
                ->get();
        }

        return view('page.man_sports', compact('products'));
    }

    public function man_running()
    {
        $brands = ['Johnson Shoes', 'Athletica Shoes', 'Aerostreet Shoes', 'Compass Shoes'];

        $products = [];
        foreach ($brands as $brand) {
            $products[$brand] = Product::where('name_localbrand', $brand)
                ->where('category_people', 'man')
                ->where('category_shoes', 'running')
                ->get();
        }

        return view('page.man_running', compact('products'));
    }

    // Women area shoes 
    public function women_sneakers()
    {
        $brands = ['Johnson Shoes', 'Athletica Shoes', 'Aerostreet Shoes', 'Compass Shoes'];

        $products = [];
        foreach ($brands as $brand) {
            $products[$brand] = Product::where('name_localbrand', $brand)
                ->where('category_people', 'women')
                ->where('category_shoes', 'sneakers')
                ->get();
        }

        return view('page.women_sneakers', compact('products'));
    }

    public function women_running()
    {
        $brands = ['Johnson Shoes', 'Athletica Shoes', 'Aerostreet Shoes', 'Compass Shoes'];

        $products = [];
        foreach ($brands as $brand) {
            $products[$brand] = Product::where('name_localbrand', $brand)
                ->where('category_people', 'women')
                ->where('category_shoes', 'running')
                ->get();
        }

        return view('page.women_running', compact('products'));
    }

    public function women_sports()
    {
        $brands = ['Johnson Shoes', 'Athletica Shoes', 'Aerostreet Shoes', 'Compass Shoes'];

        $products = [];
        foreach ($brands as $brand) {
            $products[$brand] = Product::where('name_localbrand', $brand)
                ->where('category_people', 'women')
                ->where('category_shoes', 'sports')
                ->get();
        }

        return view('page.women_sports', compact('products'));
    }
}
