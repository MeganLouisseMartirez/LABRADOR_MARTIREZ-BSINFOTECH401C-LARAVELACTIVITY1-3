<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center mb-4">Student Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $student->name }}</h5>
                <p class="card-text">Email: {{ $student->email }}</p>
                <p class="card-text">Age: {{ $student->age }}</p>
                <div class="d-flex gap-2">
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('students.destroy', $student) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?')" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                    <!-- Back Button -->
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to list</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
