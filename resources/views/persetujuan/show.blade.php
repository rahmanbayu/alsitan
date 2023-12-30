<x-app-layout>
	<x-slot name="header">
		<div class="flex w-full items-center justify-between">
			<h2 class="text-xl font-semibold leading-tight text-gray-800">
				{{ $persyaratan->petani->name }}
			</h2>

			@if ($persyaratan->status == 'disetujui')
				<span class="rounded-lg bg-emerald-400 px-2 py-1 text-sm text-white">{{ $persyaratan->status }}</span>
			@elseif ($persyaratan->status == 'ditolak')
				<span class="rounded-lg bg-rose-400 px-2 py-1 text-sm text-white">{{ $persyaratan->status }}</span>
			@else
				<span class="rounded-lg bg-gray-500 px-2 py-1 text-sm text-white">{{ $persyaratan->status }}</span>
			@endif
		</div>
	</x-slot>

	<div class="py-5">
		<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="overflow-hidden bg-white p-5 px-4 shadow-sm sm:rounded-lg">
				<div>
					<h2 class="mb-5 text-base font-bold text-gray-800">Informasi Petani / Peminjam</h2>
					<div class="grid grid-cols-1 gap-y-5 md:grid-cols-2 md:gap-x-5 md:gap-y-0">
						<iframe src="https://maps.google.com/maps?q={{ $persyaratan->petani->kordinat_lahan }}&z=15&output=embed" width="100%" height="450" frameborder="0" style="border:0"></iframe>
						<table class="w-full">
							<tbody>
								<tr>
									<td class="border px-2 py-1 text-sm">Nama</td>
									<td class="border px-2 py-1 text-sm">{{ $persyaratan->petani->name }}</td>
								</tr>
								<tr>
									<td class="border px-2 py-1 text-sm">NIK</td>
									<td class="border px-2 py-1 text-sm">{{ $persyaratan->petani->nik }}</td>
								</tr>
								<tr>
									<td class="border px-2 py-1 text-sm">Kelompok</td>
									<td class="border px-2 py-1 text-sm">{{ $persyaratan->petani->nama_kelompok }}</td>
								</tr>
								<tr>
									<td class="border px-2 py-1 text-sm">Pekerjaan</td>
									<td class="border px-2 py-1 text-sm">{{ $persyaratan->petani->job }}</td>
								</tr>
								<tr>
									<td class="border px-2 py-1 text-sm">Alamat</td>
									<td class="border px-2 py-1 text-sm">{{ $persyaratan->petani->alamat }}</td>
								</tr>
								<tr>
									<td class="border px-2 py-1 text-sm">Luas Lahan</td>
									<td class="border px-2 py-1 text-sm">{{ $persyaratan->petani->luas_lahan }} Ha</td>
								</tr>
								<tr>
									<td class="border px-2 py-1 text-sm">Kordinat Lahan</td>
									<td class="border px-2 py-1 text-sm">{{ $persyaratan->petani->kordinat_lahan }} Ha</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="mt-10">
					<h2 class="mb-5 text-base font-bold text-gray-800">Informasi Alat</h2>
					<table class="w-full">
						<tbody>
							<tr>
								<td class="border px-2 py-1 text-sm font-semibold">Nama</td>
								<td class="border px-2 py-1 text-sm">{{ $persyaratan->alsitan->name }}</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm font-semibold">Nomor Alat</td>
								<td class="border px-2 py-1 text-sm">{{ $persyaratan->alsitan->no_alat }}</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm font-semibold">Nomor Rangka</td>
								<td class="border px-2 py-1 text-sm">{{ $persyaratan->alsitan->no_rangka }}</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm font-semibold">Nomor Mesin</td>
								<td class="border px-2 py-1 text-sm">{{ $persyaratan->alsitan->no_mesin }}</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm font-semibold">Merek</td>
								<td class="border px-2 py-1 text-sm">{{ $persyaratan->alsitan->merek }}</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm font-semibold">Tipe</td>
								<td class="border px-2 py-1 text-sm">{{ $persyaratan->alsitan->tipe }}</td>
							</tr>
							<tr>
								<td class="border px-2 py-1 text-sm font-semibold">Tahun Produksi</td>
								<td class="border px-2 py-1 text-sm">{{ $persyaratan->alsitan->tahun }}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="mt-10">
					<h2 class="mb-5 text-base font-bold text-gray-800">Persyaratan</h2>
					<table class="w-full">
						<tbody>
							<tr>
								<td class="w-1/2 border px-2 py-1 text-sm font-semibold">Harga Perhari</td>
								<td class="border px-2 py-1 text-sm">Rp {{ number_format($persyaratan->biaya_perhari, 0, '.', '.') }}</td>
							</tr>
							<tr>
								<td class="w-1/2 border px-2 py-1 text-sm font-semibold">Total Pembayaran</td>
								<td class="border px-2 py-1 text-sm">Rp {{ number_format($persyaratan->pembayaran, 0, '.', '.') }}</td>
							</tr>
							<tr>
								<td class="w-1/2 border px-2 py-1 text-sm font-semibold">Total Pembayaran (Bahas)</td>
								<td class="border px-2 py-1 text-sm">{{ $persyaratan->pembayaran_dalam_bahasa }}</td>
							</tr>
							<tr>
								<td class="w-1/2 border px-2 py-1 text-sm font-semibold">Tanggal Mulai</td>
								<td class="border px-2 py-1 text-sm">{{ $persyaratan->mulai }}</td>
							</tr>
							<tr>
								<td class="w-1/2 border px-2 py-1 text-sm font-semibold">Tanggal Selesai</td>
								<td class="border px-2 py-1 text-sm">{{ $persyaratan->sampai_dengan }}</td>
							</tr>
							<tr>
								<td class="w-1/2 border px-2 py-1 text-sm font-semibold">Bukti Pembayaran</td>
								<td class="border px-2 py-1 text-sm">
									<img src="{{ route('persyaratan.asset', $persyaratan) . '?show=bukti_pembayaran' }}" alt="">
								</td>
							</tr>
							<tr>
								<td class="w-1/2 border px-2 py-1 text-sm font-semibold">KTP</td>
								<td class="border px-2 py-1 text-sm">
									<img src="{{ route('persyaratan.asset', $persyaratan) . '?show=ktp' }}" alt="">
								</td>
							</tr>
							<tr>
								<td class="w-1/2 border px-2 py-1 text-sm font-semibold">Rekomendasi</td>
								<td class="border px-2 py-1 text-sm">
									<a href="{{ route('persyaratan.asset', $persyaratan) . '?show=rekomendasi&download=true' }}" class="text-sky-500 hover:underline">Download</a>
								</td>
							</tr>
							<tr>
								<td class="w-1/2 border px-2 py-1 text-sm font-semibold">Proposal</td>
								<td class="border px-2 py-1 text-sm">
									<a href="{{ route('persyaratan.asset', $persyaratan) . '?show=proposal&download=true' }}" class="text-sky-500 hover:underline">Download</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="mt-10 flex items-center space-x-3">
					<form action="{{ route('persetujuan.approve', $persyaratan) }}" method="post">
						@csrf
						<button type="submit" class="rounded-md bg-blue-500 px-3 py-1 text-sm text-white">Setujui</button>
					</form>
					<form action="{{ route('persetujuan.decline', $persyaratan) }}" method="post">
						@csrf
						<button type="submit" class="rounded-md bg-rose-500 px-3 py-1 text-sm text-white">Tolak</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</x-app-layout>
