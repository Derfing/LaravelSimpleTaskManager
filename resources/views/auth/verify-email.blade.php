@extends('templates.baseTemplate')

@section('title', 'Подтверждение электронной почты')

@section('body')
    <livewire:auth.verify-email-component />
@endsection
