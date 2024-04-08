<div class="mb-10 mt-10 mx-10 flex flex-col md:flex-row justify-center">
    <article class="prose prose-a:text-blue-600 hover:prose-a:text-blue-500 md:text-lg break-words">
        <figure><img src="{{ asset($post->matter('heroImage')) }}" alt="Shoes" /></figure>
        <h1>{{ $post->matter('title') }}</h1>
        <div class="card-actions justify-end">
            <div class="badge badge-outline"> {{ $post->matter('pubDate') }}</div>
        </div>
        {!! $content !!}
    </article>
</div>
