@extends('layouts.app')

@section('content')
<h1>Tugas Saya</h1>


<div class="task-categories">
    <a href="" class="active">OTW</a>
    <a href="">TELAT</a>
    <a href="">DONE</a>
</div>

<div class="task-list">
    @foreach($tasks as $task)
    <div class="task-card">
        <h3>{{ $task['name'] }}</h3>
        <p>{{$task['isi']}}</p>
        <p>Deadline: {{ $task['deadline'] }}</p>
    </div>
    @endforeach
</div>
@endsection
