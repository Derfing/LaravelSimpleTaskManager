@extends('templates.baseTemplate')

@section('title', 'TestView')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <livewire:read.task-component taskId='1'>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <livewire:read.user-component userId='1'>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <livewire:read.table-component tableId='1'>
            </div>
        </div>
    </div>

@endsection
