@extends('template')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Ask a Question</h1>
            <p>
                Ask any questions you want to know about Laravel and we will get answers for you!
            </p>
            <p>
                <a href="{{ route('questions.create') }}" class="btn btn-primary btn-lg" role="button">Ask Now</a>
            </p>
            
            
        </div>
        <h2>Recent Questions:</h2>

        @foreach ($questions as $question)

                
                    <div class="well">
                        <h1 class="lead">
                            {{$question->title}}
                        </h1>
                        <p>
                            {{$question->description}}
                        </p>
                        <a href="{{ route('questions.show', $question->id) }}" class="btn btn-primary btn-lg">View Details</a>
                    </div>
             
                
            @endforeach
    </div>
@endsection