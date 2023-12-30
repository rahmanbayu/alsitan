<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			{{ $petani->name }}
		</h2>
	</x-slot>

	<div class="py-5">
		<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="overflow-hidden bg-white p-5 px-4 shadow-sm sm:rounded-lg">
				<iframe src="https://maps.google.com/maps?q={{ $petani->kordinat_lahan }}&z=15&output=embed" width="100%" height="450" frameborder="0" style="border:0"></iframe>
				<div class="mt-16">
					<table class="w-full">
						<tbody>
							<tr>
								<td class="border px-2 py-1 text-sm">Nama</td>
								<td class="border px-2 py-1 text-sm">{{ $petani->name }}</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm">Nomor Telephone</td>
								<td class="border px-2 py-1 text-sm">{{ $petani->phone }}</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm">NIK</td>
								<td class="border px-2 py-1 text-sm">{{ $petani->nik }}</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm">Kelompok</td>
								<td class="border px-2 py-1 text-sm">{{ $petani->nama_kelompok }}</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm">Kelompok</td>
								<td class="border px-2 py-1 text-sm">{{ $petani->job }}</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm">Alamat</td>
								<td class="border px-2 py-1 text-sm">{{ $petani->alamat }}</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm">Luas Lahan</td>
								<td class="border px-2 py-1 text-sm">{{ $petani->luas_lahan }} Ha</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm">Kordinat Lahan</td>
								<td class="border px-2 py-1 text-sm">{{ $petani->kordinat_lahan }} Ha</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
