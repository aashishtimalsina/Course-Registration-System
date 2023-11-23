<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .courses-container {
            max-width: 600px;
            margin: auto;
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #3490dc;
        }

        p {
            margin: 10px 0;
            font-weight: bold;
        }

        form {
            margin-top: 20px;
            display: grid;
            gap: 10px;
            grid-template-columns: repeat(3, 1fr);
        }

        label {
            text-align: left;
        }

        select, input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-submit {
            grid-column: span 3; /* Make the button span all three columns */
            padding: 10px 20px;
            background-color: #3490dc;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>

<div class="courses-container">
    <h2>Courses</h2>

    <p>Selected Stream: {{ $selectedStream }}</p>
    <p>Selected Semester: {{ $selectedSemester }}</p>

    <!-- Bootstrap Card -->
    <div class="card">
        <div class="card-body">
            <!-- Another form for additional data -->
            <form id="courseForm" method="post" action="{{ route('formSubmit') }}">
                @csrf
                <input type="hidden" name="semester" value="{{ $selectedSemester }}">
                <input type="hidden" name="stream" value="{{ $selectedStream }}">

                <div class="form-group">
                    <label for="courses">Select Course:</label>
                    <select class="form-control" name="courses" id="courses">
                        @if(count($courses) > 0)
                            @foreach ($courses as $course)
                                <option value="{{ $course->name }}">{{ $course->name }}</option>
                            @endforeach
                        @else
                            <option value="" disabled>No courses available for this semester.</option>
                        @endif
                    </select>
                </div>

                <!-- Add Bootstrap form-group for each input field -->
                <div class="form-group">
                    <label for="university_id">University ID:</label>
                    <input type="text" class="form-control" name="university_id" id="university_id" required>
                </div>

                <div class="form-group">
                    <label for="college_id">College ID:</label>
                    <input type="text" class="form-control" name="college_id" id="college_id" required>
                </div>

                <div class="form-group">
                    <label for="college_email">College Email:</label>
                    <input type="email" class="form-control" name="college_email" id="college_email" required>
                </div>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" id="address" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" name="phone" id="phone" required>
                </div>

                <button type="button" onclick="submitForm()" class="btn btn-primary btn-submit">Submit Form</button>
            </form>
        </div>
    </div>
</div>

<!-- Link to Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function submitForm() {
        // Assuming you have a function to handle form submission
        document.getElementById('courseForm').submit();

        // Display SweetAlert on successful form submission
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'You have successfully filled up the form.',
            timer: 10000, // Set the timer to 10 seconds
            timerProgressBar: true,
            showConfirmButton: false, // Hide the "OK" button
            willClose: () => {
                // You can add additional actions here if needed
                console.log('SweetAlert is closed');
            }
        });
    }
</script>

</body>
</html>
