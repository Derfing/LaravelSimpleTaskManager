@extends('templates.baseTemplate')

@section('body')
    <livewire:table.tasks tableId='{{ $tableId }}' />
@endsection
