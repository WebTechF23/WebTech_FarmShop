<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Picture;
use App\Models\Product;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(2)->create();
        Stock::factory(6)->create();

        $arr = ["roast","steaks","beef_sausages","minced_beef","potatoes","beef_salami"];

        for ($i = 0; $i < count($arr); $i++) {
            $ent = new Picture();
            $ent->fileName = $arr[$i];
            $ent->fileExtension=".png";
            $ent->save();
        }
        for ($j = 0; $j < count($arr); $j++) {
            $en = new Product();
            $en->name = $arr[$j];
            $en->price =25;
            $en->dateAdded = date('Y-m-d H:i:s');
            $en->picture_id = $j+1;
            $en->stock_id = $j+1;
            $en->save();
        }
    }
}
