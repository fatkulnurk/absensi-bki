<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spi', function (Blueprint $table) {
            $table->id();
            $table->string('project_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('phone_number');
            $table->text('job_description');
            $table->date('start_date');
            $table->date('finish_date');

            $table->unsignedBigInteger('spk_po_id')->nullable();
            $table->foreign('spk_po_id')
                ->references('id')
                ->on('spk_po');

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
        Schema::dropIfExists('spi');
    }
}
