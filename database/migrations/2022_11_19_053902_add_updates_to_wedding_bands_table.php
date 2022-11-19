<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatesToWeddingBandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wedding_bands', function (Blueprint $table) {
            $table->integer('prod_sku')->unsigned()->nullable()->change();
            $table->string('prod_Live_URL')->unsigned()->nullable()->change();
            $table->string('prod_name')->unsigned()->nullable()->change();
            $table->string('prod_long_desc')->unsigned()->nullable()->change();
            $table->string('prod_type')->unsigned()->nullable()->change();
            $table->string('prod_subcategory')->unsigned()->nullable()->change();
            $table->string('prodmeta_section')->unsigned()->nullable()->change();
            $table->integer('prodmeta_ship_days')->unsigned()->nullable()->change();
            $table->string('prodmeta_metal_weight')->unsigned()->nullable()->change();
            $table->integer('prodmeta_side_diamonds_count')->unsigned()->nullable()->change();
            $table->string('prodmeta_side_diamonds_ctw')->unsigned()->nullable()->change();
            $table->string('prodmeta_side_diamonds_color_clarity')->unsigned()->nullable()->change();
            $table->integer('prodmeta_side_diamonds1_count')->unsigned()->nullable()->change();
            $table->integer('attr_14k_regular')->unsigned()->nullable()->change();
            $table->string('attr_14k_metal_available')->unsigned()->nullable()->change();
            $table->integer('attr_18k_regular')->unsigned()->nullable()->change();
            $table->string('attr_18k_metal_available')->unsigned()->nullable()->change();
            $table->integer('attr_platinum_regular')->unsigned()->nullable()->change();
            $table->string('attr_whitegold_platinum_round_default_img')->unsigned()->nullable()->change();
            $table->string('attr_whitegold_platinum_round_img')->unsigned()->nullable()->change();
            $table->string('attr_rosegold_round_default_img')->unsigned()->nullable()->change();
            $table->string('attr_rosegold_round_img')->unsigned()->nullable()->change();
            $table->string('attr_yellowgold_round_default_img')->unsigned()->nullable()->change();
            $table->string('attr_yellowgold_round_img')->unsigned()->nullable()->change();
            $table->string('attr_whitegold_yellow_round_default_img')->unsigned()->nullable()->change();
            $table->string('attr_whitegold_yellow_round_img')->unsigned()->nullable()->change();
            $table->string('attr_whitegold_rose_round_default_img')->unsigned()->nullable()->change();
            $table->string('attr_whitegold_rose_round_img')->unsigned()->nullable()->change();
            $table->string('attr_tricolor_round_default_img')->unsigned()->nullable()->change();
            $table->string('attr_tricolor_round_img')->unsigned()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wedding_bands', function (Blueprint $table) {
            //
        });
    }
}
