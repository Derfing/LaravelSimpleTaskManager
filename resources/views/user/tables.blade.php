@extends('templates.baseTemplate')

@section('body')
    <livewire:user.tables userId="{{ $userId }}" />
@endsection
