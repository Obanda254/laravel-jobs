<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('organisation_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('title');
            $table->integer('skills_required');
            $table->integer('description');
            $table->string('work_type')->default('onsite'); //remote //both
            $table->string('job_type')->default('full time'); //part time //contract
            $table->string('status')->nullable()->default('open'); //closed
            $table->softDeletes();
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
        Schema::dropIfExists('jobs');
    }
}
