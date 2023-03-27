<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('name',255)->after('id');
            $table->string('role',255)->after('name');
            $table->string('nim',255)->after('role');
            $table->string('birth',255)->after('nim');
            $table->string('address',255)->after('birth');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('name',255);
            $table->string('role',255);
            $table->string('nim',255);
            $table->string('birth',255);
            $table->string('address',255);
        });
    }
};
