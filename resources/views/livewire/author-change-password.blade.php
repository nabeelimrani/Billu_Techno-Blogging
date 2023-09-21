<div>
    <form method="post" wire:submit.prevent='ChangePassword()'>
        <div class="row">

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Current Password</label>
                    <input type="password" class="form-control @error('cpass') is-invalid @enderror" placeholder="Current Password"  wire:model="cpass">
                    @error('cpass')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
               
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input type="password" class="form-control @error('npass') is-invalid @enderror" placeholder="New Password"  wire:model="npass">
                    @error('npass')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
               
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control @error('cfpass') is-invalid @enderror" placeholder="Confirm Password" wire:model="cfpass">
                    @error('cfpass')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
               
            </div>

           
               
                
            
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
