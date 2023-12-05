<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function student()
    {
        $students = Form::select('*')->get();

        return view('student', compact('students'));
    }

    public function edit($id)
    {
        $student = Form::findOrFail($id);

        return view('edit_student', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Form::findOrFail($id);

        // Validate the request data if needed
        $request->validate([
            'university_id' => 'required',
            'college_id' => 'required',
            'college_email' => 'required|email',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'stream' => 'required',
            'semester' => 'required',
            'courses' => 'required',
        ]);

        // Update student details using $request
        $student->update([
            'university_id' => $request->input('university_id'),
            'college_id' => $request->input('college_id'),
            'college_email' => $request->input('college_email'),
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'stream' => $request->input('stream'),
            'semester' => $request->input('semester'),
            'courses' => $request->input('courses'),
        ]);

        // Redirect to the student list or show the updated student details
        return redirect()->route('student')->with('success', 'Student updated successfully');
    }
}
