<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <h3 class="mainTitle">TRENI IN ARRIVO GENOVA PIAZZA PRINCIPE</h3>
    @foreach($trains as $train)
    <ul>
        <li> <h4>Company: {{ $train['company'] }}</h4></li>
        <li> <span>from: {{ $train['from'] }} To {{ $train['to'] }}</span></li>
        <li><p>time to departure:{{ $train['start'] }} time to Arrive:{{$train['arrive']}}</p></li>
        <li> <p>Number of Reservation: {{ $train['pnr'] }}</p></li>
        <li> <p>Number of carriages :{{$train['carriages']}}</p></li>
        <li><p>in Time :{{$train['intime']}}</p></li>
        <li> <p>Delayed :{{$train['delayed']}}</p></li>
    </ul>
   @endforeach
</body>
</html>