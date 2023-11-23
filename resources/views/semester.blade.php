<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Semester</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .semester-container {
            max-width: 800px;
            margin: auto;
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #3490dc;
        }

        .selected-stream {
            margin-top: 10px;
            font-weight: bold;
        }

        /* Add Bootstrap class for card styling */
        .card {
            margin: 10px;
            border-radius: 8px;
            overflow: hidden;
        }

        /* Add Bootstrap class for card body */
        .card-body {
            padding: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        li {
            margin: 10px;
        }

        a {
            text-decoration: none;
            display: block;
            padding: 10px;
            background-color: #3490dc;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>

<div class="semester-container">
    <h2>Select Semester</h2>

    @if(isset($selectedStream))
        <p class="selected-stream">Selected Stream: {{ $selectedStream }}</p>
    @endif

    <ul>
        @foreach ($semesters as $semester)
            <li>
                <!-- Bootstrap Card -->
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/courses', ['selectedSemester' => $semester->id, 'selectedStream' => $selectedStream]) }}">
                            {{ $semester->name }}
                        </a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<!-- Link to Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
