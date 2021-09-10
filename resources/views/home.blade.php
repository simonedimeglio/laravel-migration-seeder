<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Trips</title>
</head>
<body>
    <h1>Empty Structure (working)</h1>
  
        @foreach($allTrips as $trip)
            <div class="card">
                <h2>{{$trip->title}}</h2>
                <img src="{{ $trip->cover }}" alt="Vista di {{$trip ->title}}"/>
                <p>{{$trip->abstract}}</p>
            </div>
        @endforeach
</body>
</html>