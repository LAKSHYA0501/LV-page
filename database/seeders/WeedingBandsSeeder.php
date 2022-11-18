<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WeddingBands;

class WeedingBandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WeddingBands::truncate();
        $csvData = fopen(base_path('database/csv/Wedding.csv'),'r');

        $transRaw = true;
        while(($data = fgetcsv($csvData,'53687',',')) !== false){
            if(! $transRaw){
                WeddingBands::create([
                    'prod_sku' => $data[0],
                    'prod_Live_URL' => $data[1],
                    'prod_name' => $data[2],
                    'prod_long_desc' => $data[3],
                    'prod_type' => $data[4],
                    'prod_subcategory' => $data[5],
                    'prodmeta_section' => $data[6],
                    'prodmeta_ship_days' => $data[7],
                    'prodmeta_metal_weight' => $data[8],
                    'prodmeta_side_diamonds_count' => $data[9],
                    'prodmeta_side_diamonds_ctw' => $data[10],
                    'prodmeta_side_diamonds_color_clarity' => $data[11],
                    'prodmeta_side_diamonds1_count' => $data[12],
                    'attr_14k_regular' => $data[13],
                    'attr_14k_metal_available' => $data[14],
                    'attr_18k_regular' => $data[15],
                    'attr_18k_metal_available' => $data[16],
                    'attr_platinum_regular' => $data[17],
                    'attr_whitegold_platinum_round_default_img' => $data[18],
                    'attr_whitegold_platinum_round_img' => $data[19],
                    'attr_rosegold_round_default_img' => $data[20],
                    'attr_rosegold_round_img' => $data[21],
                    'attr_yellowgold_round_default_img' => $data[22],
                    'attr_yellowgold_round_img' => $data[23],
                    'attr_whitegold_yellow_round_default_img' => $data[24],
                    'attr_whitegold_yellow_round_img' => $data[25],
                    'attr_whitegold_rose_round_default_img' => $data[26],
                    'attr_whitegold_rose_round_img' => $data[27],
                    'attr_tricolor_round_default_img' => $data[28],
                    'attr_tricolor_round_img'=> $data[29],
                ]);
            }
            $transRaw = false;
        }
        fclose($csvData);
    }
}
