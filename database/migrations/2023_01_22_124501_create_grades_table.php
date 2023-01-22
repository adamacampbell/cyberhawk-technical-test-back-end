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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreign('inspection_id')->references('id')->on('inspections')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('component_id')->references('id')->on('components')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('grade_type_id')->references('id')->on('grade_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('grades');
    }
};
