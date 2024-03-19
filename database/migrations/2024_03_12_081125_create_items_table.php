<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            // $table->uuid('id')->primary();
            $table->string('name');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('price'); 
            $table->integer('rating')->default(5);//erase default
            $table->integer('amount');
            $table->string('image')->nullable(true);
            $table->integer('discount')->default(0)->nullable(false); 
            $table->longText('description');
            $table->string('status');
            $table->string('category');
            //image 
            $table->timestamps();
        });
        //  // Step 1: Alter the column to allow NULL values temporarily
        //  DB::statement('ALTER TABLE items MODIFY id CHAR(36)');

        //  // Step 2: Update existing rows with UUID values
        //  DB::statement('UPDATE items SET id = UUID();');
 
        //  // Step 3: Alter the column to make it NOT NULL and set the default value to UUID()
        //  DB::statement('ALTER TABLE items MODIFY id CHAR(36) NOT NULL DEFAULT (UUID())');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
