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
        Schema::create('regentries', function (Blueprint $table) {
            $table->id();
            $table->string('website')->nullable();
            $table->string('advertisement')->nullable();
            $table->string('social media')->nullable();
            $table->string('radio')->nullable();
            $table->string('television')->nullable();
            $table->string('print')->nullable();
            $table->string('other')->nullable();
            $table->string('first name')->nullable();
            $table->string('middle name')->nullable();
            $table->string('last name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('ocuupation')->nullable();
            $table->string('company')->nullable();
            $table->string('contact mobile')->nullable();
            $table->string('contact email')->nullable();
            $table->string('home phone')->nullable();
            $table->string('other contact')->nullable();
            $table->string('full name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('age')->nullable();
            $table->string('nationality')->nullable();
            $table->string('primary language')->nullable();
            $table->string('secondory language')->nullable();
            $table->string('previous school')->nullable();
            $table->string('current grade')->nullable();
            $table->string('admission year')->nullable();
            $table->string('grade to which admission seeking')->nullable();

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
        Schema::dropIfExists('regentries');
    }
};
