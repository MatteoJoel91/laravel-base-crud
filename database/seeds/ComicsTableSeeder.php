<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comic');

        foreach ($comics as $comic) {

            $infoComic = new Comic();

            $infoComic->title = $comic['title'];
            $infoComic->description = $comic['description'];
            $infoComic->thumb = $comic['thumb'];
            $infoComic->price = $comic['price'];
            $infoComic->series = $comic['series'];
            $infoComic->sale_date = $comic['sale_date'];
            $infoComic->type = $comic['type'];
            $infoComic->save();
        }
    }
}
