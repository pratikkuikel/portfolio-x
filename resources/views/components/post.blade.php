<div class="flex flex-col justify-center items-center mb-10 mt-10">
    <article class="prose prose-a:text-blue-600 hover:prose-a:text-blue-500 md:text-lg">
        <figure><img src="{{ asset($post->matter('heroImage')) }}" alt="Shoes" /></figure>
        <h1>{{ $post->matter('title') }}</h1>
        <div class="card-actions justify-end">
            <div class="badge badge-outline"> {{ $post->matter('pubDate') }}</div>
        </div>
        {!! $content !!}
    </article>
</div>
