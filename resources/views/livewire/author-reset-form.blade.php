<div>
    @if(Session()->get('fail'))
   <div class="alert alert-danger" role="alert">
    
    <p><b>Error:</b>&nbsp; {!!Session()->get('fail')!!}</p>
     
   </div>
   @endif
   @if(Session()->get('success'))
   <div class="alert alert-success" role="alert">
    
    <p><b>Success:</b>&nbsp; {!!Session()->get('success')!!}</p>
     
   </div>
   @endif
    <form wire:submit.prevent='ResetHandler()' method="post" autocomplete="off" novalidate="">
        @csrf
        <div class="card card-md">
            <div class="card-body">
              <h2 class="h2 text-center mb-4">Reset Password</h2>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror "disabled wire:model="email" placeholder="Enter Email" autocomplete="off">
          @error('email')
              <span class="text-danger">
                {{ $message }}
              </span>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">
            New Password
                  </label>
          <div class="input-group input-group-flat">
            <input type="password" class="form-control @error('newpassword') is-invalid @enderror " wire:model="newpassword" placeholder="Enter New Password" autocomplete="off" >
            <span class="input-group-text">
              <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
              </a>
            </span>
          </div>
          @error('newpassword')
              <span class="text-danger">
                {{ $message }}
              </span>
          @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">
             Confirm Password
                    </label>
            <div class="input-group input-group-flat">
              <input type="password" class="form-control @error('confirmpassword') is-invalid @enderror " wire:model="confirmpassword" placeholder="Confirm Password" autocomplete="off" >
              <span class="input-group-text">
                <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
                </a>
              </span>
            </div>
            @error('confirmpassword')
              <span class="text-danger">
                {{ $message }}
              </span>
          @enderror
          </div>
        <div class="mb-2">
          <label class="form-label">
           <a href="{{route('author.login')}}">Back to Login Page</a>
          </label>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">Reset Password</button>
        </div>
      </form>


</div>
