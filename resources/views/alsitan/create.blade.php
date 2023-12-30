<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			Tambah Data Alsitan
		</h2>
	</x-slot>

	<div class="py-5">
		<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="overflow-hidden bg-white p-5 px-4 shadow-sm sm:rounded-lg">
				<form action="{{ route('alsitan.store') }}" method="post">
					@csrf
					<div>
						<label for="name" class="mb-1.5 block text-sm font-bold">Nama Alat <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('name') }}" type="text" placeholder="Contoh: Traktor Roda Dua" id="name" name="name" class="@error('name') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('name')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="no_alat" class="mb-1.5 block text-sm font-bold">No Alat <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('no_alat') }}" type="text" id="no_alat" name="no_alat" class="@error('no_alat') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('no_alat')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="no_rangka" class="mb-1.5 block text-sm font-bold">No Rangka <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('no_rangka') }}" type="text" id="no_rangka" name="no_rangka" class="@error('no_rangka') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('no_rangka')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="no_mesin" class="mb-1.5 block text-sm font-bold">No Mesin <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('no_mesin') }}" type="text" id="no_mesin" name="no_mesin" class="@error('no_mesin') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('no_mesin')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="merek" class="mb-1.5 block text-sm font-bold">Merek <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('merek') }}" type="text" id="merek" name="merek" class="@error('merek') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('merek')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="tipe" class="mb-1.5 block text-sm font-bold">Tipe <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('tipe') }}" type="text" id="tipe" name="tipe" class="@error('tipe') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('tipe')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="kode" class="mb-1.5 block text-sm font-bold">Kode <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('kode') }}" type="text" id="kode" name="kode" class="@error('kode') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('kode')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="tahun" class="mb-1.5 block text-sm font-bold">Tahun <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('tahun') }}" type="number" id="tahun" name="tahun" class="@error('tahun') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('tahun')
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
