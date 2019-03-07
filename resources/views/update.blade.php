@extends('layout')

@section('content')

    <hr>

    <div class="row">
        <div class="col-lg-12">
            <h2>Replace your todo with a new one:</h2>
            <form action="{{ route('todos.save', ['id' => $todo->id ]) }}" method="post">
                        {{ csrf_field() }}
                        <input type="text" class="todo form-control input-lg" name="todo" value="{{ $todo->todo }}" placeholder="Create a new todo">
            </form>

        </div>
    </div>



@stop