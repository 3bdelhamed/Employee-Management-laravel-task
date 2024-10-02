<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Edit Employee</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('manager.employees.update', $employee) }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
                            </div>
                              <div class="mb-3">
                                 <label for="image" class="form-label">Image</label> <input type="file" class="form-control" id="image" name="image">
                                @if ($employee->image)
                                    <img src="{{ asset('storage/' . $employee->image) }}" alt="{{ $employee->name }}'s Image" width="50">
                                @endif
                             </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
