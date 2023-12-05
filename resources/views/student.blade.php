@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Student Table') }}</div>

                    <div class="card-body">
                        <div class="container mt-5">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>University ID</th>
                                    <th>College ID</th>
                                    <th>College Email</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Stream</th>
                                    <th>Semester</th>
                                    <th>Courses</th>
                                    <th>Action</th> <!-- New column for Edit button -->
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->university_id }}</td>
                                        <td>{{ $student->college_id }}</td>
                                        <td>{{ $student->college_email }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td>{{ $student->stream }}</td>
                                        <td>{{ $student->semester }}</td>
                                        <td>{{ $student->courses }}</td>
                                        <td>
                                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
