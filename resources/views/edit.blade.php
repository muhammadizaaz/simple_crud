<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="/table/{{$resident->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="text" id="name" name="name" placeholder="Name" value="{{ $resident->name }}">
                            <input type="text" id="assistant_code" name="assistant_code" placeholder="Assistant Code" value="{{ $resident->assitant_code }}">
                            <input type="text" id="nim" name="nim" placeholder="NIM" value="{{ $resident->nim }}">
                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
