@extends('templates.baseTemplate')

@section('title', 'CreateTable')

@section('body')
    <div>
        <livewire:create.table-component userId="{{ $userId }}">
    </div>
@endsection
