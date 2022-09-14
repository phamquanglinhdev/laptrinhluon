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
        Schema::create('grade_tag', function (Blueprint $table) {
            $table->unsignedBigInteger("grade_id");
            $table->unsignedBigInteger("tag_id");
            $table->foreign("grade_id")->references("id")->on("grades");
            $table->foreign("tag_id")->references("id")->on("tags");
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
        Schema::dropIfExists('grade_tag');
    }
};
