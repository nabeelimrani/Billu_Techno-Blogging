@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Home - Page')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@if(Session()->has('success'))
<div class="alert alert-success" id="success-message"    >
    {!!Session()->get('success')!!}
</div>
@endif


<script>
    $(document).ready(function() {
        // Wait for 2 seconds and then hide the success message
        setTimeout(function() {
            $('#success-message').fadeOut('slow');
        }, 2000); // 2000 milliseconds = 2 seconds
    });
    </script>


@endsection