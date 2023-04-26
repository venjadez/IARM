<!-- resources/views/admin/inventory/inventory.blade.php -->

@extends('layouts.inventory') <!-- Assuming you have a common layout for the admin views -->

@section('content')
    <h1>Inventory</h1>
    <p>Total products in stock: {{ $totalProducts }}</p> <!-- Display total products count from the controller -->
    <p>Total products sold: {{ $totalSold }}</p> <!-- Display total products sold count from the controller -->
    <p>Pending orders: {{ $pendingOrders }}</p> <!-- Display pending orders count from the controller -->
    <p>Total sales: {{ $totalSales }}</p> <!-- Display total sales amount from the controller -->
    <!-- You can further customize the HTML and CSS as per your design requirements -->
@endsection
