<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			Dashboard
		</h2>
	</x-slot>

	<!--<div class="py-5">-->
	<!--	<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">-->
	<!--		<div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">-->
	<!--			<div class="p-6 text-gray-900">-->
	<!--				Selamat datang {{ Auth::user()->name }}!-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<div class="flex flex-col items-center justify-center">
		<div style="font-family: 'Pacifico';font-size: 6rem;" class="text-center text-gray-800">Siwa Sinta</div>
		<img src="{{ asset('traktor.png') }}" class="w-1/2" style="width:50%" />

	</div>

	{{-- @if (Auth::user()->role == 'petani')
		<div class="py-5">
			<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
				<div class="overflow-hidden bg-white p-5 px-4 shadow-sm sm:rounded-lg">
					<iframe src="https://maps.google.com/maps?q={{ Auth::user()->petani->kordinat_lahan }}&z=15&output=embed" width="100%" height="450" frameborder="0" style="border:0"></iframe>
					<div class="mt-16">
						<table class="w-full">
							<tbody>
								<tr>
									<td class="border px-2 py-1 text-sm">Nama</td>
									<td class="border px-2 py-1 text-sm">{{ Auth::user()->petani->name }}</td>
								</tr>
								<tr>
									<td class="border px-2 py-1 text-sm">Email</td>
									<td class="border px-2 py-1 text-sm">{{ Auth::user()->petani->user->email }}</td>
								</tr>
								<tr>
									<td class="border px-2 py-1 text-sm">NIK</td>
									<td class="border px-2 py-1 text-sm">{{ Auth::user()->petani->nik }}</td>
								</tr>
								<tr>
									<td class="border px-2 py-1 text-sm">Kelompok</td>
									<td class="border px-2 py-1 text-sm">{{ Auth::user()->petani->nama_kelompok }}</td>
								</tr>
								<tr>
									<td class="border px-2 py-1 text-sm">Alamat</td>
									<td class="border px-2 py-1 text-sm">{{ Auth::user()->petani->alamat }}</td>
								</tr>
								<tr>
									<td class="border px-2 py-1 text-sm">Luas Lahan</td>
									<td class="border px-2 py-1 text-sm">{{ Auth::user()->petani->luas_lahan }} Ha</td>
								</tr>
								<tr>
									<td class="border px-2 py-1 text-sm">Kordinat Lahan</td>
									<td class="border px-2 py-1 text-sm">{{ Auth::user()->petani->kordinat_lahan }} Ha</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	@endif --}}

	@push('top')
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	@endpush
</x-app-layout>
