<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillaOwnersTable extends Migration
{
    public function up()
    {
        Schema::create('villa_owners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('bank_account_info')->nullable();
            $table->string('payment_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
