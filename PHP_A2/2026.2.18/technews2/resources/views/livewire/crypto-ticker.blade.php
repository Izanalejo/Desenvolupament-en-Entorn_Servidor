<div>
   <div wire:poll.10s="fetchPrice" class="p-4 bg-black text-green-500 rounded-xl font-mono">
    <strong>BTC / USDT:</strong> ${{ $price ?? 'Cargando...' }}
    </div>
</div>
