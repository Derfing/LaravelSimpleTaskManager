@extends('templates.baseTemplate')

@section('title', 'CreateTable')

@section('body')
    <div>
        <livewire:read.user-component userId="{{ $userId }}">
    </div>
@endsection
