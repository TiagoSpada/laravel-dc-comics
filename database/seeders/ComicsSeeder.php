<?php

namespace Database\Seeders;

use App\Models\Comics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('comics');

        DB::table('comics')->truncate();

        foreach ($data as $comics_db) {
            $dc_comics = new Comics();

            $dc_comics->title = $comics_db['title'];
            $dc_comics->description = $comics_db['description'];
            $dc_comics->thumb = $comics_db['thumb'];
            $dc_comics->price = $comics_db['price'];
            $dc_comics->series = $comics_db['series'];
            $dc_comics->sale_date = $comics_db['sale_date'];
            $dc_comics->type = $comics_db['type'];
            $dc_comics->artists = json_encode($comics_db['artists']);
            $dc_comics->writers = json_encode($comics_db['writers']);

            $dc_comics->save();
        }
    }
}
