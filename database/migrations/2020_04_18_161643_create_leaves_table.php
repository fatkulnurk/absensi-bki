<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->string('name');
            $table->string('position');
            $table->year('year');
            $table->string('long');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->text('work_at')->nullable();
            $table->text('substitute')->nullable();
            $table->text('excuse');

            //0 = pending, 1 = accept, 2 = decline
            $table->unsignedMediumInteger('status')
                ->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
}
