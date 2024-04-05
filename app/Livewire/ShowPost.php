<?php

namespace App\Livewire;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Livewire\Component;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;
use League\CommonMark\CommonMarkConverter;

class ShowPost extends Component
{
    public $slug;

    public function render()
    {
        try {
            $post = YamlFrontMatter::parse(File::get(resource_path("blogs/{$this->slug}.md")));
        } catch (FileNotFoundException $e) {
            abort(404);
        }

        $converter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);

        $content = $converter->convert($post->body());

        return view('livewire.show-post',compact('post','content'))->title('hello');
    }
}
