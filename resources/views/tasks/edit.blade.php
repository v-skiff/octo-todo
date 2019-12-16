@extends('layout')

@section('content')


<div class="container">
    <h3>Edit task - {{ $task->id }}</h3>

    @include('errors')

    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => ['tasks.update', $task->id], 'method' => 'PUT']) !!}
                <div class="form-group">
                    <input class="form-control" type="text" name="title" value="{{ $task->title }}">
                    <br>
                    <textarea class="form-control" name="description" rows="8" cols="80">{{ $task->description }}</textarea>
                    <br>
                    <button class="btn btn-warning" type="submit" name="button">Submit</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
