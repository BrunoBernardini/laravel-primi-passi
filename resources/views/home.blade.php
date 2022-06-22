<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="css/style.css">
    <title>Homepage</title>
</head>
<body>
    <div class="container">
        <header>
            <ul>
                <li><a href="{{route("about")}}">About</a></li>
                <li><a href="{{route("donate")}}">Donate</a></li>
            </ul>
        </header>
        <h1>
            @if ($time>=5 AND $time<13)
                <span class="morning">Good Morning,</span>
            @elseif ($time>=13 AND $time<18)
                <span class="afternoon">Good Afternoon,</span>
            @elseif ($time>=18 AND $time<24)
                <span class="evening">Good Evening,</span>
            @elseif ($time>=0 AND $time<5)
                <span class="night">Good Night,</span>
            @endif
            <span class="name">{{$name}}!</span>
        </h1>
        <h5 class="mt-4">Here there are your votes!</h5>
        <ul>
            @foreach ($votes as $vote)
                <li>{{$vote}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
