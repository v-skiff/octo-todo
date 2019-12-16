@extends('layout')

@section('content')


<div class="container">
    <h3>Create task</h3>
    
    @include('errors')

    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => ['tasks.store']]) !!}
                <div class="form-group">
                    <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                    <br>
                    <textarea class="form-control" name="description" rows="8" cols="80">{{ old('description') }}</textarea>
                    <br>
                    <button class="btn btn-success" type="submit" name="button">Submit</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
