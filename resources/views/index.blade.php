
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
    <title>Document</title>
    <style>
        table td{
            border: 1px solid black;
        }
        table th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <blockquote>
        <hr>
        <h1>Student table</h1>
        <hr>
        <form action=""method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone">
            <br>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address">
            <br>
            <button type="submit">Submit</button>
        </form>
        <hr>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            @foreach($studentData as $student)
            <tr>
                <td>{{ $student-> name}}</td>
                <td>{{ $student-> email}}</td>
                <td>{{ $student-> phone}}</td>
                <td>{{ $student-> address}}</td>
                <td>
                    <a href="{{ url('edit/'.$student->id)}}">Edit</a>
                    <a href="{{ url ('delete/'.$student->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </blockquote>
</body>
</html>


{{-- <ul>
    @foreach ($userInfo as $user)
    <li>{{$user}}</li>

    @endforeach
</ul> --}}
