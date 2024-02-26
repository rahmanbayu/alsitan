<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			{{ __('Pengembalian') }}
		</h2>
	</x-slot>

	<div class="py-5">
		<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="px-4 overflow-hidden bg-white shadow-sm sm:rounded-lg">
				{{-- table --}}
				<div class="flex flex-col mt-5 overflow-hidden">
					<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
						<div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
							<div class="overflow-hidden">
								<table class="min-w-full text-sm font-light text-left">
									<thead class="text-sm font-bold text-gray-800 dark:text-gray-200">
										<tr>
											<th scope="col" class="px-2 py-4">#</th>
											<th scope="col" class="px-2 py-4">NIK Petani </th>
											<th scope="col" class="px-2 py-4">Total Pembayaran</th>
											<th scope="col" class="px-2 py-4">Status </th>
											<th scope="col" class="px-2 py-4">Luas Lahan (ha) </th>
											<th scope="col" class="px-2 py-4">Tgl Selesai</th>
											<th scope="col" class="px-2 py-4 text-right"> <span>Action</span> </th>
										</tr>
									</thead>
									<tbody class='text-sm text-gray-600 dark:text-gray-400'>
										@forelse ($persyaratans as $key => $item)
											<tr>
												<td class="px-2 py-4 whitespace-nowrap">{{ $persyaratans->firstItem() + $key }}</td>
												<td class="max-w-[12rem] truncate whitespace-nowrap px-2 py-4">{{ $item->petani->nik }}</td>
												<td class="px-2 py-4 whitespace-nowrap">{{ $item->pembayaran }}</td>
												<td class="px-2 py-4 whitespace-nowrap"><span class="@if ($item->status == 'disetujui') bg-emerald-600 @elseif($item->status == 'ditolak') bg-rose-500 @else bg-gray-600 @endif inline-block rounded px-1.5 py-0.5 text-xs text-white">{{ $item->status }}</span></td>
												<td class="px-2 py-4 whitespace-nowrap">{{ $item->petani->luas_lahan }}</td>
												<td class="px-2 py-4 whitespace-nowrap">{{ $item->sampai_dengan }}</td>
												<td class="px-2 py-4 text-right whitespace-nowrap">
													@if ($item->status == 'disetujui' && $item->petani->blacklist_at == null)
														<a href="{{ route('pengembalian.export', $item) }}" target="_blank" class="inline-flex items-center space-x-1 rounded-sm bg-amber-400 px-2 py-0.5 text-[0.6rem] uppercase text-white shadow-md">
															<svg class="flex-shrink-0 w-4 h-4" stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																<path stroke-linecap="round" stroke-linejoin="round"
																	d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z">
																</path>
															</svg>
															<span>BA Pengembalian</span>
														</a>
													@endif
												</td>

											</tr>
										@empty
											<tr>
												<td colSpan="6" class='py-4 text-center'>Tidak ada data!</td>
											</tr>
										@endforelse
									</tbody>
								</table>

								<div class="mt-10">
									{!! $persyaratans->links() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
