@extends('template')

@section('content')

@foreach ($questions as $question)

<div class="container">
    <div class="well">
        <h1 class="lead">
            {{$question->title}}
        </h1>
        <p>
            {{$question->description}}
        </p>
        <a href="{{ route('questions.show', $question->id) }}" class="btn btn-primary">View Details</a>
    </div>

    <div class="d-flex justify-content-center">
        {!! $questions->links() !!}
    </div>
</div>
    
@endforeach

@endsection