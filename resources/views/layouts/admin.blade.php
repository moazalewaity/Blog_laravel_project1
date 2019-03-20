@include('layouts.header')
@include('layouts.nav')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">
    @include('layouts.msg')
        @yield('content')


    </section>
    <!-- /.content -->
</div>

@yield('script')
@include('layouts.footer')