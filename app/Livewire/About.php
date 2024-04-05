<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class About extends Component
{
    #[Title('About Pratik Kuikel')]
    public function render()
    {
        return view('livewire.about');
    }
}
