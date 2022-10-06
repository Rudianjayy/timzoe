@if ($paginator->hasPages())
    <div class="wg-themesflat-pagination">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="page-numbers prev"></span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="page-numbers prev"></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    {{--  <li><span class="page-numbers current">{{ $elrmrnt }}</span></li>  --}}
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><span class="page-numbers active current">{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}" class="page-numbers">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="page-numbers next"></a>
                </li>
                @else
                <li>
                    <span class="page-numbers next"></span>
                </li>
            @endif
        </ul>
    </div>
@endif
