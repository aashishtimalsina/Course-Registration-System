<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Stream</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .stream-container {
            text-align: center;
        }

        .stream-form {
            margin-top: 20px;
        }

        .select-label {
            margin-right: 10px;
        }

        .btn-continue {
            padding: 10px 20px;
            background-color: #3490dc;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-continue:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>

<div class="stream-container">
    <h2>Select Stream</h2>

    <form method="post" action="/semester" class="stream-form">
        @csrf
        <div class="form-group">
            <label for="stream" class="select-label">Select Stream:</label>
            <select class="form-control" name="stream" id="stream">
                @foreach ($streams as $stream)
                    <option value="{{ $stream->id }}" {{ $selectedStream == $stream->id ? 'selected' : '' }}>
                        {{ $stream->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-continue">Continue</button>
    </form>
</div>

<!-- Link to Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
