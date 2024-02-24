@extends('templates.baseTemplate')

@section('title', 'CreateUser')

@section('body')
    <div>
        <form wire:submit="save">
            @csrf
            <input type="text" wire:model.live="name">
            <input type="text" wire:model="email">
            <input type="text" wire:model="password">
            <select wire:model="role">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
