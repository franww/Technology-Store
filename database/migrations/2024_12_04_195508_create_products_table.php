<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // ID único para cada produto
            $table->string('name'); // Nome do produto
            $table->text('description')->nullable(); // Descrição do produto
            $table->decimal('price', 10, 2); // Preço do produto (ex: 999.99)
            $table->integer('stock')->default(0); // Quantidade em estoque
            $table->string('image_url')->nullable(); // URL da imagem do produto
            $table->timestamps(); // Campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
