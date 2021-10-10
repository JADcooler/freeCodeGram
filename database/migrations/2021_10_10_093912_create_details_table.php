<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profile');//image prof pic


            $table->string('name');            
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('contactNo');
            $table->string('email');
            $table->string('dob');
            $table->string('age');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('nationality');
            $table->string('blood');
            $table->string('mark1');
            $table->string('mark2');
            $table->string('qualification');
            $table->string('qualification-per');
            $table->string('regno');
            $table->string('ss_insti');
            $table->string('ss_board');
            $table->string('ss_pass');
            $table->string('ss_cgpa');
            $table->string('add-cgpa');
            $table->string('kin_Relationship');
            $table->string('kin_Address');
            $table->string('kin_Telephone');
            $table->string('IFSC_code');
            $table->string('Bank_Acc');
            $table->string('Aadhar_no');
            $table->string('PAN No');
            $table->string('place');
            $table->string('date');
            $table->string('file');// image sign pic

            $table->string('degree');
            $table->string('dismissed');
            $table->string('NCCunit');
            $table->string('willness');
            $table->string('crime');

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
        Schema::dropIfExists('details');
    }
}
