<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pengembalians', function (Blueprint $table) {
            $table->unsignedBigInteger('peminjaman_id')->after('id');

            // Jika ada relasi foreign key, tambahkan ini:
            $table->foreign('peminjaman_id')->references('id')->on('peminjamen')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('pengembalians', function (Blueprint $table) {
            $table->dropForeign(['peminjaman_id']);
            $table->dropColumn('peminjaman_id');
        });
    }
};
