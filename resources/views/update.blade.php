@extends('master')

@section('content')

<form action="{{route('todo.save', ['id' => $todo->id])}}" method="POST" class="">
	{{ csrf_field() }}
	<input type="text" name="todo" value="{{ $todo->todo }}" class="form-control" placeholder="Create Todo">
</form>

@endsection