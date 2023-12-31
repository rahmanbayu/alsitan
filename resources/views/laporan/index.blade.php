<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			Laporan
		</h2>
	</x-slot>

	<div class="py-5">
		<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="overflow-hidden bg-white px-4 shadow-sm sm:rounded-lg">
				{{-- table --}}

				<div class="mt-5 flex flex-col overflow-hidden">
					<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
						<div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
							<div class="overflow-hidden">
								{{-- filter --}}
								<div class="mb-5 flex items-center justify-between">
									<form method="get" class="flex items-center space-x-2">
										<input type="date" value="{{ request('awal') }}" name="awal" placeholder="Awal" class="rounded-md border border-gray-200 px-2 py-1.5 text-sm text-gray-600 outline-none focus:border-sky-400">
										<input type="date" value="{{ request('akhir') }}" name="akhir" placeholder="Akhir" class="rounded-md border border-gray-200 px-2 py-1.5 text-sm text-gray-600 outline-none focus:border-sky-400">
										<button type="submit" class="flex items-center justify-center space-x-1 rounded bg-amber-500 px-3 py-2 text-xs uppercase text-white">Filter</button>
										<a href="{{ route('laporan.index') }}" class="flex items-center justify-center space-x-1 rounded border border-amber-500 px-3 py-2 text-xs uppercase text-amber-400 text-white">
											<svg class="h-4 w-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M400 148l-21.12-24.57A191.43 191.43 0 00240 64C134 64 48 150 48 256s86 192 192 192a192.09 192.09 0 00181.07-128"></path>
												<path d="M464 97.42V208a16 16 0 01-16 16H337.42c-14.26 0-21.4-17.23-11.32-27.31L436.69 86.1C446.77 76 464 83.16 464 97.42z"></path>
											</svg>
										</a>
									</form>
									<form action="{{ route('laporan.download') }}" method="POST">
										@csrf
										<input type="hidden" name="awal" value="{{ request('awal') }}">
										<input type="hidden" name="akhir" value="{{ request('akhir') }}">
										<button type="submit" class="flex items-center justify-center space-x-1 rounded bg-sky-500 px-3 py-2 text-xs uppercase text-white">
											<svg class="h-4 w-4 flex-shrink-0" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path fill="none" d="M0 0h24v24H0z"></path>
												<path d="M18 15v3H6v-3H4v3c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-3h-2zm-1-4l-1.41-1.41L13 12.17V4h-2v8.17L8.41 9.59 7 11l5 5 5-5z"></path>
											</svg>
											<span>Download XLS</span>
										</button>
									</form>
								</div>
								<table class="min-w-full text-left text-sm font-light">
									<thead class="text-sm font-bold text-gray-800 dark:text-gray-200">
										<tr>
											<th scope="col" class="px-2 py-4">#</th>
											<th scope="col" class="px-2 py-4">Peminjam</th>
											<th scope="col" class="px-2 py-4">NIK</th>
											<th scope="col" class="px-2 py-4">KODE</th>
											<th scope="col" class="px-2 py-4">Harga</th>
											<th scope="col" class="px-2 py-4">Tgl Mulai</th>
											<th scope="col" class="px-2 py-4">Tgl Selesai</th>
										</tr>
									</thead>
									<tbody class='text-xs text-gray-600 dark:text-gray-400'>
										@forelse ($persyaratans as $key => $item)
											<tr>
												<td class="whitespace-nowrap px-2 py-4">{{ $key + 1 }}</td>
												<td class="max-w-[12rem] truncate whitespace-nowrap px-2 py-4">{{ $item->petani->name }}</td>
												<td class="whitespace-nowrap px-2 py-4">{{ $item->petani->nik }}</td>
												<td class="whitespace-nowrap px-2 py-4">{{ $item->alsitan->kode }}</td>
												<td class="whitespace-nowrap px-2 py-4">Rp {{ number_format($item->pembayaran, 0, '.', '.') }}</td>
												<td class="whitespace-nowrap px-2 py-4">{{ $item->mulai->format('d M Y') }}</td>
												<td class="whitespace-nowrap px-2 py-4">{{ $item->sampai_dengan->format('d M Y') }}</td>

											</tr>
										@empty
											<tr>
												<td colSpan="99" class='py-4 text-center'>Tidak ada data!</td>
											</tr>
										@endforelse
									</tbody>
								</table>

								{{-- <div class="mt-10">
									{!! $alsitans->links() !!}
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
