@extends('templates.baseTemplate')

@section('title', 'ShowUser')

@section('body')
    <div>
        <livewire:read.user-component userId="{{ $userId }}" />
    </div>
    @if (Auth::user()->id == $userId)
        <div>
            <livewire:profile.update-profile-information-form />
        </div>
        <div>
            <livewire:profile.update-password-form />
        </div>
        <div>
            <livewire:profile.delete-user-form />
        </div>
    @endif
@endsection
