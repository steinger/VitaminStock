@extends('layouts.app')

@section('content')
<div class="grid-container">
    <h3>Dashboard</h3>

    <div class="medium-6 cell">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!
    </div>
</div>

@endsection
