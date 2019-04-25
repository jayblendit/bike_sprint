<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rankings</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="col-md-11 text-center"> 
        <a class="btn btn-primary" href="{{ route('ranking')}}">5k</a>
        <a class="btn btn-primary" href="{{ route('rankingg')}}">10k</a>
        <a class="btn btn-primary" href="{{ route('rankinggg')}}">15k</a>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
              <th class="text-center" scope="col">Place</th>
              <th class="text-center" scope="col">Name</th>
              <th class="text-center" scope="col">Time in 10k</th>
            </tr>
        </thead>
    <tbody>
        <tr>
          <th class="text-center" scope="row">1</th>
          <td class="text-center">via</td>
          <td class="text-center">00:3:00</td>
        </tr>

        <tr>
          <th class="text-center" scope="row">2</th>
          <td class="text-center">dalmao</td>
          <td class="text-center">00:3:30</td>
        </tr>
</div>
</br></br>
</body>
</html>
