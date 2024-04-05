<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

class Blog extends Component
{
    #[Title('Blog')]
    public function render()
    {
        $filenames = collect(File::allFiles(resource_path('blogs')))
            ->map(function ($file) {
                return [
                    'slug' => str_replace('.md', '', $file->getBaseName()),
                    'matter' => YamlFrontMatter::parse(file_get_contents($file->getPathname())),
                ];
            })->paginate(5);

        return view('livewire.blog', compact('filenames'));
    }
}
