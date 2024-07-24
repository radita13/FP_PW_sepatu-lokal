<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index_home-profile');
    }

    public function search_login(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name_product', 'LIKE', "%{$query}%")
            ->orWhere('name_localbrand', 'LIKE', "%{$query}%")
            ->orWhere('category_people', 'LIKE', "%{$query}%")
            ->orWhere('category_shoes', 'LIKE', "%{$query}%")
            ->get();

        return view('dashboard.search_results-login', compact('products', 'query'));
    }

    //Man area Login
    public function man_sneakers_login()
    {
        $brands = ['Johnson Shoes', 'Athletica Shoes', 'Aerostreet Shoes', 'Compass Shoes'];

        $products = [];
        foreach ($brands as $brand) {
            $products[$brand] = Product::where('name_localbrand', $brand)
                ->where('category_people', 'man')
                ->where('category_shoes', 'sneakers')
                ->get();
        }

        return view('dashboard.man_sneakers-profile', compact('products'));
    }

    public function man_sports_login()
    {
        $brands = ['Johnson Shoes', 'Athletica Shoes', 'Aerostreet Shoes', 'Compass Shoes'];

        $products = [];
        foreach ($brands as $brand) {
            $products[$brand] = Product::where('name_localbrand', $brand)
                ->where('category_people', 'man')
                ->where('category_shoes', 'sports')
                ->get();
        }

        return view('dashboard.man_sports-profile', compact('products'));
    }

    public function man_running_login()
    {
        $brands = ['Johnson Shoes', 'Athletica Shoes', 'Aerostreet Shoes', 'Compass Shoes'];

        $products = [];
        foreach ($brands as $brand) {
            $products[$brand] = Product::where('name_localbrand', $brand)
                ->where('category_people', 'man')
                ->where('category_shoes', 'running')
                ->get();
        }

        return view('dashboard.man_running-profile', compact('products'));
    }

    // Women area login
    public function women_sneakers_login()
    {
        $brands = ['Johnson Shoes', 'Athletica Shoes', 'Aerostreet Shoes', 'Compass Shoes'];

        $products = [];
        foreach ($brands as $brand) {
            $products[$brand] = Product::where('name_localbrand', $brand)
                ->where('category_people', 'women')
                ->where('category_shoes', 'sneakers')
                ->get();
        }

        return view('dashboard.women_sneakers-profile', compact('products'));
    }

    public function women_sports_login()
    {
        $brands = ['Johnson Shoes', 'Athletica Shoes', 'Aerostreet Shoes', 'Compass Shoes'];

        $products = [];
        foreach ($brands as $brand) {
            $products[$brand] = Product::where('name_localbrand', $brand)
                ->where('category_people', 'women')
                ->where('category_shoes', 'sports')
                ->get();
        }

        return view('dashboard.women_sports-profile', compact('products'));
    }

    public function women_running_login()
    {
        $brands = ['Johnson Shoes', 'Athletica Shoes', 'Aerostreet Shoes', 'Compass Shoes'];

        $products = [];
        foreach ($brands as $brand) {
            $products[$brand] = Product::where('name_localbrand', $brand)
                ->where('category_people', 'women')
                ->where('category_shoes', 'running')
                ->get();
        }

        return view('dashboard.women_running-profile', compact('products'));
    }

    // Localbrand area login
    public function localbrand_johnson_login()
    {
        $menProducts = Product::where('category_people', 'man')
            ->where('name_localbrand', 'Johnson Shoes')
            ->whereNotNull('image')
            ->get();

        $womenProducts = Product::where('category_people', 'women')
            ->where('name_localbrand', 'Johnson Shoes')
            ->whereNotNull('image')
            ->get();

        return view('dashboard.localbrand_johnson-profile', compact('menProducts', 'womenProducts'));
    }

    public function localbrand_athletica_login()
    {
        $menProducts = Product::where('category_people', 'man')
            ->where('name_localbrand', 'Athletica Shoes')
            ->whereNotNull('image')
            ->get();

        $womenProducts = Product::where('category_people', 'women')
            ->where('name_localbrand', 'Athletica Shoes')
            ->whereNotNull('image')
            ->get();

        return view('dashboard.localbrand_athletica-profile', compact('menProducts', 'womenProducts'));
    }

    public function localbrand_aerostreet_login()
    {
        $menProducts = Product::where('category_people', 'man')
            ->where('name_localbrand', 'Aerostreet Shoes')
            ->whereNotNull('image')
            ->get();

        $womenProducts = Product::where('category_people', 'women')
            ->where('name_localbrand', 'Aerostreet Shoes')
            ->whereNotNull('image')
            ->get();

        return view('dashboard.localbrand_aerostreet-profile', compact('menProducts', 'womenProducts'));
    }

    public function localbrand_compass_login()
    {
        $menProducts = Product::where('category_people', 'man')
            ->where('name_localbrand', 'Compass Shoes')
            ->whereNotNull('image')
            ->get();

        $womenProducts = Product::where('category_people', 'women')
            ->where('name_localbrand', 'Compass Shoes')
            ->whereNotNull('image')
            ->get();

        return view('dashboard.localbrand_compass-profile', compact('menProducts', 'womenProducts'));
    }
}
