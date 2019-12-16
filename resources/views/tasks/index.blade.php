@extends('layout')

@section('content')

<div class="container">
    <h3>My tasks</h3>
    <a href="{{ route('tasks.create') }}" class="btn btn-success">Create</a>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Actions</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->title }}</td>
                            <td>
                                <a href="{{ route('tasks.show', $task->id) }}">
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                </a>

                                <a href="{{ route('tasks.edit', $task->id) }}">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>

                                {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'DELETE']) !!}
                                    <button onclick="return confirm('Are you sure?')">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </button>
                                {!! Form::close() !!}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
