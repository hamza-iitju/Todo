@extends('master')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">{{ Session::get('success') }}</div>
@endif

<form action="{{route('todo.store')}}" method="POST" class="">
    {{ csrf_field() }}
    <input type="text" name="todo" class="form-control col-sm-12" placeholder="Create Todo">
</form>
<br>
@foreach($todos as $todo)
{{ $todo->todo }} 
<a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger btn-sm"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
<a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
@if(!$todo->completed)
<a href="{{ route('todo.complete', ['id' => $todo->id]) }}" class="btn btn-success btn-sm"> <i class="fa fa-check-square-o" aria-hidden="true"></i> </a>

@else

Completed

@endif

<br>
<hr>
@endforeach

@endsection