<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demmy</title>
    </head>
    <body>

        <ul>
        @foreach($users as $user)
        <li>{{ $user->firstname }} {{ $user->age }}</li>
        @endforeach
        </ul>

        <form action="/home" method="post">

            {{ csrf_field() }}
            <input type="text" name="firstname">
            <input type="text" name="lastname">
            <input type="text" name="age">
            <input type="submit">

        </form>
    </body>
</html>
