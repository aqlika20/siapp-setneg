<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataJabatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_jabatan', function (Blueprint $table) {
            $table->id();
            $table->string('no_keppres_jabatan')->unique();
            $table->string('jabatan');
            $table->string('file_jabatan');
            $table->string('file_ba_pengambilan_sumpah_jabatan');
            $table->string('tmt_jabatan');
            $table->string('unit_kerja');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_jabatan');
    }
}
