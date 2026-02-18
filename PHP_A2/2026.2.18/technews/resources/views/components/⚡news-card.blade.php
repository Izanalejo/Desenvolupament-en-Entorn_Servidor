<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\News;

new class extends Component {
    public News $news; // Pasamos el objeto noticia entero

    public function addLike()
    {
        // Esta función se ejecuta en el SERVIDOR cuando se hace clic
        $this->news->increment('likes');
    }

    public function render()
    {
        return view('components.⚡news-card');
    }
};
?>

<div class="p-6 bg-white border-b border-gray-200 mb-4 rounded shadow">
    <h2 class="text-xl font-bold">{{ $news->title }}</h2>
    <p class="text-gray-600 mt-2">{{ $news->content }}</p>

    <div class="mt-4 flex items-center">
        <button wire:click="addLike" 
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
            👍 Me gusta ({{ $news->likes }})
        </button>
    </div>
</div>
