@extends('layouts.app')

@section('title','User Details')

@section('content')
<div class="container">
    <h2 class="mb-3">User Details</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr><th>ID</th><th>Name</th><th>Email</th></tr>
        </thead>
        <tbody>
            @foreach($item as $user)
            <tr><td>{{ $user->id }}</td><td>{{ $user->name }}</td><td>{{ $user->email }}</td></tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
