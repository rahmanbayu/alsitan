<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			Unblacklist petani?
		</h2>
	</x-slot>

	<div class="py-5">
		<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="overflow-hidden bg-white p-5 px-4 shadow-sm sm:rounded-lg">
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

				<div class="mt-5 w-full rounded-md bg-rose-500 p-3 text-white shadow-xl md:w-1/2">
					<div class="mb-2 flex flex-col items-center justify-between space-y-2 border-b border-rose-400 pb-2 md:flex-row md:space-y-0">
						<div class="text-xs font-medium text-white">Alasan : </div>
						<div class="text-xs font-medium text-white">{{ $petani->blacklist_at->format('d F Y') }}</div>
					</div>
					<p class="mt-2 text-rose-50">{{ $petani->blacklist_reason }}</p>
				</div>

				<form action="{{ route('petani.un_blacklist_action', $petani) }}" method="post" class="mt-5">
					@csrf
					<div class="mt-5">
						<button class="rounded bg-sky-500 px-3 py-1.5 text-sm uppercase tracking-wide text-white shadow-md transition-all duration-150 hover:bg-blue-400 hover:shadow-sm">UNBLACKLIST</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</x-app-layout>
