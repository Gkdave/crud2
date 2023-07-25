<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>CRUD ORM</title>
</head>
<body>
    <h1 class="mx-4 mt-4">Studendts Table </h1>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="city">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Marks</label>
                        <input type="number" class="form-control" name="marks" id="marks">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Mobile</label>
                        <input type="number" class="form-control" name="mob" id="mob">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">DOB</label>
                        <input type="date" class="form-control" name="dob" id="dob">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
                @if (session()->has('status'))
                    <div class="alert alert-success mt-2">
                        {{session("status")}}
                    </div>
                @endif
            </div>
            <div class=" col-sm-5 offset-1">
                <table class="table table-bordered-rounded table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Marks</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">D.O.B</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($student as $stu)
                    <tr>
                        <th>{{$stu->id}}</th>
                        <td>{{$stu->name}}</td>
                        <td>{{$stu->city}}</td>
                        <td>{{$stu->marks}}</td>
                        <td>{{$stu->Mob}}</td>
                        <td>{{$stu->dob}}</td>
                        <td>
                            <a href="{{ url('/edit',$stu->id)}}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{ url('/delete',$stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                           
                        </td>
                        <br>
                        </tr>   
                     @endforeach
                    </tbody>
                </table>
               </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  
</body>
</html>