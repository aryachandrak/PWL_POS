<?php

use App\Models\m_user;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('useri', function (Blueprint $table) {
            $table->id('user_id', 20);
            $table->unsignedBigInteger('level_id')->index();//indexing untuk foreign key
            $table->string('username', 20)->unique(); //unique untuk memastikan tidak ada username yang sama
            $table->string('nama', 100);
            $table->string('password');
            $table->timestamps();

            //mendefinisikan Foreign Key pada kolom level_id mengacu pada kolom level_id di tabel m_level
            $table->foreign('level_id')->references('level_id')->on('m_level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('useri', function (Blueprint $table) {
            //
        });
    }
};
