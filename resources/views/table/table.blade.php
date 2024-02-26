@extends('templates.baseTemplate')

@section('body')
    <livewire:table.table tableId="{{ $tableId }}" />
@endsection
