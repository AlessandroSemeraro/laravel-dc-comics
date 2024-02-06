<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $comics = config('db.comics');

        foreach($comics as $comic) {
            $NewComic = new Comic();
            $NewComic->title = $comic['title'];
            $NewComic->description = $comic['description'];
            $NewComic->thumb = $comic['thumb'];
            $NewComic->price = $comic['price'];
            $NewComic->series = $comic['series'];
            $NewComic->sale_date = $comic['sale_date'];
            $NewComic->type = $comic['type'];
            $NewComic->save();
        }
    }
}
