<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname');
            $table->string('initial');
            $table->string('role')->default('user');
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('place')->nullable();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('initial');
            $table->dropColumn('role');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('postcode');
            $table->dropColumn('place');
            $table->dropColumn('image');
        });
    }
}
