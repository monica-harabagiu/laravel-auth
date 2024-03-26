@extends('layouts.app')

@section('title', 'Projects | Edit')

@section('content')

<main class="container mt-5">

    <h2>Edit your project</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dashboard.projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input value="{{ old('title', $project->title) }}" name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3">{{ old('description', $project->description) }}</textarea>
        </div>

        <div class="mb-3">
          <label for="img" class="form-label">Image URL</label>
          <input value="{{ old('img', $project->img) }}" name="img" type="text" class="form-control" id="img">
        </div>

        <div class="mb-3">
            <label for="software" class="form-label">Softwares</label>
            <input value="{{ old('software', $project->software) }}" name="software" type="text" class="form-control" id="software">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</main>

@endsection