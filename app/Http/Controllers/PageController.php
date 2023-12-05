<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Form;
use App\Models\Semester;
use App\Models\Stream;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function selectStream(Request $request)
    {
        $streams = Stream::all();
        $selectedStream = $request->input('stream');

        return view('stream', compact('streams', 'selectedStream'));
    }

    public function selectSemester(Request $request)
    {
        $selectedStreamId = $request->input('stream');
        $selectedSemester = $request->input('semester');
        $stream = Stream::find($selectedStreamId);
        $semesters = $stream->semesters;
        $selectedStream = $stream ? $stream->name : null;

        return view('semester', compact('selectedStream', 'selectedSemester', 'semesters'));
    }

    public function showCourses($selectedSemester, $selectedStream)
    {
        $courses = Course::where('semester_id', $selectedSemester)->get();
        $semester = Semester::find($selectedSemester);
        $selectedSemester = $semester->name;

        return view('courses', compact('courses', 'selectedSemester', 'selectedStream'));
    }

    public function processAdditionalData(Request $request)
    {
        //        dd($request->all());
        // Validate the form data
        $validatedData = $request->validate([
            'university_id' => 'required|string',
            'college_id' => 'required|string',
            'college_email' => 'required|email',
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'stream' => 'required|string',
            'semester' => 'required|string',
            'courses' => 'required|string',
            // You can add more validations as needed
        ]);

        // Create a new FormData instance and save it to the database
        Form::create($validatedData);

        // Redirect or return a response as needed
        return redirect('/')->with('success', 'Additional data submitted successfully');
    }
}
