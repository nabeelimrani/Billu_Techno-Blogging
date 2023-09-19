
<div>
    <div class="page-header">
        <div class="row align-items-center">
          <div class="col-auto">
            <span class="avatar avatar-md" style="background-image: url(/samples/avatars/023m.jpg)"></span>
          </div>
          <div class="col-md-6">
            <h2 class="page-title">{{$author->name}}</h2>
            <div class="page-subtitle">
              <div class="row">
                <div class="col-auto">
                  
                    <a class="text-reset author-link" href="{{$author->username}}">
                        {{$author->username}}
                        <span class="typename">| {{$author->typename->name}}</span>
                      </a>
                </div>
               
               
              </div>
            </div>
          </div>
          <div class="col-auto d-md-flex">
            <a href="#" class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                <line x1="8" y1="9" x2="16" y2="9" />
                <line x1="8" y1="13" x2="14" y2="13" />
              </svg>
              Change Picture
            </a>
          </div>
        </div>
      </div>
</div>
