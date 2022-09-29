<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <form action="{{ route('test.validation') }}" method="POST">
        @csrf
        <label for="email">email</label>
        <input type="email" value="{{ old('email') }}" name="email" id="">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        @enderror
        <label for="password">password</label>
        <input type="password" name="password" id="">
        <input type="submit">
</form>
</body>

</html>
