<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<div class=row>
    @foreach ($cars as $car)
    <div class="col col-3">
        <div class="card" style="width: 18rem;">
            <img src="/image/{{ $car['image'] }}"  class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Car {{ $car['id'] }}</h5>
            <p class="card-text">Discription: {{ $car['description'] }}</p>
            <p class="card-text">Model: {{ $car['model'] }}</p>
            <p class="card-text">Produced on: {{ $car['produced_on'] }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endforeach
</body>
</div>

    
</html>