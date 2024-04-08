<div>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Coggle.it Thumbnail Downloader</h1>
                @error('url')
                    <span class="error">
                        <div class="toast toast-top toast-end">
                            <div class="alert alert-error">
                                <span>{{ $message }}</span>
                            </div>
                        </div>
                    </span>
                @enderror
                @isset($error)
                    <span class="error">
                        <div class="toast toast-top toast-end">
                            <div class="alert alert-error">
                                <span>{{ $error }}</span>
                            </div>
                        </div>
                    </span>
                @enderror
                <p class="py-6">
                    While public coggle diagram can be downloaded, you cannot download private coggles.
                    And the issue with screenshotting is that you cannot get the full size of the diagram.
                    Even if you do screenshot, the diagram will be zoomed in or zoomed out and totally not readable.
                </p>
                <p class="py-6">
                    Don't worry this tool will help you download the thumbnail of the coggle diagram.
                </p>
                <form wire:submit="download_thumbnail">
                    <input type="url" required wire:model="url" placeholder="Paste coggle diagram link here"
                        class="input input-bordered input-primary w-full max-w-xs" />
                    <button type="submit" class="btn btn-primary">
                        <div wire:loading>
                            <span class="loading loading-spinner text-info"></span>
                        </div>
                        Download
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
