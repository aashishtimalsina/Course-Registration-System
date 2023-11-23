<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $semester1 = Semester::where('name', 'Semester 1')->first();
        $semester2 = Semester::where('name', 'Semester 2')->first();
        $semester3 = Semester::where('name', 'Semester 3')->first();
        $semester4 = Semester::where('name', 'Semester 4')->first();
        $semester5 = Semester::where('name', 'Semester 5')->first();
        $semester6 = Semester::where('name', 'Semester 6')->first();
        $semester7 = Semester::where('name', 'Semester 7')->first();
        $semester8 = Semester::where('name', 'Semester 8')->first();
        // Add more semesters as needed

        Course::create(['semester_id' => $semester1->id, 'name' => 'Course A']);
        Course::create(['semester_id' => $semester1->id, 'name' => 'Course B']);
        // Add more courses for Semester 1

        Course::create(['semester_id' => $semester2->id, 'name' => 'Course C']);
        Course::create(['semester_id' => $semester2->id, 'name' => 'Course D']);
        // Add more courses for Semester 2
        Course::create(['semester_id' => $semester3->id, 'name' => 'Course C']);
        Course::create(['semester_id' => $semester3->id, 'name' => 'Course D']);
        //
        Course::create(['semester_id' => $semester4->id, 'name' => 'Course C']);
        Course::create(['semester_id' => $semester4->id, 'name' => 'Course D']);
        //
        Course::create(['semester_id' => $semester5->id, 'name' => 'Course C']);
        Course::create(['semester_id' => $semester5->id, 'name' => 'Course D']);
        //
        Course::create(['semester_id' => $semester6->id, 'name' => 'Course C']);
        Course::create(['semester_id' => $semester6->id, 'name' => 'Course D']);
        //
        Course::create(['semester_id' => $semester7->id, 'name' => 'Course C']);
        Course::create(['semester_id' => $semester7->id, 'name' => 'Course D']);
        //
        Course::create(['semester_id' => $semester8->id, 'name' => 'Course C']);
        Course::create(['semester_id' => $semester8->id, 'name' => 'Course D']);


    }
}
