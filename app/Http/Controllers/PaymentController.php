<?php

namespace App\Http\Controllers;

use App\Models\Order; // Import the Order model

class PaymentController extends Controller
{
    public function proofOfPayment()
    {
        $ordersWithProof = Order::whereNotNull('proof_of_payment')->get(); // Fetch all orders with proof of payment from the orders table
        // You can perform additional business logic, calculations, or data manipulation here

        return view('admin.payments.proof_of_payment', ['ordersWithProof' => $ordersWithProof]);
        // Return the view with the orders with proof of payment data to be displayed in the 'admin.payments.proof_of_payment' view
    }

    public function fullyPaid()
    {
        $fullyPaidOrders = Order::where('status', 'fully_paid')->get(); // Fetch all fully paid orders from the orders table
        // You can perform additional business logic, calculations, or data manipulation here

        return view('admin.payments.fully_paid', ['fullyPaidOrders' => $fullyPaidOrders]);
        // Return the view with the fully paid orders data to be displayed in the 'admin.payments.fully_paid' view
    }
}
