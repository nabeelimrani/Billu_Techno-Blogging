<div>


    @if(Session()->get('fail'))
   <div class="alert alert-danger" role="alert">
    
    <p><b>Warning:</b>&nbsp; {{Session()->get('fail')}}</p>
     
   </div>
   @endif
    <form class="card card-md" wire:submit.prevent="SignHandler()" method="post" autocomplete="off" novalidate="">
        <div class="card-body">
          <h2 class="card-title text-center mb-4">Create new account</h2>
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" wire:model="name">
            @error('name')
            <span class="text-danger">
              {{ $message }}
            </span>
        @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" wire:model="email">
            @error('email')
            <span class="text-danger">
              {{ $message }}
            </span>
        @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <div class="input-group input-group-flat">
              <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" autocomplete="off" wire:model="password">
              <span class="input-group-text">
                <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
                </a>
              </span>
            </div>
            @error('password')
            <span class="text-danger">
              {{ $message }}
            </span>
        @enderror
          </div>
          <div class="mb-3">
            <label class="form-check">
              <input type="checkbox" class="form-check-input">
              <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms and policy</a>.</span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Create new account</button>
          </div>
        </div>
      </form>
</div>
