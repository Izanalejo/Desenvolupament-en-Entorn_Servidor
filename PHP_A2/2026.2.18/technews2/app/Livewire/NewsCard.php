<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\News;

class NewsCard extends Component
{
    public News $news; // Inyectamos el modelo
    public function addLike() {
    $this->news->increment('likes'); // Suma 1 en DB
    $this->news->refresh();          // Sincroniza la vista
    }

}
