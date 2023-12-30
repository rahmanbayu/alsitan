<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			Tambah Data Petani
		</h2>
	</x-slot>

	<div class="py-5">
		<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="overflow-hidden bg-white p-5 px-4 shadow-sm sm:rounded-lg">
				<form action="{{ route('petani.store') }}" method="post">
					@csrf
					<div>
						<label for="name" class="mb-1.5 block text-sm font-bold">Nama Petani <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('name') }}" type="text" id="name" name="name" class="@error('name') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('name')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="nik" class="mb-1.5 block text-sm font-bold">NIK Petani <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('nik') }}" type="text" id="nik" name="nik" class="@error('nik') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('nik')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="nama_kelompok" class="mb-1.5 block text-sm font-bold">Nama Kelompok <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('nama_kelompok') }}" type="text" id="nama_kelompok" name="nama_kelompok" class="@error('nama_kelompok') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('nama_kelompok')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="job" class="mb-1.5 block text-sm font-bold">Pekerjaan <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('job') }}" type="text" id="job" name="job" class="@error('job') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('job')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="phone" class="mb-1.5 block text-sm font-bold">Nomor Telephone <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('phone') }}" type="text" id="phone" name="phone" class="@error('phone') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('phone')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="alamat" class="mb-1.5 block text-sm font-bold">Alamat <sup class="text-lg text-rose-500">*</sup></label>
						<textarea name="alamat" id="alamat" rows="6" class="@error('alamat') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">{{ old('alamat') }}</textarea>
						@error('alamat')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="luas_lahan" class="mb-1.5 block text-sm font-bold">Luas Lahan <span class="text-sm font-light text-gray-600">(Satuan: Hektar/ha)</span> <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('luas_lahan') }}" type="number" id="luas_lahan" name="luas_lahan" class="@error('luas_lahan') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('luas_lahan')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="kordinat_lahan" class="mb-1.5 block text-sm font-bold">Kordinat Lahan <span class="text-sm font-light text-gray-600">(Contoh: -7.730365,110.603738)</span> <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('kordinat_lahan') }}" type="text" id="kordinat_lahan" name="kordinat_lahan" class="@error('kordinat_lahan') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('kordinat_lahan')
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
</x-app-layout>
