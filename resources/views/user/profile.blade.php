@extends('templates.baseTemplate')

@section('body')
    <livewire:user.profile userId="{{ $userId }}" />
@endsection
