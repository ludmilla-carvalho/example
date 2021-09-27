{{-- 
<div wire:loading.delay class="fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-gray-500 opacity-75 flex flex-col items-center justify-center">
	<div class="loader ease-linear rounded-full border-4 border-t-4 border-white h-12 w-12 mb-4"></div>
	<h2 class="text-center text-white text-xl font-semibold">Carregando...</h2>
</div> --}}

@props(['action' => false])

@if ($action)
	<div wire:loading.delay wire:target="{{ $action }}" class="z-5000000 flex fixed left-0 top-0 bottom-0 w-full bg-gray-700 bg-opacity-75">
		<img src="https://paladins-draft.com/img/circle_loading.gif" width="64" height="64" class="m-auto mt-1/4">
		<h2 class="text-center text-white text-xl font-semibold">Carregando...</h2>
	</div>
@else
	<div wire:loading.delay class="z-50 static flex fixed left-0 top-0 bottom-0 w-full bg-gray-700 bg-opacity-50">
		<img src="https://paladins-draft.com/img/circle_loading.gif" width="64" height="64" class="m-auto mt-1/4">
		<h2 class="text-center text-white text-xl font-semibold">Carregando...</h2>
	</div>
@endif


