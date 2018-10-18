<?php

use Illuminate\Database\Seeder;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert([
            'class_name' =>'Kelas 1',
            'teacher_id' => 1,
        ]);
        DB::table('classrooms')->insert([
            'class_name' =>'Kelas 2',
            'teacher_id' => 2,
        ]);
        DB::table('classrooms')->insert([
            'class_name' =>'Kelas 3',
            'teacher_id' => 1,
        ]);
    }
}
