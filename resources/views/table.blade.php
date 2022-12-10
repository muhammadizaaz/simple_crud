<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Table</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Assistant Code</th>
                                <th>NIM</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($residents as $resident)
                                <tr>
                                    <td>{{ $resident->name }}</td>
                                    <td>{{ $resident->assistant_code }}</td>
                                    <td>{{ $resident->nim }}</td>
                                    <td>
                                        <a href="/table/{{ $resident->id }}/edit">Edit</a>
                                    </td>
                                    <form action="/table/{{ $resident->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <td>
                                            <button type="submit" class="btn btn-md btn-danger">Delete</button>
                                        </td>
                                    </form>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
