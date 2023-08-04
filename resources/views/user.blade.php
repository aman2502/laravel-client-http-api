<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="container my-5">

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>User Profile</h3>
                </div>
                <div class="col-sm-6 d-flex justify-content-end">
                  <a href="{{url('author-list')}}" class="btn btn-primary">List of Author</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">email</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Status</th>

                    </tr>
                </thead>
                <tbody>

                    
                        <tr>
                          <td>{{$data['id']}}</td>
                          <td>{{$data['email']}}</td>
                          <td>{{$data['first_name']}}</td>
                          <td>{{$data['last_name']}}</td>
                          <td>{{$data['gender']}}</td>
                          <td>{{$data['active']}} </td>
                        </tr>
                    


                </tbody>
            </table>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
</body>
</html>