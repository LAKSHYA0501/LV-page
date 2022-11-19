<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeddingBands extends Model
{
    protected $table = 'wedding_bands';
    protected $fillable=[
        'prod_sku',
        'prod_Live_URL',
        'prod_name',
        'prod_long_desc',
        'prod_type',
        'prod_subcategory',
        'prodmeta_section',
        'prodmeta_ship_days',
        'prodmeta_metal_weight',
        'prodmeta_side_diamonds_count',
        'prodmeta_side_diamonds_ctw',
        'prodmeta_side_diamonds_color_clarity',
        'prodmeta_side_diamonds1_count',
        'attr_14k_regular',
        'attr_14k_metal_available',
        'attr_18k_regular',
        'attr_18k_metal_available',
        'attr_platinum_regular',
        'attr_whitegold_platinum_round_default_img',
        'attr_whitegold_platinum_round_img',
        'attr_rosegold_round_default_img',
        'attr_rosegold_round_img',
        'attr_yellowgold_round_default_img',
        'attr_yellowgold_round_img',
        'attr_whitegold_yellow_round_default_img',
        'attr_whitegold_yellow_round_img',
        'attr_whitegold_rose_round_default_img',
        'attr_whitegold_rose_round_img',
        'attr_tricolor_round_default_img',
        'attr_tricolor_round_img',
    ];
}
