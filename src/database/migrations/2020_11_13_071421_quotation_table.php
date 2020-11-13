<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuotationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            
            $table->string('concessionaire_name');
            $table->string('concessionaire_phone');
            $table->string('concessionaire_address');
            $table->string('agent_full_name');
            $table->string('agent_phone');
            $table->string('client_name');
            $table->string('client_last_name');
            $table->string('client_address');
            $table->string('client_phone');
            $table->string('client_email');
            $table->integer('client_age');
            $table->enum('client_genre', ['F', 'M']);
            $table->enum('client_civil_status', ['Casado','Soltero','Viudo','Separado']);
            $table->integer('client_home_people');
            $table->enum('client_academic_level', ['Ninguna','Primaria','Basico','Diversificado','Licenciatura','Master','Doctorado','Tecnico','Otro']);
            $table->boolean('client_is_working');
            $table->decimal('client_income', 8,2);
            $table->string('car_model');
            $table->string('car_line');
            $table->string('car_brand');

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
        Schema::drop('quotations');
    }
}
