<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
	<style>
		[x-cloak] {
			display: none !important;
		}
	</style>
	<!-- Scripts -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])

	@stack('top')
</head>

<body class="font-sans antialiased">
	@include('sweetalert::alert')
	<div class="flex min-h-screen flex-col md:flex-row">
		<div class="hidden min-h-screen w-full bg-slate-900 md:block md:w-[20%]">
			<div class="py-6 text-center font-mono text-sm font-black tracking-wider text-white">ALSITAN</div>
			<div class="px-2"><a href="{{ route('dashboard') }}" class="@if (Route::is(['dashboard'])) bg-slate-950 @else bg-slate-900 @endif block rounded px-2.5 py-1.5 text-gray-300 transition-all duration-150 hover:bg-slate-950 hover:text-white">Dashboard</a></div>
			@if (Auth::user()->role == 'admin' || Auth::user()->role == 'staf')
				<div class="mt-5 px-2">
					<div class="mb-4 px-2.5 font-mono text-[0.72rem] font-bold text-gray-500">MASTER</div>
					<div class="space-y-1">
						<a href="{{ route('petani.index') }}" class="@if (Route::is(['petani.index', 'petani.edit', 'petani.create', 'petani.show'])) bg-slate-950 @else bg-slate-900 @endif block rounded px-2.5 py-1.5 text-gray-300 transition-all duration-150 hover:bg-slate-950 hover:text-white">Petani</a>
						<a href="{{ route('alsitan.index') }}" class="@if (Route::is(['alsitan.index', 'alsitan.edit', 'alsitan.create'])) bg-slate-950 @else bg-slate-900 @endif block rounded px-2.5 py-1.5 text-gray-300 transition-all duration-150 hover:bg-slate-950 hover:text-white">Alsitan</a>
						@if (Auth::user()->role == 'admin')
							<a href="{{ route('users.index') }}" class="@if (Route::is(['users.index', 'users.edit', 'users.create'])) bg-slate-950 @else bg-slate-900 @endif block rounded px-2.5 py-1.5 text-gray-300 transition-all duration-150 hover:bg-slate-950 hover:text-white">User</a>
						@endif
					</div>
				</div>
			@endif

			@if (Auth::user()->role == 'admin' || Auth::user()->role == 'kadis' || Auth::user()->role == 'staf')

				<div class="mt-10 px-2">
					<div class="mb-4 px-2.5 font-mono text-[0.72rem] font-bold text-gray-500">PINJAM SEWA</div>
					<div class="space-y-1">
						@if (Auth::user()->role == 'admin' || Auth::user()->role == 'staf')
							<a href="{{ route('persyaratan.index') }}" class="@if (Route::is(['persyaratan.index'])) bg-slate-950 @else bg-slate-900 @endif block rounded px-2.5 py-1.5 text-gray-300 transition-all duration-150 hover:bg-slate-950 hover:text-white">Persyaratan</a>
						@endif
						@if (Auth::user()->role == 'admin' || Auth::user()->role == 'kadis')
							<a href="{{ route('persetujuan.index') }}" class="@if (Route::is(['persetujuan.index', 'persetujuan.show'])) bg-slate-950 @else bg-slate-900 @endif block rounded px-2.5 py-1.5 text-gray-300 transition-all duration-150 hover:bg-slate-950 hover:text-white">Persetujuan</a>
						@endif
					</div>
				</div>
			@endif

			@if (Auth::user()->role == 'admin' || Auth::user()->role == 'staf')
				<div class="mt-5 px-2">
					<div class="mb-4 px-2.5 font-mono text-[0.72rem] font-bold text-gray-500">Laporan</div>
					<div class="space-y-1">
						<a href="{{ route('laporan.index') }}" class="@if (Route::is(['laporan.index'])) bg-slate-950 @else bg-slate-900 @endif block rounded px-2.5 py-1.5 text-gray-300 transition-all duration-150 hover:bg-slate-950 hover:text-white">Laporan</a>
					</div>
				</div>
			@endif

			{{-- @if (Auth::user()->role == 'admin' || Auth::user()->role == 'staf')
				<div class="mt-10 px-2">
					<div class="mb-4 px-2.5 font-mono text-[0.72rem] font-bold text-gray-500">LAPORAN</div>
					<div class="space-y-1">
						<a href="" class="block rounded px-2.5 py-1.5 text-gray-300 transition-all duration-150 hover:bg-slate-950 hover:text-white">SPK</a>
						<a href="" class="block rounded px-2.5 py-1.5 text-gray-300 transition-all duration-150 hover:bg-slate-950 hover:text-white">Pembayaran</a>
						<a href="" class="block rounded px-2.5 py-1.5 text-gray-300 transition-all duration-150 hover:bg-slate-950 hover:text-white">Rekap</a>
					</div>
				</div>
			@endif --}}
		</div>
		<div class="min-h-screen w-full bg-gray-100 md:w-[80%]">
			@include('layouts.navigation')
			<!-- Page Heading -->
			@if (isset($header))
				<header class="px-4 md:px-1.5">
					<div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-6 sm:px-6 lg:px-8">
						{{ $header }}
					</div>
				</header>
			@endif
			{{-- <iframe src="https://maps.google.com/maps?q=-7.730365, 110.603738&z=15&output=embed" width="360" height="270" frameborder="0" style="border:0"></iframe> --}}
			<!-- Page Content -->
			<main class="px-4 md:px-1.5">
				{{ $slot }}
			</main>
		</div>
	</div>

	@stack('bottom')
</body>

</html>
