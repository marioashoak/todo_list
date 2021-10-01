@extends('template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col mt-4">

            <div class="card card-header">
                {{ $todo->name }}
            </div>

            <div class="card card-body">
                {{ $todo->description }}
            </div>

        </div>
    </div>
</div>

@endsection
