<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            "name" => "LG Fridge",
            "price" => "20000",
            "description" => "smart fridge 6 ram",
            "category" => "mobile",
            'gallery' => 'https://media.croma.com/image/upload/f_auto,q_auto,d_Croma%20Assets:no-product-image.jpg,h_256,w_256/v1627039276/Croma%20Assets/Large%20Appliances/Refrigerator/Images/224391_tjhba2.png'
        ],
            [
                "name" => "lg TV",
                "price" => "30000",
                "description" => "smart tv ",
                "category" => "tv",
                'gallery' => 'https://media.croma.com/image/upload/f_auto,q_auto,d_Croma%20Assets:no-product-image.jpg,h_256,w_256/v1605298368/Croma%20Assets/Entertainment/Television/Images/8797438017566.png'
            ],
                [
                    "name" => "Smart Watch",
                    "price" => "300",
                    "description" => "smart watch 4 ram",
                    "category" => "watch",
                    'gallery' => 'https://media.croma.com/image/upload/f_auto,q_auto,d_Croma%20Assets:no-product-image.jpg,h_256,w_256/v1606588180/Croma%20Assets/Communication/Wearable%20Devices/Images/8979165446174.png'
                ],
                [
                    "name" => " Oppo Phone",
                    "price" => "4500",
                    "description" => "smart  phone 16ram 1tera hard",
                    "category" => "phone",
                    'gallery' => 'https://media.croma.com/image/upload/f_auto,q_auto,d_Croma%20Assets:no-product-image.jpg,h_256,w_256/v1605203001/Croma%20Assets/Communication/Mobiles/Images/8952896356382.png'

                ],
                [
                    "name" => " Samsung Phone",
                    "price" => "5000",
                    "description" => "smart  phone 16ram 1tera hard",
                    "category" => "phone",
                    'gallery' =>'https://icons.iconarchive.com/icons/jonathan-rey/devices-pack-3/256/Smartphone-Android-Jelly-Bean-Samsung-Galaxy-S4-icon.png'
                ],
                [
                "name" => " Nokia Phone",
                "price" => "5800",
                "description" => "smart  phone 16ram 1tera hard",
                "category" => "phone",
                'gallery'=>'https://media.croma.com/image/upload/f_auto,q_auto,d_Croma%20Assets:no-product-image.jpg,h_256,w_256/v1605255399/Croma%20Assets/Communication/Mobiles/Images/8857344049182.png'
               ]
                ]
        );
    }
}
