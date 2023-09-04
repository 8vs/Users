@extends('layouts.base')

@section('content')
    @if(empty($users))
        Нет записей в базе данных.
    @else
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Age</th>
                </tr>
            </thead>
        
            @foreach($users as $user)
                <tr>
                    <td> {{ $user->id }}</td>
                    <td> {{ $user->name }}</td>
                    <td> {{ $user->city }}</td>
                    <td> {{ $user->age }}</td>
                </tr>
            @endforeach
        </table> 
    @endif
@endsection