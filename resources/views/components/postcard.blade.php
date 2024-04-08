<div class="flex flex-col items-center justify-center gap-4">
    <div class="flex flex-wrap items-center justify-center gap-4 px-4">
        @foreach ($filenames as $post)
            <div class="card w-96 bg-base-100 shadow-xl">
                <figure>
                    <a href="{{ route('blog.show', $post['slug']) }}">
                        <img src="{{ asset($post['matter']->matter('heroImage')) }}"
                            alt="{{ $post['matter']->matter('title') }}" />
                    </a>
                </figure>
                <div class="card-body">
                    <a href="{{ route('blog.show', $post['slug']) }}" class="card-title text-neutral-content">
                        {{ $post['matter']->matter('title') }}
                    </a>
                    <p>{{ Str::limit($post['matter']->matter('description'), 150) }}</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline"> {{ $post['matter']->matter('pubDate') }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $filenames->links('pagination::default') }}
</div>
