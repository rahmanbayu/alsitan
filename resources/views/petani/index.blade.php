<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			{{ __('Petani') }}
		</h2>
		<a href="{{ route('petani.create') }}" class="flex items-center justify-center space-x-1 rounded bg-sky-500 px-3 py-2 text-xs uppercase text-white">
			<svg class="h-4 w-4 flex-shrink-0" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"></path>
			</svg>
			<span>{{ __('Tambah Petani') }}</span>
		</a>
	</x-slot>

	<div class="py-5">
		<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="overflow-hidden bg-white px-4 shadow-sm sm:rounded-lg">
				{{-- table --}}
				<div class="mt-5 flex flex-col overflow-hidden">
					<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
						<div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
							<div class="overflow-hidden">
								<table class="min-w-full text-left text-sm font-light">
									<thead class="text-sm font-bold text-gray-800 dark:text-gray-200">
										<tr>
											<th scope="col" class="px-2 py-4">#</th>
											<th scope="col" class="px-2 py-4"> Nama </th>
											<th scope="col" class="px-2 py-4"> NIK </th>
											<th scope="col" class="px-2 py-4"> Kelompok </th>
											<th scope="col" class="px-2 py-4"> Luas Lahan (ha) </th>
											<th scope="col" class="px-2 py-4 text-right"> <span>Action</span> </th>
										</tr>
									</thead>
									<tbody class='text-sm text-gray-600 dark:text-gray-400'>
										@forelse ($petanis as $key => $item)
											<tr>
												<td class="whitespace-nowrap px-2 py-4">{{ $petanis->firstItem() + $key }}</td>
												<td class="max-w-[12rem] truncate whitespace-nowrap px-2 py-4">{{ $item->name }}</td>
												<td class="whitespace-nowrap px-2 py-4">{{ $item->nik }}</td>
												<td class="whitespace-nowrap px-2 py-4">{{ $item->nama_kelompok }}</td>
												<td class="whitespace-nowrap px-2 py-4">{{ $item->luas_lahan }}</td>
												<td class="whitespace-nowrap px-2 py-4 text-right">
													<a href="{{ route('petani.show', $item) }}" class="inline-flex items-center space-x-1 rounded-sm bg-violet-400 px-2 py-0.5 text-[0.6rem] uppercase text-white shadow-md">
														<svg class="h-4 w-4 flex-shrink-0" stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
															<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
															<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
														</svg>
														<span>lihat</span>
													</a>
													<a href="{{ route('petani.edit', $item) }}" class="inline-flex items-center space-x-1 rounded-sm bg-emerald-400 px-2 py-0.5 text-[0.6rem] uppercase text-white shadow-md">
														<svg class="h-4 w-4 flex-shrink-0" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
															<path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path>
															<path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path>
														</svg>
														<span>edit</span>
													</a>
													@if ($item->blacklist_at == null)
														<a href="{{ route('petani.blacklist', $item) }}" class="inline-flex items-center space-x-1 rounded-sm bg-amber-400 px-2 py-0.5 text-[0.6rem] uppercase text-white shadow-md">
															<svg class="h-4 w-4 flex-shrink-0" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" fill-rule="evenodd" xmlns="http://www.w3.org/2000/svg">
																<path
																	d="M799.855 166.312c.023.007.043.018.084.059l57.69 57.69c.041.041.052.06.059.084a.118.118 0 0 1 0 .069c-.007.023-.018.042-.059.083L569.926 512l287.703 287.703c.041.04.052.06.059.083a.118.118 0 0 1 0 .07c-.007.022-.018.042-.059.083l-57.69 57.69c-.041.041-.06.052-.084.059a.118.118 0 0 1-.069 0c-.023-.007-.042-.018-.083-.059L512 569.926 224.297 857.629c-.04.041-.06.052-.083.059a.118.118 0 0 1-.07 0c-.022-.007-.042-.018-.083-.059l-57.69-57.69c-.041-.041-.052-.06-.059-.084a.118.118 0 0 1 0-.069c.007-.023.018-.042.059-.083L454.073 512 166.371 224.297c-.041-.04-.052-.06-.059-.083a.118.118 0 0 1 0-.07c.007-.022.018-.042.059-.083l57.69-57.69c.041-.041.06-.052.084-.059a.118.118 0 0 1 .069 0c.023.007.042.018.083.059L512 454.073l287.703-287.702c.04-.041.06-.052.083-.059a.118.118 0 0 1 .07 0Z">
																</path>
															</svg>
															<span>Blacklist</span>
														</a>
													@else
														<a href="{{ route('petani.un_blacklist', $item) }}" class="inline-flex items-center space-x-1 rounded-sm bg-green-400 px-2 py-0.5 text-[0.6rem] uppercase text-white shadow-md">
															<svg class="h-4 w-4 flex-shrink-0" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
																<path d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 0 0-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path>
															</svg>
															<span>Un Blacklist</span>
														</a>
													@endif
													<div class="inline-block" x-data="{ deletemodal{{ $item->id }}: false }">
														<button x-on:click="deletemodal{{ $item->id }} = ! deletemodal{{ $item->id }}" class="inline-flex items-center space-x-1 rounded-sm bg-rose-400 px-2 py-0.5 text-[0.6rem] uppercase text-white shadow-md">
															<svg class="h-4 w-4 flex-shrink-0" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																<path d="M16 1.75V3h5.25a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1 0-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75Zm-6.5 0V3h5V1.75a.25.25 0 0 0-.25-.25h-4.5a.25.25 0 0 0-.25.25ZM4.997 6.178a.75.75 0 1 0-1.493.144L4.916 20.92a1.75 1.75 0 0 0 1.742 1.58h10.684a1.75 1.75 0 0 0 1.742-1.581l1.413-14.597a.75.75 0 0 0-1.494-.144l-1.412 14.596a.25.25 0 0 1-.249.226H6.658a.25.25 0 0 1-.249-.226L4.997 6.178Z"></path>
																<path d="M9.206 7.501a.75.75 0 0 1 .793.705l.5 8.5A.75.75 0 1 1 9 16.794l-.5-8.5a.75.75 0 0 1 .705-.793Zm6.293.793A.75.75 0 1 0 14 8.206l-.5 8.5a.75.75 0 0 0 1.498.088l.5-8.5Z"></path>
															</svg>
															<span>delete</span>
														</button>
														<div x-cloak x-on:click="deletemodal{{ $item->id }} = false" x-show="deletemodal{{ $item->id }}" class="fixed inset-0 top-0 z-20 bg-black/40">
														</div>
														<div x-cloak x-show="deletemodal{{ $item->id }}" class="pointer-events-none fixed inset-0 top-0 z-20 overflow-hidden text-left backdrop-blur-sm">
															<div class="pointer-events-auto absolute left-1/2 top-1/2 w-[90%] -translate-x-1/2 -translate-y-1/2 transform rounded-lg bg-white p-5 md:w-[75%] lg:w-[65%]">
																<div class="flex items-center justify-between">
																	<div class="text-base font-bold">Hapus Petani</div>
																	<button x-on:click="deletemodal{{ $item->id }} = false" class="flex h-6 w-6 cursor-pointer items-center justify-center">
																		<svg class="h-4 w-4 text-gray-600" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																			<path d="M405 136.798L375.202 107 256 226.202 136.798 107 107 136.798 226.202 256 107 375.202 136.798 405 256 285.798 375.202 405 405 375.202 285.798 256z"></path>
																		</svg>
																	</button>
																</div>
																<div class="mt-5">
																	Apakah anda yakin?, Aksi ini tidak dapat dikembalikan!
																</div>
																<div class="mt-5">
																	<form action="{{ route('petani.delete', $item) }}" method="post">
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
									{!! $petanis->links() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
