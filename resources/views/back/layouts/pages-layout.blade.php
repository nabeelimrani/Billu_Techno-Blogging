
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('pageTitle')</title>
    <!-- CSS files -->
    <base href="/">
    <link href="./back/dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="./back/dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="./back/dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="./back/dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    
    <link href="{{asset('back/dist/libs/toastr/jquery.toast.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('back/dist/libs/ijaboCropTool/ijaboCropTool.min.css')}}" rel="stylesheet"/>


    @stack('stylesheets')
    @livewireStyles
    <link href="./back/dist/css/demo.min.css?1684106062" rel="stylesheet"/>
 
  </head>
  <body >

    <div class="wrapper">
      <!-- Navbar -->
     @include('back.layouts.inc.header')
      <div class="page-wrapper">
        <!-- Page header -->
        <div class="container-xl">
      @yield('pageHeader')  
    </div>

        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
           @yield('content')
          </div>
        </div>
        @include('back.layouts.inc.footer')
      </div>
    </div>
   
    <!-- Libs JS -->
    <script src="{{asset('back/dist/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('back/dist/libs/toastr/jquery.toastr.min.js')}}"></script>
    <script src="{{asset('back/dist/libs/ijaboCropTool/ijaboCropTool.min.js')}}"></script>
    <script src="./back/dist/libs/apexcharts/dist/apexcharts.min.js" ></script>
   
  
    <!-- Tabler Core -->
    <script src="./back/dist/js/tabler.min.js" ></script>
 

    @stack('scripts')
    @livewireScripts
   <script>
    window.addEventListener('showToastr', function(event){
      
      toastr.remove();
      if(event.detail.type === 'info')
      {
        toastr.info(event.detail.message);
      }
      else if (event.detail.type == "success")
      {
        toastr.success(event.detail.message);
      }
      else if (event.detail.type == "error")
      {
        toastr.error(event.detail.message);
      }
      else if (event.detail.type == "warning")
      {
        toastr.warning(event.detail.message);
      }
      else{
        return false;
      }

    });
    </script>
      
    <script src="./back/dist/js/demo.min.js" ></script>
  
  </body>
</html>