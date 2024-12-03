<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateForm extends Component
{
    //DATA BINDING
    public $title;

    public $content;

    public function saveArticle()
    {

        Article::create([
            'title' => $this->title,
            'content' => $this->content
        ]);
        $this->reset();
        session()->flash('success', 'Articolo pubblicato');
    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
