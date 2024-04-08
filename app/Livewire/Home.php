<?php

namespace App\Livewire;

use Illuminate\Support\Facades\URL;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $seo = [
            'title' => 'Pratik kuikel',
            'description' => "Dedicated Laravel enthusiast who thrives on crafting elegant and efficient web solutions. My journey in web development began four years ago, and since then, I've been on a continuous quest for knowledge and innovation",
            'url' => URL::route('home'),
            'image' => asset('profile.jpg'),
        ];
        return view('livewire.home')->layoutData([
            'seo' => $seo
        ]);
    }
}
