<<<<<<< HEAD:database/migrations/2022_02_15_154902_create_alats_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('nama_alat');
            $table->text('deskripsi')->nullable();
            $table->integer('harga24');
            $table->integer('harga12');
            $table->integer('harga6');
            $table->string('gambar')->default('noimage.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alats');
    }
}
=======
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained();
            $table->string('nama_alat');
            $table->text('deskripsi')->nullable();
            $table->integer('harga24');
            $table->integer('harga12');
            $table->integer('harga6');
            $table->string('gambar')->default('noimage.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alats');
    }
}
>>>>>>> feee5b537f52fb79a44d8583e5f6e1d1f2effc46:database/migrations/2023_06_08_094204_create_alats_table.php
