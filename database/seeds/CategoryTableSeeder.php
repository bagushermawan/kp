<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori1=new Category;
        $kategori1->name="Laptop";
        $kategori1->save();

        $kategori2=new Category;
        $kategori2->name="Aksesoris";
        $kategori2->save();

        $kategori3=new Category;
        $kategori3->name="Mouse";
        $kategori3->save();
    }
}
