<!-- resources/views/layouts/admin.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Add your CSS and JS files here -->
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <!-- Add your header content here -->
    </header>
    <h1>Inventory</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <!-- add more columns as needed -->
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->quantity }}</td>
        <td>{{ $product->price }}</td>
        <!-- display more columns as needed -->
    </tr>
    @endforeach
</table>
    <nav>
        <ul>
            <li><a href="{{ route('inventory.index') }}">Inventory</a></li>
            <li><a href="{{ route('orders.index') }}">Orders</a></li>
            <li><a href="{{ route('payments.index') }}">Payments</a></li>
            <li><a href="{{ route('pricing.index') }}">Pricing</a></li>
        </ul>
        <!-- Add your navigation menu here -->
    </nav>

    <main>
        <div class="container">
            @yield('content') <!-- Render the content section of child views -->
        </div>
    </main>

    <footer>
        <p>Admin Dashboard &copy; 2023. All rights reserved.</p>
        <!-- Add your footer content here -->
    </footer>
</body>
</html>
