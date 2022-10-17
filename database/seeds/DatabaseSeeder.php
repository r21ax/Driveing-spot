<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("posts")->insert([
            'id'=>'1',
            'prefecture_id'=>'1',
            'address'=>'北海道斜里郡清里町字清泉',
            'comment'=>'神の湖」の別名を持つ摩周湖の伏流水からできているという言い伝えから、「神の子池」の名称で呼ばれる、周囲約220m、水深約5mの池。',
            'title'=>'神の子池',
            'image'=>"https://backet-r-drive.s3.ap-northeast-1.amazonaws.com/myprefix/Y13E2GvuWDIuHbA3qLVaufKrok5XWtED4FlgHY5A.jpg",
            'updated_at'=> new DateTime()
            
            ]);
            
        DB::table("posts")->insert([
            'id'=>'2',
            'prefecture_id'=>'7',
            'address'=>'福島県福島市土湯温泉町鷲倉山',
            'comment'=>'浄土平は標高1,600メートルに位置する高原で、吾妻小富士、一切経山（いっさいきょうざん）などに囲まれ、その周辺にはかつての火山活動によってできた、独特な風景が広がっています。',
            'title'=>'浄土平',
            'image'=>"https://backet-r-drive.s3.ap-northeast-1.amazonaws.com/myprefix/2tdNuXdNu1JkJzvz2XR8h2T6QzFespeCzAoLLRm2.jpg",
            'updated_at'=> new DateTime()
            ]);
        
        DB::table("posts")->insert([
            'id'=>'3',
            'prefecture_id'=>'13',
            'address'=>'東京都港区芝公園４丁目２−８',
            'comment'=>'地上150mの高さにあるメインデッキからは、東京の街を一望できる！',
            'title'=>'東京タワー',
            'image'=>"https://backet-r-drive.s3.ap-northeast-1.amazonaws.com/myprefix/pl86uXd8wlDIHXlnYAl1tp2QKTwKT8PRig6PZwcA.jpg",
            'updated_at'=> new DateTime()
            ]);
        
        DB::table("posts")->insert([
            'id'=>'4',
            'prefecture_id'=>'8',
            'address'=>'茨城県東茨城郡大洗町磯浜町６８９０',
            'comment'=>'大洗磯前神社は、茨城県大洗町にある神社。式内社。旧社格は国幣中社で、現在は神社本庁の別表神社。',
            'title'=>'大洗神社',
            'image'=>"https://backet-r-drive.s3.ap-northeast-1.amazonaws.com/myprefix/evWuzpHgrBBC59tfRhArVu5xTUAX4eoxqmIDdUnN.jpg",
            'updated_at'=> new DateTime()
            ]);
            
        DB::table("posts")->insert([
            'id'=>'5',
            'prefecture_id'=>'22',
            'address'=>'静岡県賀茂郡南伊豆町中木',
            'comment'=>'あいあい岬バス停から２５０メートルほどのところにある公園。海岸沿いの丘の上にある。',
            'title'=>'ユウスゲ公園',
            'image'=>"https://backet-r-drive.s3.ap-northeast-1.amazonaws.com/myprefix/WNbNsxdHdaoswaOqcgy8p8E4iXV1ZoFwRmmZwRcP.jpg",
            'updated_at'=> new DateTime()
            ]);
            
        DB::table("posts")->insert([
            'id'=>'6',
            'prefecture_id'=>'7',
            'address'=>'福島県南会津郡下郷町弥五島下タ林５３１６',
            'comment'=>'屹立した奇岩群が紅葉を粧いルビー色の水面に映し出されています。実に見事な景観を吊り橋上から独り占めするという贅沢な時間となりました。',
            'title'=>'塔のへつり',
            'image'=>"https://backet-r-drive.s3.ap-northeast-1.amazonaws.com/myprefix/BADeRI6008N9Vc4wHm3Gw5LKK2QJwHGfHRdXw5Yn.jpg",
            'updated_at'=> new DateTime()
            ]);
        
        DB::table("posts")->insert([
            'id'=>'7',
            'prefecture_id'=>'2',
            'address'=>' 青森県下北郡大間町大間大間平１７−１',
            'comment'=>'大間崎と北海道の汐首岬は17.5kmしか離れておらず、弁天島の向こうには渡島連峰を望み見ることができる。',
            'title'=>'本州最北端の地',
            'image'=>"https://backet-r-drive.s3.ap-northeast-1.amazonaws.com/myprefix/xLHFFUSmuGjHMeIaqpLQgcUx1MDrZynOpg8kfLMl.jpg",
            'updated_at'=> new DateTime()
            ]);
            
            
        
        $this->call(PrefectureTabaleSeeder::class);
    }
}
