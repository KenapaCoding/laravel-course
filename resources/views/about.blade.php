<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Page</title>
</head>
<body>
    <h1>Hello from about page view, I am {{$data}}</h1>
    <p>Age : {{$umur}}</p>
    @if ($umur > 18)
        <h3>You have rights to voting presiden</h3>
    @else
        <h3>You dont have rights to vote</h3>
    @endif
</body>
</html>
