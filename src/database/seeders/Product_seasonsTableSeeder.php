<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_seasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $product_season = [
            'product_id' => 1,
            'season_id' => 3,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 1,
            'season_id' => 4,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 2,
            'season_id' => 1,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 3,
            'season_id' => 4,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 4,
            'season_id' => 2,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 5,
            'season_id' => 2,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 6,
            'season_id' => 2,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 6,
            'season_id' => 3,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 7,
            'season_id' => 1,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 7,
            'season_id' => 2,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 8,
            'season_id' => 2,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 8,
            'season_id' => 3,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 9,
            'season_id' => 2,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 10,
            'season_id' => 1,
        ];
        DB::table('product_seasons')->insert($product_season);

        $product_season = [
            'product_id' => 10,
            'season_id' => 2,
        ];
        DB::table('product_seasons')->insert($product_season);
    }
}