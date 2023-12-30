<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			Tambah Data User
		</h2>
	</x-slot>

	<div class="py-5">
		<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="overflow-hidden bg-white p-5 px-4 shadow-sm sm:rounded-lg">
				<form action="{{ route('users.store') }}" method="post">
					@csrf
					<div>
						<label for="name" class="mb-1.5 block text-sm font-bold">Nama <sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('name') }}" type="text" id="name" name="name" class="@error('name') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('name')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="email" class="mb-1.5 block text-sm font-bold">Email<sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('email') }}" type="email" id="email" name="email" class="@error('email') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('email')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="role" class="mb-1.5 block text-sm font-bold">Role<sup class="text-lg text-rose-500">*</sup></label>
						<select name="role" id="role" class="@error('role') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
							<option value=""></option>
							<option {{ old('role') == 'admin' ? 'selected' : '' }} value="admin">admin</option>
							<option {{ old('role') == 'staf' ? 'selected' : '' }} value="staf">staf</option>
							<option {{ old('role') == 'kadis' ? 'selected' : '' }} value="kadis">kadis</option>
						</select>
						@error('role')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="password" class="mb-1.5 block text-sm font-bold">Password<sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('password') }}" type="text" id="password" name="password" class="@error('password') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('password')
							<div class="mt-1 text-sm text-rose-500">{{ $message }}</div>
						@enderror
					</div>
					<div class="mt-6">
						<label for="password_confirmation" class="mb-1.5 block text-sm font-bold">Konfirmasi Password<sup class="text-lg text-rose-500">*</sup></label>
						<input value="{{ old('password_confirmation') }}" type="text" id="password_confirmation" name="password_confirmation" class="@error('password_confirmation') border-rose-500  focus:border-rose-400 focus:ring-rose-200 active:border-rose-400 @else border-gray-300  focus:border-sky-400 focus:ring-sky-200 active:border-sky-400  @enderror w-full rounded border bg-white px-2 py-1.5 shadow outline-none ring-2 ring-transparent transition-all duration-150 active:shadow-sm">
						@error('password_confirmation')
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
