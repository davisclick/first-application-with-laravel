<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateRegistriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registries', function (Blueprint $table) {
           
            $table->integer('id')->unsigned();
            $table->string('first_name',50);
            $table->string('second_name',50)->nullable();
            $table->string('surename',50);
            $table->string('second_surename',50)->nullable();
            $table->string('email',100);
            $table->string('cell_phone',50)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('coments',500)->nullable();
            $table->integer('age');
            $table->boolean('flosspainfo')->nullable();
            $table->boolean('fedorainfo')->nullable();
            $table->boolean('latansecinfo')->nullable();
            $table->timestamps();
            $table->primary(array('id', 'email'));
            
        });
        DB::statement('ALTER TABLE registries MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registries');
    }
}