<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Picture;
use App\Models\Product;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(2)->create();
        Stock::factory(6)->create();
        $testUser= new User();
        $testUser->name = "test";
        $testUser->email = "test@test";
        $testUser ->password = Hash::make("test");
        $testUser-> phoneNumber = "11";
        $testUser->save();

        $arr = ["roast","steaks","beef_sausages","minced_beef","potatoes","beef_salami"];
        $productDescrip = ["The famous organic roast - you must taste this!","Best steaks in Europe! Voted by local population!","The greatest organic meat, made into sausages!","Fresh, quality ground beef from a local farm, grass fed!","Organic potatoes, grown right here on the farm!","Salami, but made from a cow. Both healthier and tastier!"];

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
            $en->description = $productDescrip[$j];
            $en->save();
        }
    }
}
