<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="" name="description">
		<meta content="" name="author">
		<meta name="keywords" content=""/>
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }} - @yield('title')</title>
        <link rel="icon" href="{{ asset('frontend/assets/images/favicon.png') }}" type="image/x-icon"/>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap');
        </style>
        <link href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />
        <link href="{{asset('admin/assets/css/style.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />
        <link href="{{asset('admin/assets/css/dark.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />
        <link href="{{asset('admin/assets/css/skin-modes.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />
        <link href="{{asset('admin/assets/css/updatestyles.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />
        <link href="{{asset('admin/assets/css/animated.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />
        <link href="{{asset('admin/assets/css/icons.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />
        <link href="{{asset('admin/assets/plugins/toastr/toastr.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />
		<style>
			:root {
                --primary:#0d6efd;
                --secondary:#6c757d;
			}

		</style>
	</head>

	<body class="">
		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-4 col-lg-7 col-md-8 col-sm-9 col-10 p-md-0">
							<div class="card p-5">
							   @yield('content')
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/toastr/toastr.min.js')}}"></script>
        @if (Session::has('error'))
            <script>
                toastr.error("{!! Session::get('error') !!}");
            </script>
        @elseif(Session::has('success'))
            <script>
                toastr.success("{!! Session::get('success') !!}");
            </script>
        @elseif(Session::has('status'))
            <script>
                toastr.success("{!! Session::get('status') !!}");
            </script>
        @elseif(Session::has('info'))
            <script>
                toastr.info("{!! Session::get('info') !!}");
            </script>
        @elseif(Session::has('message'))
            <script>
                toastr.info("{!! Session::get('message') !!}");
            </script>
        @elseif(Session::has('warning'))
            <script>
                toastr.warning("{!! Session::get('warning') !!}");
            </script>
        @endif
        @yield('scripts')
        @yield('modal')
	</body>
</html>
