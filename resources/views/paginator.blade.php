<ul class="paginator" style="display:inline">
    @foreach ($paginator->appends(request()->query())->LinkCollection() as $link)
    <li style="display:inline; margin: 0rem 0.2rem;">
        @if ($link['active'])
        <span style="font-weight: bold;">{!! $link['label'] !!} </span>
        @else
        <a href="{{ $link['url'] }}">{!! $link['label'] !!}</a>
        @endif
    </li>
    @endforeach
</ul>
