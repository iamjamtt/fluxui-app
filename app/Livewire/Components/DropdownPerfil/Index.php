<?php

namespace App\Livewire\Components\DropdownPerfil;

use Livewire\Component;

class Index extends Component
{
    public $position = 'bottom';
    public $align = 'end';
    public $sidebar = false;

    public function render()
    {
        return view('livewire.components.dropdown-perfil.index');
    }
}
