<div>
    <div class="flex items-center justify-center mb-5">
        <div class="text-3xl font-bold">About Me</div>
    </div>

    <div class="mb-10 text-justify mx-10 items-center justify-center">
        I'm Pratik Kuikel, a full-stack developer with a strong focus on Laravel. I
        co-founded Byte Encoder and Byte Academy, where we drive innovation through
        technology. As a CTO, I lead a team in pursuit of technological excellence.
        I'm passionate about solving complex problems, staying on top of tech
        trends, and giving back to the tech community. Join me in exploring the
        limitless possibilities of technology!
    </div>

    <div class="mb-5">
        <div class="text-3xl font-bold flex items-center justify-center">Experience</div>
    </div>

    <x-timeline />

    <div class="flex items-center justify-center mb-5">
        <div class="text-3xl font-bold">Skills</div>
    </div>

    <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
        <ul class="flex flex-row flex-wrap justify-center gap-4 p-4">
            @foreach (['HTML/CSS/JS', 'PHP', 'LARAVEL', 'LIVEWIRE', 'FILAMENTPHP', 'ASTRO', 'SVELTE', 'ADONIS JS', 'ALPINE JS', 'FLUTTER', 'VITE', 'GREENSOCK', 'FIREBASE', 'GitHub/Bitbucket', 'AWS', 'CLOUDFLARE', 'FORGE', 'NATIVEPHP', 'REDIS', 'SWIMMING'] as $skill)
                <li
                    class="list-none bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                    {{ $skill }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
