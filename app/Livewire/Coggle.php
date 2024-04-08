<?php

namespace App\Livewire;

use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Coggle extends Component
{
    use WithRateLimiting;

    public ?string $url;

    public $error;

    public function render()
    {
        $seo = [
            'title' => 'Coggle Thumbnail Downloader',
            'description' => "Download thumbnail of coggle diagrams which are either public or private",
            'url' => URL::route('coggle-thumbnail-downloader'),
            'image' => asset('coggle.png'),
        ];

        return view('livewire.coggle')
            ->layoutData([
                'seo' => $seo
            ]);
    }

    public function download_thumbnail()
    {
        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            throw ValidationException::withMessages([
                'url' => "Slow down! Please wait another {$exception->secondsUntilAvailable} seconds to download.",
            ]);
        }

        $this->validate([
            'url' => 'required|url',
        ]);

        $url = $this->url;

        try {
            $response = Http::get($url);
            $html = $response->getBody()->getContents();
            preg_match('/<meta\s+property="og:image"\s+content="([^"]+)"/i', $html, $matches);
            $imageUrl = isset($matches[1]) ? $matches[1] : null;

            if ($imageUrl) {
                // Download and save the image to the public folder
                $imageContents = Http::get($imageUrl);
                $imageName = 'coggle/' . time() . Str::random() . '.jpg';
                Storage::disk('public')->put($imageName, $imageContents);
                return response()->download(public_path('storage/' . $imageName));
            } else {
                $this->error = 'Cannot download the image';
            }
        } catch (\Exception $e) {
            info($e->getMessage());
            $this->error = 'Cannot download the image';
        }
    }
}
