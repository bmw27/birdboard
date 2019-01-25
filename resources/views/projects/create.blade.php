@extends('layouts.app')

@section('content')
    <form action="/projects/create" method="POST">
        @csrf

        <h1>Create a Project</h1>
    </form>
@endsection
