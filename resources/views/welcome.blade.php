@extends('layouts.app')
@section('title')
welcome
@stop
@section('content')
<div class="jumbotron">
      <div class="container">
        <h1>Pagemarks!</h1> <h2>Your internet data folder</h2>
        <p>You can keep all your internet data in an organised way .You can discuss on it, you can share  and you can do a lot more exciting stuff !!</p>
        <p><a role="button" class="btn btn-primary btn-lg" href="auth/register">Register »</a> </p>
        <p>If you already have an account <a href="auth/login">Login now </a> </p>
      </div>
    </div>
@stop