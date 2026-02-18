<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Portal TechNews
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach(\App\Models\News::all() as $newsItem)
                @livewire('news-card', ['news' => $newsItem], key($newsItem->id))
            @endforeach
        </div>
    </div>
</x-app-layout>
</body>
</html>
