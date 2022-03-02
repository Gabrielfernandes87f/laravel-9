<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
@include('layouts.head')

</head>

<body>

    <header id="header" class="d-flex align-items-center">
        <x-navbar />
  </header><!-- End Header -->

    <main>
        <div class=" py-4 mb-4 mt-4">
            <div class="container-fluid">
                <div class="row">

                    @yield('content')
                </div>
            </div>
        </div>
    </main>



    <!-- FOOTER -->

    <footer id="footer">
        @extends('layouts.footer')

    </footer><!-- End Footer -->


</body>

</html>
