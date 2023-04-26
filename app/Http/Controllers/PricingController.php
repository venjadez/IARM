<?php

namespace App\Http\Controllers;

use App\Models\Product; // Import the Product model

class PricingController extends Controller
{
    public function viewPricing()
    {
        $products = Product::all(); // Fetch all products from the products table
        // You can perform additional business logic, calculations, or data manipulation here

        return view('admin.pricing.view_pricing', ['products' => $products]);
        // Return the view with the products data to be displayed in the 'admin.pricing.view_pricing' view
    }
}
