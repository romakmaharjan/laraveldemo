
{{-- @extends('layouts')

@section('content')

<h1>This is laravel front page</h1>
@endsection --}}
<x:layouts>

</x:layouts>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update table</title>
</head>
<body>
    <blockquote>
        <hr>
        <h1>Update Student table</h1>
        <hr>
        <form action=""method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text"
            value="{{$student->name}}" name="name" id="name">
            <br>
            <label for="email">Email:</label>
            <input type="email"
            value="{{$student->email}}" name="email" id="email">
            <br>
            <label for="phone">Phone:</label>
            <input type="text"
            value="{{$student->phone}}" name="phone" id="phone">
            <br>
            <label for="address">Address:</label>
            <input type="text"
            value="{{$student->address}}" name="address" id="address">
            <br>
            <button type="submit">Update</button>
        </form>
    </blockquote>
</body>
</html>


{{-- <ul>
    @foreach ($userInfo as $user)
    <li>{{$user}}</li>

    @endforeach
</ul> --}}
