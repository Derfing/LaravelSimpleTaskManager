@extends('templates.baseTemplate')

@section('title', 'CreateTask')

@section('body')
    <div>
        <livewire:create.task-component userId="{{ $userId }}">
    </div>
@endsection
