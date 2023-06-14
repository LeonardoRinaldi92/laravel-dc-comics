<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datiComics = config('db.comicsDb');

        foreach( $datiComics as $elem ){
            $newComic = new Comic();
            $newComic->name = $elem['title'];
            $newComic->description = $elem['description'];
            $newComic->thumb = $elem['thumb'];
            $newComic->price = $elem['price'];
            $newComic->series = $elem['series'];
            $newComic->sale_date = $elem['sale_date'];
            $newComic->type = $elem['type'];
            $newComic->artist = json_encode($elem['artists']);
            $newComic->writers = json_encode($elem['writers']);
            $newComic->save();
        }
    }
}
