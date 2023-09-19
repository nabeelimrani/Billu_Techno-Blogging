<div>
    <form method="post" wire:submit.prevent='UpdateDetail()'>
        <div class="row">

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name"  wire:model="name">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
               
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username"  wire:model="username">
                    @error('username')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
               
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" wire:model="email">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
               
            </div>

           
                <div class="mb-3">
                    <label class="form-label">Biography</label>
                   <textarea class="form-control @error('biography') is-invalid @enderror" wire:model="biography"  placeholder="Biography..." rows="6"></textarea>
                   @error('biography')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                
            
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
