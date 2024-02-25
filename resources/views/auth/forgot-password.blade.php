@extends('templates.baseTemplate')

@section('title', 'Восстановление пароля')

@section('body')
    <livewire:auth.forgot-password-component>
    @endsection
