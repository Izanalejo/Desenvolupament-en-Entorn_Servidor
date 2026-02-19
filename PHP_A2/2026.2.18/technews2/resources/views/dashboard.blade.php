<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <h1 class="text-2xl font-bold mb-6 text-gray-900">
                    Bienvenido al Portal TechNews
                </h1>

                <div class="space-y-6">
                    {{-- 1. Componente de Cripto (Bloque 3) --}}
                    <livewire:crypto-ticker /> 
                    
                    <hr class="border-gray-200">

                    {{-- 2. Listado de Noticias (Bloque 4) --}}
                    <div class="grid grid-cols-1 gap-4">
                        @forelse(\App\Models\News::all() as $newsItem)
                            <livewire:news-card :news="$newsItem" :key="$newsItem->id" />
                        @empty
                            <p class="text-gray-500 italic">No hay noticias disponibles en este momento.</p>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
