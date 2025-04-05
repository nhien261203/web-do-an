<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display the homepage with products organized by categories
     */
    public function index()
    {
        $categories = Category::all();

        $menClothingCategories = Category::whereIn('name', ['Quần nam', 'Áo nam', 'Phụ kiện nam'])
            ->pluck('id')
            ->toArray();

        $womenClothingCategories = Category::whereIn('name', ['Quần nữ', 'Áo nữ', 'Phụ kiện nữ'])
            ->pluck('id')
            ->toArray();

        $phoneProducts = Product::whereIn('product_category_id', $menClothingCategories)
            ->with('productImage')
            ->get();

        $laptopProducts = Product::whereIn('product_category_id', $womenClothingCategories)
            ->with('productImage')
            ->get();

        $sliders = Slider::all();

        $categoryTagMapping = [];
        foreach ($categories as $category) {
            $categoryTagMapping[$category->id] = str_replace(' ', '-', $category->name);
        }

        return view('FrontEnd.index', [
            'phoneProducts' => $phoneProducts,
            'laptopProducts' => $laptopProducts,
            'categories' => $categories,
            'sliders' => $sliders,
            'categoryTagMapping' => $categoryTagMapping
        ]);
    }

    /**
     * Display the FAQ page
     */
    public function faq()
    {
        $categories = Category::all();
        return view('FrontEnd/faq/faq', ['categories' => $categories]);
    }

    /**
     * Display the contact page
     */
    public function contact()
    {
        $categories = Category::all();
        return view('FrontEnd/contact/contact', ['categories' => $categories]);
    }
}
