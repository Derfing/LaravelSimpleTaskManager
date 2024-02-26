@extends('templates.baseTemplate')

@section('body')
    <livewire:table.task tableId='{{ $tableId }}' taskId='{{ $taskId }}' />
@endsection
