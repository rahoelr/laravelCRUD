<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTableSeeder extends Seeder
{
    private $_projects = [
        ["title" => "Project 1", "description" => "Deskripsi Project 1"],
        ["title" => "Project 2", "description" => "Deskripsi Project 2"],
        ["title" => "Project 3", "description" => "Deskripsi Project 3"],
        ["title" => "Project 4", "description" => "Deskripsi Project 4"],
        ["title" => "Project 5", "description" => "Deskripsi Project 5"],
        ["title" => "Project 6", "description" => "Deskripsi Project 6"],
        ["title" => "Project 7", "description" => "Deskripsi Project 7"],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach ($this->_projects as $project){
            $data[] = [
                'title' => $project['title'],
                'description' => $project['description']
            ];
        }
        DB::table('projects')->insert($data);
    }
}
