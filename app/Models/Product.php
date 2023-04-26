<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;// database/migrations/2023_04_20_000000_create_products_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            // add more columns as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
}
