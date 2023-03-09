<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }} </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('stisla-master/node_modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla-master/node_modules/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('stisla-master/node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('stisla-master/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla-master/node_modules/ionicons201/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla-master/node_modules/prismjs/themes/prism.css')}}">


    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('stisla-master/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla-master/assets/css/components.css') }}">
</head>

@include('admin.layouts.nav')
@include('admin.layouts.side')

@yield('content')

<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2018
        <div class="bullet"></div>
        Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
    </div>
    <div class="footer-right">2.3.0</div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{ asset('stisla-master/assets/js/stisla.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

@yield('script')

<!-- JS Libraies -->
<script src="{{ asset('stisla-master/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('stisla-master/node_modules/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('stisla-master/node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('stisla-master/node_modules/summernote/dist/summernote-bs4.js') }}"></script>
<script src="{{ asset('stisla-master/node_modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
<script src="{{ asset('stisla-master/node_modules/prismjs/prism.js')}}"></script>


<!-- Template JS File -->
<script src="{{ asset('stisla-master/assets/js/scripts.js') }}"></script>
<script src="{{ asset('stisla-master/assets/js/custom.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('stisla-master/assets/js/page/index.js') }}"></script>
<script src="{{ asset('stisla-master/assets/js/page/modules-ion-icons.js') }}"></script>
<script src="{{ asset('stisla-master/assets/js/page/bootstrap-modal.js')}}"></script>


</body>

</html>
