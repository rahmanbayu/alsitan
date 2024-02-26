<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			{{ __('Persetujuan') }}
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
														<a href="{{ route('skp.index', $item) }}" target="_blank" class="inline-flex items-center space-x-1 rounded-sm bg-amber-400 px-2 py-0.5 text-[0.6rem] uppercase text-white shadow-md">
															<svg class="flex-shrink-0 w-4 h-4" stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																<path stroke-linecap="round" stroke-linejoin="round"
																	d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z">
																</path>
															</svg>
															<span>SPK</span>
														</a>
														<a href="{{ route('pernyataan.index', $item) }}" target="_blank" class="inline-flex items-center space-x-1 rounded-sm bg-amber-400 px-2 py-0.5 text-[0.6rem] uppercase text-white shadow-md">
															<svg class="flex-shrink-0 w-4 h-4" stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																<path stroke-linecap="round" stroke-linejoin="round"
																	d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z">
																</path>
															</svg>
															<span>Pernyataan</span>
														</a>
													@endif
													<a href="{{ route('persetujuan.show', $item) }}" class="inline-flex items-center space-x-1 rounded-sm bg-violet-400 px-2 py-0.5 text-[0.6rem] uppercase text-white shadow-md">
														<svg class="flex-shrink-0 w-4 h-4" stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
															<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
															<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
														</svg>
														<span>lihat</span>
													</a>
													<div class="inline-block" x-data="{ deletemodal{{ $item->id }}: false }">
														<button x-on:click="deletemodal{{ $item->id }} = ! deletemodal{{ $item->id }}" class="inline-flex items-center space-x-1 rounded-sm bg-rose-400 px-2 py-0.5 text-[0.6rem] uppercase text-white shadow-md">
															<svg class="flex-shrink-0 w-4 h-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																<path d="M16 1.75V3h5.25a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1 0-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75Zm-6.5 0V3h5V1.75a.25.25 0 0 0-.25-.25h-4.5a.25.25 0 0 0-.25.25ZM4.997 6.178a.75.75 0 1 0-1.493.144L4.916 20.92a1.75 1.75 0 0 0 1.742 1.58h10.684a1.75 1.75 0 0 0 1.742-1.581l1.413-14.597a.75.75 0 0 0-1.494-.144l-1.412 14.596a.25.25 0 0 1-.249.226H6.658a.25.25 0 0 1-.249-.226L4.997 6.178Z"></path>
																<path d="M9.206 7.501a.75.75 0 0 1 .793.705l.5 8.5A.75.75 0 1 1 9 16.794l-.5-8.5a.75.75 0 0 1 .705-.793Zm6.293.793A.75.75 0 1 0 14 8.206l-.5 8.5a.75.75 0 0 0 1.498.088l.5-8.5Z"></path>
															</svg>
															<span>delete</span>
														</button>
														<div x-cloak x-on:click="deletemodal{{ $item->id }} = false" x-show="deletemodal{{ $item->id }}" class="fixed inset-0 top-0 z-20 bg-black/40">
														</div>
														<div x-cloak x-show="deletemodal{{ $item->id }}" class="fixed inset-0 top-0 z-20 overflow-hidden text-left pointer-events-none backdrop-blur-sm">
															<div class="pointer-events-auto absolute left-1/2 top-1/2 w-[90%] -translate-x-1/2 -translate-y-1/2 transform rounded-lg bg-white p-5 md:w-[75%] lg:w-[65%]">
																<div class="flex items-center justify-between">
																	<div class="text-base font-bold">Hapus Data</div>
																	<button x-on:click="deletemodal{{ $item->id }} = false" class="flex items-center justify-center w-6 h-6 cursor-pointer">
																		<svg class="w-4 h-4 text-gray-600" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																			<path d="M405 136.798L375.202 107 256 226.202 136.798 107 107 136.798 226.202 256 107 375.202 136.798 405 256 285.798 375.202 405 405 375.202 285.798 256z"></path>
																		</svg>
																	</button>
																</div>
																<div class="mt-5">
																	Apakah anda yakin?, Aksi ini tidak dapat dikembalikan!
																</div>
																<div class="mt-5">
																	<form action="{{ route('persetujuan.delete', $item) }}" method="post">
																		@csrf
																		@method('DELETE')
																		<button class="rounded bg-rose-500 px-3 py-1.5 text-sm uppercase tracking-wide text-white shadow-md transition-all duration-150 hover:bg-rose-400 hover:shadow-sm">Ya, Hapus</button>
																	</form>
																</div>
															</div>
														</div>
													</div>
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
