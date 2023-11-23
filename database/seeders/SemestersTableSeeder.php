<?php

namespace Database\Seeders;

use App\Models\Semester;
use App\Models\Stream;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $stream1 = Stream::where('name', 'BIT')->first();
        $stream2 = Stream::where('name', 'CSIT')->first();

        Semester::create(['stream_id' => $stream1->id, 'name' => 'Sem 1']);
        Semester::create(['stream_id' => $stream1->id, 'name' => 'Sem 2']);
        Semester::create(['stream_id' => $stream1->id, 'name' => 'Sem 3']);
        Semester::create(['stream_id' => $stream1->id, 'name' => 'Sem 4']);
        Semester::create(['stream_id' => $stream1->id, 'name' => 'Sem 5']);
        Semester::create(['stream_id' => $stream1->id, 'name' => 'Sem 6']);
        Semester::create(['stream_id' => $stream1->id, 'name' => 'Sem 7']);
        Semester::create(['stream_id' => $stream1->id, 'name' => 'Sem 8']);

        Semester::create(['stream_id' => $stream2->id, 'name' => 'Semester 1']);
        Semester::create(['stream_id' => $stream2->id, 'name' => 'Semester 2']);
        Semester::create(['stream_id' => $stream2->id, 'name' => 'Semester 3']);
        Semester::create(['stream_id' => $stream2->id, 'name' => 'Semester 4']);
        Semester::create(['stream_id' => $stream2->id, 'name' => 'Semester 5']);
        Semester::create(['stream_id' => $stream2->id, 'name' => 'Semester 6']);
        Semester::create(['stream_id' => $stream2->id, 'name' => 'Semester 7']);
        Semester::create(['stream_id' => $stream2->id, 'name' => 'Semester 8']);
    }
}
