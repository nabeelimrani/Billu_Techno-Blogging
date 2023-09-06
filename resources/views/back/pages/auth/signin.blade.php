@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Signin - Page')
@section('content')


<div class="page page-center">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark"><img src="./back/static/logo.svg" height="36" alt=""></a>
      </div>
    @livewire('author-sign-form')
      <div class="text-center text-muted mt-3">
        Already have account? <a href="{{route('author.login')}}" tabindex="-1">Sign in</a>
      </div>
    </div>
  </div>

@endsection