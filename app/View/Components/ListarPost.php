<?php

namespace App\View\Components;


use Illuminate\View\Component;

class ListarPost extends Component
{
    
    public $posts;

    public function __construct($posts)
    {
        $this->posts = $posts;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.listar-post');
    }
}
