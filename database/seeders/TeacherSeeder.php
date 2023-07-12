<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\teacher;
class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = collect([
           [
            'name' => 'Saiful Islam',
            'email' => 'saiful@gmail.com',
            'age' => 30,
            'city' => 'Dhaka',
           ],
           [
            'name' => 'Raisul Islam',
            'email' => 'raisul@gmail.com',
            'age' => 25,
            'city' => 'Feni',
           ],
           [
            'name' => 'Kamrul Islam',
            'email' => 'kamrul@gmail.com',
            'age' => 20,
            'city' => 'Comilla',
           ],
        ]);
        $teachers->each(function($psngr){
            teacher::insert($psngr);
         });
        // teacher::create([
        //     'name' => 'Saiful Islam',
        //     'email' => 'saiful@gmail.com',
        //     'age' => 30,
        //     'city' => 'Dhaka',
        // ]);
    }
}
