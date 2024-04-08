<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class Blog extends Component
{
    public function render()
    {
        $seo = [
            'title' => 'Blog',
            'description' => "Explore insights from a passionate Laravel enthusiast's journey in web development. Discover something new.",
            'url' => URL::route('blog'),
            'image' => asset('profile.jpg'),
        ];

        $filenames = collect(File::allFiles(resource_path('blogs')))
            ->map(function ($file) {
                return [
                    'slug' => str_replace('.md', '', $file->getBaseName()),
                    'matter' => YamlFrontMatter::parse(file_get_contents($file->getPathname())),
                ];
            })
            ->sortByDesc(function ($file) {
                return Carbon::createFromFormat('M d Y', $file['matter']->matter('pubDate'))->timestamp;
            })
            ->paginate(6);

        return view('livewire.blog', compact('filenames'))->layoutData([
            'seo' => $seo
        ]);
    }
}
