<!DOCTYPE html>
<html lang="en">

<head>
  @stack('style')
  @include('components.header')
</head>

<body class="d-flex flex-column min-vh-100">
  @include('components.topbar')
  @include('components.navbar')
  @yield('body')
  @include('components.search-modal')
  @include('components.footer')
</body>
<!-- jQuery (required by multiple plugins) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<!-- Bootstrap Bundle with Popper (for navbar/toggles) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('lib/twentytwenty/jquery.event.move.js') }}"></script>
<script src="{{ asset('lib/twentytwenty/jquery.twentytwenty.js') }}"></script>
<!-- App JS should load last, after all libraries -->
<script src="{{ asset('js/main.js')}}"></script>
@stack('js')

</html>