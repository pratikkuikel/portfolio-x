<div class="flex flex-col justify-center items-center mb-10 mt-10">
    <article class="prose prose-a:text-blue-600 hover:prose-a:text-blue-500">
        <h1>{{ $post->matter('title') }}</h1>
        {!! $content !!}
    </article>
</div>
