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
        $kategori1->name="Buku";
        $kategori1->save();

        $kategori2=new Category;
        $kategori2->name="CD/DVD";
        $kategori2->save();

        $kategori3=new Category;
        $kategori3->name="Poster";
        $kategori3->save();

        $kategori4=new Category;
        $kategori4->name="Kaos";
        $kategori4->save();
        // factory(App\Category::class, 5)->create();                

    }
}
