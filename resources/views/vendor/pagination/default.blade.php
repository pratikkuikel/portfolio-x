    <div class="join">
        @if ($paginator->hasPages())
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button class="join-item btn btn-lg btn-active">{{ $page }}</button>
                        @else
                            <a href="{{ $url }}" wire:navigate><button
                                    class="join-item btn btn-lg">{{ $page }}</button></a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        @endif
    </div>
