<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\URL;

class About extends Component
{
    public function render()
    {
        $seo = [
            'title' => 'About Pratik Kuikel',
            'description' => "Dedicated Laravel enthusiast who thrives on crafting elegant and efficient web solutions. My journey in web development began four years ago, and since then, I've been on a continuous quest for knowledge and innovation",
            'url' => URL::route('about'),
            'image' => asset('profile.jpg'),
        ];
        return view('livewire.about')->layoutData([
            'seo' => $seo
        ]);
    }
}
