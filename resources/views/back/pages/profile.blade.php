@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Profile - Page')
@section('content')


@if(session('success') || session('warning') || session('info') || session('danger'))
<div class="alert alert-{{ session('success') ? 'success' : (session('warning') ? 'warning' : (session('info') ? 'info' : 'danger')) }}" id="alert">
  {{ session('success') . session('warning') . session('info') . session('danger') }}
</div>
@endif



@livewire('author-profile-header')
<hr>
<div class="row">
    <div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
      <li class="nav-item">
        <a href="#tabs-detail" class="nav-link active" data-bs-toggle="tab">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M7 12l5 5l10 -10" />
                <path d="M2 12l5 5m5 -5l5 -5" />
            </svg>
            
            
          Personal Detail</a>
      </li>
      <li class="nav-item">
        <a href="#tabs-password" class="nav-link" data-bs-toggle="tab">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <rect x="8" y="7" width="8" height="10" rx="4" />
                <line x1="12" y1="12" x2="12" y2="16" />
                <line x1="12" y1="12" x2="16" y2="12" />
            </svg>
            
          Change Password</a>
      </li>
     
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content">
      <div class="tab-pane active show" id="tabs-detail">
        
        <div>
           @livewire('author-personal-detail')
        </div>
      </div>
      <div class="tab-pane" id="tabs-password">
        
        <div>
          @livewire('author-change-password')
        </div>
      </div>
      
    </div>
  </div>
</div>

</div>

<script>

    setTimeout(function() {
        document.getElementById('alert').style.display = 'none';
    }, 2000); // 2000 milliseconds (2 seconds)
</script>
 

@endsection