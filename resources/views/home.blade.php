<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/css/app.css" rel="stylesheet">
        <title>Laravel Trips</title>
    </head>
    <body>

        <header>
            <h1>Laravel Agency Trips</h1>
        </header>

        <main>
            <div class="custom-container">
                @foreach($allTrips as $trip)
                    <div class="card">
                        <h2>{{$trip->title}}</h2>
                        <div class="card-content">
                            <img src="{{ $trip->cover }}" alt="Vista di {{$trip ->title}}"/>
                            <div class="card-txt">
                                <h3 class="txt-title">Description:</h3>
                                <p>{{$trip->description}}</p>
                                <h3 class="prices-info">Price: {{$trip->price}}$</h3>
                                <h3 class="prices-info">Discount: {{$trip->discount}}%</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </body>
</html>