<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>
</head>

<body>
    <h1>Ciao a tutti</h1>
    <ul>
        @foreach($pages as $page)
        <li>
            <a href="{{route('capitolo', ['index' => $loop -> index])}}"> {{$page}}
            </a>
        </li>
        @endforeach
    </ul>
</body>

</html>