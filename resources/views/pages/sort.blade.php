<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{ $reps->sum('apc') }}
    <p>Divide this abeg</p>
    @foreach ($reps as $reps)
        {{ $reps->id }}
    @endforeach
</body>

</html>
