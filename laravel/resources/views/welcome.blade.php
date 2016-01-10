@extends('layouts.MasterPage')
@section('content')
    <div class="jumbotron" style="text-align:center">
        <h1>Welcome!<br /><small>Please fill in your account details below:</small></h1>
    </div>
    @include('auth.login')
@endsection
