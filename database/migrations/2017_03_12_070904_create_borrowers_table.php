<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
			$table->timestamps();
			$table->unique(array('mobile', 'user_id'));
        });

        Schema::create('book_borrower', function (Blueprint $table) {
            $table->increments('id');
            $table->date('lend_date');
            $table->date('return_date');
            $table->date('orginal_return_date')->nullable();
            $table->integer('borrower_id')->unsigned();
            $table->foreign('borrower_id')->references('id')->on('borrowers')->onDelete('cascade');
            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_borrower');
        Schema::dropIfExists('borrowers');
    }
}
