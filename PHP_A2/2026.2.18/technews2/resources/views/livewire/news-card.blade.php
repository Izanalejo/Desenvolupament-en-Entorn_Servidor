<div>
    <div class="p-6 bg-white border border-gray-200 rounded-xl mb-4">
        <h2 class="text-xl font-bold">{{ $news->title }}</h2>
        <p class="text-gray-600">{{ $news->content }}</p>

        <button wire:click="addLike" wire:loading.attr="disabled"
            class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg active:scale-95">
            <span wire:loading.remove>👍</span>
            <span wire:loading class="animate-spin">⌛</span>
            <span>Me gusta ({{ $news->likes }})</span>
        </button>
    </div>
</div>
