@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Profile - Page')
@section('content')



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
        <h4>Personal Detail</h4>
        <div>
           @livewire('author-personal-detail')
        </div>
      </div>
      <div class="tab-pane" id="tabs-password">
        <h4>Profile tab</h4>
        <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
      </div>
      
    </div>
  </div>
</div>

</div>



@endsection