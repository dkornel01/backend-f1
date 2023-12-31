<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('writers', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->integer('szuletes');
            $table->timestamps();
        });
        DB::table('writers')->insert([
                                     ['nev'=>'József Attila','szuletes'=>1905],
                                     ['nev'=>'Dominik Sándor','szuletes'=>1900],
                                     ['nev'=>'Sándor Attila','szuletes'=>1905],
                                     ['nev'=>'Dominik Géza','szuletes'=>1900]
                                    ]);
    }

    /**
     * Reverse the migrations.
     */
    /*public function down(): void
    {
        Schema::rename('writer', 'writers');
        Schema::dropIfExists('writer');
        
    }*/
};
