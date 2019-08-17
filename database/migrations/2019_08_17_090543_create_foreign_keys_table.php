<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jour_restaurant', function(Blueprint $table) {
            $table->foreign('restaurant_id')->references('id')->on('restaurants')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('jour_restaurant', function(Blueprint $table) {
            $table->foreign('jour_id')->references('id')->on('jours')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jour_restaurant', function(Blueprint $table) {
            $table->dropForeign('jour_restaurant_restaurant_id_foreign');
        });
        Schema::table('jour_restaurant', function(Blueprint $table) {
            $table->dropForeign('jour_restaurant_jour_id_foreign');
        });
    }
}
