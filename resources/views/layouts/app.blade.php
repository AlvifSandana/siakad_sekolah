<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
  <div class="wrapper">
    @include('layouts.sidebar')
    <div class="main-panel">
      @include('layouts.navbar')
      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      @include('layouts.footer')
    </div>
  </div>
  @include('layouts.js')
</body>
</html>