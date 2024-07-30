@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{
                        $project->description }}
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Technologies:</strong>{{ $project->technologies }}
                        </li>
                        <li class="list-group-item">
                            <strong>Client:</strong> {{ $project->client }}
                        </li>
                        <li class="list-group-item">
                            <strong>Author:</strong> {{ $project->author }}
                        </li>
                        <li class="list-group-item">
                            <strong>Creation Date:</strong> {{ $project->creation_date }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
