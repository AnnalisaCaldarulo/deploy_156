<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateForm extends Component
{
    //DATA BINDING
    #[Validate('required')]
    public $title;
    #[Validate('required')]
    public $content;

    public function saveArticle()
    {
        $this->validate();
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
