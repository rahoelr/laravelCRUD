<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    private $_posts = [
        ["title" => "Artikel 1", "description" => "Deskripsi Artikel 1"],
        ["title" => "Artikel 2", "description" => "Deskripsi Artikel 2"],
        ["title" => "Artikel 3", "description" => "Deskripsi Artikel 3"],
        ["title" => "Artikel 4", "description" => "Deskripsi Artikel 4"],
        ["title" => "Artikel 5", "description" => "Deskripsi Artikel 5"],
        ["title" => "Artikel 6", "description" => "Deskripsi Artikel 6"],
        ["title" => "Artikel 7", "description" => "Deskripsi Artikel 7"],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach($this->_posts as $post){
            $data[] = [
                'title' => $post['title'],
                'description' => $post['description']
            ];

        }
        DB::table('posts')->insert($data);
    }
}
