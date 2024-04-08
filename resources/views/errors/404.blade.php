<x-layouts.error title="404">
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Oops! 404</h1>
                <p class="py-6 ">Uh oh! It seems you've wandered off</p>
                <p class="py-6 ">Don't worry, we're here to guide you back to safety.</p>
                <a href="{{ route('home') }}">
                    <button class="btn btn-primary ">Take me home
                    </button>
                </a>
            </div>
        </div>
    </div>
</x-layouts.error>
