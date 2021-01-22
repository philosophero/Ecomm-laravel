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
            'name'=>'LG mobile',
            'price'=>'300',
            "description"=>'smart phone ,6gb ram 32gb rom',
            "category"=>"mobile",
            "gallery"=>"https://cdn.vox-cdn.com/thumbor/p20bME7t-R1XXdy7WeW3wdOr7wg=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/12026853/DSCF6490.jpg"
            
            ],
            [
            'name'=>'smart phone',
            'price'=>'500',
            "description"=>'smart tv,6gb ram 32gb rom',
            "category"=>"tv",
            "gallery"=>"https://s.yimg.com/os/creatr-uploaded-images/2020-06/cf8201c0-bacc-11ea-9eea-dc8cdb21b6f1"
            
            ],
            [
            'name'=>'sony tv',
            'price'=>'500',
            "description"=>'smart phone ,4gb ram 32gb rom',
            "category"=>"mobile",
            "gallery"=>"https://images.samsung.com/is/image/samsung/africa-en-fhdtv-n5300-global-ua49n5300arxxa-frontblack-153239974?$720_576_PNG$"
            ],
            [
            'name'=>'lg fridge',
            'price'=>'700',
            "description"=>'20ltr',
            "category"=>"Electronics",
            "gallery"=>"https://reviewed-com-res.cloudinary.com/image/fetch/s--wUkdt1if--/b_white,c_limit,cs_srgb,f_auto,fl_progressive.strip_profile,g_center,h_668,q_auto,w_1187/https://reviewed-production.s3.amazonaws.com/1580135180262/HERO.jpg"
            ],
            [
            'name'=>'Sumsang fridge',
            'price'=>'800',
            "description"=>'20ltr',
            "category"=>"Electronics",
            "gallery"=>"https://www.soundstore.ie/pub/media/catalog/product/cache/d24b29a8ed1511cf6ad34a4b4800d0ff/i/b/ib5050a1d.jpg"

            ]
        ]);
    }
}
