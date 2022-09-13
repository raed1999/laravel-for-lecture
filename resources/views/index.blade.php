<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('add.store') }}" method="post">
        @csrf

        @if(session('status'))
            {{ session('status') }}
        @endif
        <br>

        <input type="text" name="num1" id="" value="{{ old('num1') }}" placeholder="Enter num1">
        <input type="text" name="num2" id="" value="{{ old('num2') }}" placeholder="Enter num2">
        <button name="btnAdd" type="submit">Add</button>
        <br>
        @isset($sum)
            Result: {{ $sum }}
        @endisset
    </form>
</body>

</html>
