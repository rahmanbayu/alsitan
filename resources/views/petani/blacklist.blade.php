<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			Blacklist petani?
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

				<form action="{{ route('petani.blacklist_action', $petani) }}" method="post" class="mt-5">
					@csrf
					<div>
						<label for="blaclist_at" class="mb-1.5 block text-sm font-bold">Blacklist At <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('blacklist_at', $petani->blaclist_at) }}" type="date" name="blacklist_at" id="blacklist_at" class="@error('reason') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('blacklist_at')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="reason" class="mb-1.5 block text-sm font-bold">Alasan <sup class="text-lg text-rose-500">*</sup></label>
						<textarea name="reason" id="reason" rows="6" class="@error('reason') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">{{ old('reason', $petani->reason) }}</textarea>
						@error('reason')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-5">
						<button class="rounded bg-sky-500 px-3 py-1.5 text-sm uppercase tracking-wide text-white shadow-md transition-all duration-150 hover:bg-blue-400 hover:shadow-sm">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</x-app-layout>
