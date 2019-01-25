@extends('layouts.app')

@section('content')
    <form action="/projects" method="POST">
        @csrf

        <h1 class="mb-6">Create a Project</h1>

        <div class="mb-4">
            <label for="title_input">Title</label><br/>
            <input type="text" id="title_input" name="title">
        </div>

        <div class="mb-4">
            <label for="description_textarea">Description</label><br/>
            <textarea id="description_textarea" name="description"></textarea>
        </div>

        <div class="flex">
            <button type="submit" class="mr-3">Create</button>
            <a href="/projects">Cancel</a>
        </div>
    </form>
@endsection
