<ul class="paginator" style="display:inline">
    @foreach ($elements[0] as $page => $link)
    @if ($page == $paginator->currentPage)
    <li style="text: bold;"> </li>
        @else
        <li>       
    @endif
        <a href="{{ $link }}">{{ $page }}</a>
        </li>
    @endforeach
    </ul>
