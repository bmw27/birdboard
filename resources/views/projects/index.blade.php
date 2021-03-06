@extends('layouts.app')

@section('content')
    <header class="flex items-center justify-between mb-3 py-4">
        <h2 class="text-grey text-base font-normal">My Projects</h2>

        <a href="/projects/create" class="button">Add Project</a>
    </header>

    <main class="flex flex-wrap -mx-3">
        @forelse ($projects as $project)
            <div class="w-full lg:w-1/3 px-3 pb-6">
                <div class="bg-white p-5 rounded-lg shadow" style="height: 200px;">
                    <h3 class="font-normal text-xl mb-3 py-4 -ml-5 border-l-4 border-blue-light pl-4">
                        <a href="{{ $project->path() }}" class="text-black no-underline">
                            {{ $project->title }}
                        </a>
                    </h3>

                    <div class="text-grey">{{ str_limit($project->description, 100) }}</div>
                </div>
            </div>
        @empty
            <div>No projects yet</div>
        @endforelse
    </main>
@endsection
