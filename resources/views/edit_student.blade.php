<!-- resources/views/edit_student.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit Student') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('student.update', $student->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="university_id">University ID</label>
                                <input type="text" class="form-control" id="university_id" name="university_id" value="{{ $student->university_id }}">
                            </div>

                            <div class="form-group">
                                <label for="college_id">College ID</label>
                                <input type="text" class="form-control" id="college_id" name="college_id" value="{{ $student->college_id }}">
                            </div>

                            <div class="form-group">
                                <label for="college_email">College Email</label>
                                <input type="email" class="form-control" id="college_email" name="college_email" value="{{ $student->college_email }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" id="address" name="address">{{ $student->address }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $student->phone }}">
                            </div>

                            <div class="form-group">
                                <label for="stream">Stream</label>
                                <input type="text" class="form-control" id="stream" name="stream" value="{{ $student->stream }}">
                            </div>

                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <input type="text" class="form-control" id="semester" name="semester" value="{{ $student->semester }}">
                            </div>

                            <div class="form-group">
                                <label for="courses">Courses</label>
                                <input type="text" class="form-control" id="courses" name="courses" value="{{ $student->courses }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
