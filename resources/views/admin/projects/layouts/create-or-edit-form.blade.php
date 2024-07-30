@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="@yield("form-action")" method="POST">
            @csrf
            @yield("form-method")

            <div class="mb-3">
                <label for="title">
                    Title:
                </label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old("title", $project->title) }}">
            </div>
            <div class="mb-3">
                <label for="image">
                    Image url:
                </label>
                <input type="text" name="image" id="image" class="form-control" value="{{ old("image", $project->image) }}">
            </div>
            <div class="mb-3">
                <label for="technologies">
                    Technologies:
                </label>
                <input type="text" name="technologies" id="technologies" class="form-control" value="{{ old("technologies", $project->technologies) }}">
            </div>
            <div class="mb-3">
                <label for="client">
                    Client:
                </label>
                <input type="text" name="client" id="client" class="form-control" value="{{ old("client", $project->client) }}">
            </div>
            <div class="mb-3">
                <label for="description">
                    Descrizione
                </label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old("description", $project->description) }}</textarea>
            </div>

            <input type="submit" value="@yield("create-form-button")" class="btn btn-primary btn-lg me-4">
            <input type="reset" value="Reset" class="btn btn-primary btn-lg">
        </form>
    </div>
</div>
@endsection
