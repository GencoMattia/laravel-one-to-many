@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
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
                <label for="type_id">
                    Type:
                </label>
                <select class="form-select" aria-label="Default select example" name="type_id" id="type_id">
                    @foreach ( $types as $type )
                        <option value="{{ $type->id }}"
                            {{ ($type->id == old("type_id", $project->type_id)) ? "selected" : "" }}
                            >{{ $type->name }}</option>
                    @endforeach
                </select>
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
