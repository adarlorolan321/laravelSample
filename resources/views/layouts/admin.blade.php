<!--
=========================================================
* Soft UI Dashboard - v1.0.5
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
@include('partials.header')
@include('sweetalert::alert')

<body class="g-sidenav-show  bg-gray-100">
  @include('partials.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- End Navbar -->

    @if(Session::has('success'))
    <div class="alert alert-success text-light text-center font-weight-bold">{{session()->get('success')}}</div>
    @endif
    
    @if(Session::has('danger'))
    <div class="alert alert-danger text-light text-center font-weight-bold">{{session()->get('danger')}}</div>
    @endif
    @if(count($errors)>0)
   @foreach ($errors->all() as $error )
<div class="alert alert-danger"> {{$error}}</div>
   @endforeach
    @endif
      
    

    @yield('content')
  </main>
  @include('partials.footer')
</body>

</html>