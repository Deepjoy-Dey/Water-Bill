<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationforms', function (Blueprint $table) {
            $table->id();
            $table->Date('Bill_Date');
            $table->String('Bill_No_Consumer_Registration_No');
            $table->String('Consumer_Name');
            $table->String('Email');
            $table->bigInteger('Contact_No');
            $table->String('Address_Hno');
            $table->String('Address_Sub_locality1');
            $table->String('Address_Sub_locality2');
            $table->String('Address_Location');
            $table->String('Sub_District');
            $table->String('District');
            $table->String('State');
            $table->bigInteger('Pin_Code');
            $table->String('Country');
            $table->bigInteger('CSC_No_E_Services_centre');
            $table->bigInteger('Zone_Code');
            $table->bigInteger('Meter_Reader_No');
            $table->bigInteger('Area_Code');
            $table->bigInteger('Water_Connection_No');
            $table->bigInteger('Total_Amount');
            $table->String('Remark');
            $table->String('pay')->nullable();

            $table->String('AC_Holder_Name')->nullable();
            $table->bigInteger('AC_Number')->nullable();
            $table->String('Cheque_Number')->nullable();
            $table->String('Bank_Name')->nullable();
            $table->String('IFSI_Code')->nullable();
            $table->String('UPI_ID')->nullable();
            $table->bigInteger('Amount_Paid')->nullable();
            $table->Date('Payment_Date')->nullable();

            // $table->String('Status')->nullable();

            // $table->String('Payment_Method');
          
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
        Schema::dropIfExists('applicationforms');
    }
}
