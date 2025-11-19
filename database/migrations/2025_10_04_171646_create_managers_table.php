<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->char('mobile', 11)->unique();
            $table->timestamps();
        });

        \Illuminate\Support\Facades\DB::table('managers')->insert([
            'first_name' => 'امیر محمد',
            'last_name' => 'برزگری',
            'email' => 'a@a.com',
            'password' => bcrypt('admin'),
            'mobile' => '09150856590',
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('managers');
    }
};

