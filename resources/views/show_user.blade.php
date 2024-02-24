@extends('templates.baseTemplate')

@section('title', 'ShowUser')

@section('body')
    <div>
        <livewire:read.user-component userId="{{ $userId }}">
    </div>
@endsection
