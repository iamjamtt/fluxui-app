<?php

namespace App\Livewire\Inicio;

use Filament\Notifications\Notification;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.inicio.index');
    }

    public function mostrarAlerta()
    {
        // dd('hola');
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
    }
}
