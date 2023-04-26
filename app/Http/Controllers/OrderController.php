<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function totalSales()
    {
        $totalSales = Order::sum('total_amount'); // Calculate the total sales by summing the 'total_amount' column in the orders table
        // You can perform additional business logic, calculations, or data manipulation here

        return view('admin.orders.total_sales', ['totalSales' => $totalSales]);
        // Return the view with the total sales data to be displayed in the 'admin.orders.total_sales' view
    }

    public function pendingOrders()
    {
        $pendingOrders = Order::where('status', 'pending')->get(); // Fetch all pending orders from the orders table
        // You can perform additional business logic, calculations, or data manipulation here

        return view('admin.orders.pending_orders', ['pendingOrders' => $pendingOrders]);
        // Return the view with the pending orders data to be displayed in the 'admin.orders.pending_orders' view
    }

    public function fullyPaidOrders()
    {
        $fullyPaidOrders = Order::where('status', 'fully_paid')->get(); // Fetch all fully paid orders from the orders table
        // You can perform additional business logic, calculations, or data manipulation here

        return view('admin.orders.fully_paid_orders', ['fullyPaidOrders' => $fullyPaidOrders]);
        // Return the view with the fully paid orders data to be displayed in the 'admin.orders.fully_paid_orders' view
    }
}