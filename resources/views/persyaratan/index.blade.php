<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			Persyaratan
		</h2>
	</x-slot>

	<div class="py-5">
		<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="overflow-hidden bg-white p-5 px-4 shadow-sm sm:rounded-lg">
				<form action="{{ route('persyaratan.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div>
						<label for="nik" class="mb-1.5 block text-sm font-bold">NIK Petani <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('nik') }}" type="text" id="nik" name="nik" class="@error('nik') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('nik')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
						<div id="nik-error" class="mt-1 hidden text-sm text-rose-500">Data petani tidak ditemukan!</div>
						<div id="nik-blacklist" class="mt-1 hidden text-sm text-rose-500">Petani di blacklist!</div>
						<div id="nik-found" class="mt-1 hidden text-sm text-emerald-600"></div>
					</div>
					<div class="mt-4">
						<label for="alat" class="mb-1.5 block text-sm font-bold">Alat <sup class="text-lg text-rose-500">*</sup></label>
						<select id="alat" name="alat" class="@error('alat') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
							<option value=""></option>
							@foreach ($alsitans as $item)
								<option {{ old('alat') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }} - {{ $item->no_alat }}</option>
							@endforeach
						</select>
						@error('alat')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-5">
						<label for="harga_perhari" class="mb-1.5 block text-sm font-bold">Harga Perhari (Rp) <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('harga_perhari') }}" type="number" id="harga_perhari" name="harga_perhari" class="@error('harga_perhari') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('harga_perhari')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-4 grid grid-cols-1 gap-x-0 gap-y-4 md:grid-cols-2 md:gap-x-3 md:gap-y-0">
						<div>
							<label for="pembayaran" class="mb-1.5 block text-sm font-bold">Total Pembayaran (Rp) <sup class="text-lg text-rose-500">*</sup></label>
							<input value="{{ old('pembayaran') }}" type="number" id="pembayaran" name="pembayaran" class="@error('pembayaran') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
							@error('pembayaran')
								<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
							@enderror
						</div>
						<div>
							<label for="pembayaran_dalam_bahasa" class="mb-1.5 block text-sm font-bold">Total Dalam Ejaan Bahasa Indonesia <sup class="text-lg text-rose-500">*</sup></label>
							<input value="{{ old('pembayaran_dalam_bahasa') }}" type="text" id="pembayaran_dalam_bahasa" name="pembayaran_dalam_bahasa" class="@error('pembayaran_dalam_bahasa') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
							@error('pembayaran_dalam_bahasa')
								<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
							@enderror
						</div>

					</div>
					<div class="mt-4">
						<label for="bukti_pembayaran" class="mb-1.5 block text-sm font-bold">Bukti Pembayaran <span class="font-light text-gray-600">(png, jpg, jpeg)</span> <sup class="text-lg text-rose-500">*</sup></label>
						<input type="file" id="bukti_pembayaran" name="bukti_pembayaran" class="@error('bukti_pembayaran') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('bukti_pembayaran')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-4">
						<label for="mulai" class="mb-1.5 block text-sm font-bold">Mulai <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('mulai') }}" type="date" id="mulai" name="mulai" class="@error('mulai') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('mulai')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-4">
						<label for="sampai_dengan" class="mb-1.5 block text-sm font-bold">Sampai Dengan <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('sampai_dengan') }}" type="date" id="sampai_dengan" name="sampai_dengan" class="@error('sampai_dengan') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('sampai_dengan')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-4">
						<label for="ktp" class="mb-1.5 block text-sm font-bold">KTP <span class="font-light text-gray-600">(png, jpg, jpeg)</span> <sup class="text-lg text-rose-500">*</sup></label>
						<input type="file" id="ktp" name="ktp" class="@error('ktp') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('ktp')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-4">
						<label for="rekomendasi" class="mb-1.5 block text-sm font-bold">Rekomendasi <span class="font-light text-gray-600">(pdf)</span> <sup class="text-lg text-rose-500">*</sup></label>
						<input type="file" id="rekomendasi" name="rekomendasi" class="@error('rekomendasi') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('rekomendasi')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-4">
						<label for="proposal" class="mb-1.5 block text-sm font-bold">Proposal <span class="font-light text-gray-600">(pdf)</span> <sup class="text-lg text-rose-500">*</sup></label>
						<input type="file" id="proposal" name="proposal" class="@error('proposal') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('proposal')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>

					<div class="mt-6">
						<button class="rounded bg-sky-500 px-3 py-1.5 text-sm uppercase tracking-wide text-white shadow-md transition-all duration-150 hover:bg-blue-400 hover:shadow-sm">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	@push('bottom')
		<script>
			let nik = document.getElementById('nik');
			let nik_error = document.getElementById('nik-error');
			let nik_found = document.getElementById('nik-found');
			let nik_blacklist = document.getElementById('nik-blacklist');
			nik.addEventListener('blur', (e) => {
				check_nik(e);
			})

			async function check_nik(e) {
				const response = await fetch("{{ route('check_nik') }}", {
					method: 'POST',
					headers: {
						"Content-Type": "application/json",
						"Accept": "application/json",
						"X-Requested-With": "XMLHttpRequest",
						"X-CSRF-Token": "{{ csrf_token() }}"
					},
					body: JSON.stringify({
						nik: e.target.value,
					})
				});
				const movies = await response.json();

				if (movies[0] == 404) {
					nik_error.classList.remove('hidden')
				} else {
					nik_error.classList.add('hidden')
				}
				if (movies[0] == 403) {
					nik_blacklist.classList.remove('hidden')
				} else {
					nik_blacklist.classList.add('hidden')
				}

				if (movies.petani) {
					nik_found.classList.remove('hidden')
					nik_found.innerHTML = movies.petani.name
				} else {
					nik_found.classList.add('hidden')
				}

			}

			function tes(e) {
				console.log(e.target.value);
			}
		</script>
	@endpush
</x-app-layout>
