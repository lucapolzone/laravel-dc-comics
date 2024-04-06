<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_data = config('comics');

        foreach ($comics_data as $comic_data) {
            $comic = new Comic;
            $comic->fill($comic_data);
            $comic->save();
        };
    }
}
