<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLitDropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lit_drops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('team_id')->index();
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('campaign_id')->index();
            $table->unsignedInteger('participant_id')->nullable()->index();
            $table->string('voter_id')->nullable()->index();
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
        Schema::dropIfExists('lit_drops');
    }
}
