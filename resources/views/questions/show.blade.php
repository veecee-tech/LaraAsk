@extends('template')


@section('content')

<div class="container">
    <div class="well">
        <h1 class="lead">
            {{$question->title}}
        </h1>
        <p>
            {{$question->description}}
        </p>
    </div>
</div>
    
@endsection
