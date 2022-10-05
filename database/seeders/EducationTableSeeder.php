<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationTableSeeder extends Seeder
{
    private $_educations = [
        ["title" => "Artikel 1", "description" => "Deskripsi Artikel 1", "universitas" => "Universitas Gadjah Mada"],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach ($this->_educations as $education){
            $data[] = [
                'title' => $education['title'],
                'description' => $education['description'],
                'universitas' => $education['universitas']
            ];
        }
        DB::table('educations')->insert($data);
    }
}
