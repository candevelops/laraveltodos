@extends('layout')

@section('content')

    <hr>

    <div class="row">
        <div class="col-lg-12 col-lg-offset-3">

            <form action="/create/todo" method="post">

                {{ csrf_field() }}
                <h2>Feel free to add a new todo here:</h2>
                <input type="text" class="todo form-control-lg" name="todo" placeholder="Create a new todo">
        
            </form>
            </br>

        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-lg-12 col-lg-offset-3">
            @foreach($todos as $todo)
                {{ $todo->todo }} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger"> x </a>
                <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info btn-xs"> update </a>

                @if(!$todo->completed)

                <a href="{{ route('todos.completed', [ 'id' => $todo->id]) }}" class="btn btn-xs btn-success">Mark as completed</a>

                @else

                <span class="text-success">Completed!</span>

                @endif

                <hr>
            @endforeach
        </div>
    </div>

@stop