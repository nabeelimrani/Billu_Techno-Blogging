
<div>
    <div class="page-header">
        <div class="row align-items-center">
          <div class="col-auto">
            <span class="avatar avatar-md" style="background-image: url({{$author->picture}})"></span>

          </div>
          <div class="col-md-6">
            <h2 class="page-title">{{$author->name}}</h2>
            <div class="page-subtitle">
              <div class="row">
                <div class="col-auto">
                  
                    <a class="text-reset author-link" href="{{$author->username}}">
                       @ {{$author->username}}
                        <span class="typename">| {{$author->typename->name}}</span>
                      </a>
                </div>
               
               
              </div>
            </div>
          </div>
          <div class="col-auto d-md-flex">
            <input type="file" name="file" id="ChangeAuthoreProfilePicture" class="d-none" onchange="this.dispatchEvent(new InputEvent('input'))">
            <a href="#" onclick="event.preventDefault();document.getElementById('ChangeAuthoreProfilePicture').click();" class="btn btn-primary">
              
              Change Picture
            </a>
          </div>
        </div>
      </div>
</div>
