<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $bgs = ['bedroom', 'lounge', 'saloon', 'bathroom'];
        foreach ($bgs as $bg)
        {
            Category::create(['name' => $bg, 'slug' => $bg]);
        }
    }
}
