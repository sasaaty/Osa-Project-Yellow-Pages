<?php 
    $link_limit = 5; 
    $half_total_links = floor($link_limit/2);
    $from = $paginator->currentPage() - $half_total_links;
    $to = $paginator->currentPage() + $half_total_links;

    if ($paginator->currentPage() < $half_total_links) {
       $to += $half_total_links - $paginator->currentPage();
    }
    if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
        $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
    }
?>

@if ($paginator->lastPage() > 1)
    <div class="pageHolder">
        <ul class="pagination pageMargin">
            <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' >
                <a href="{{ $paginator->url(1) }}">&laquo;</a> 
            </li>

            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                @if ($from < $i && $i < $to)
                    <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                        <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                    </li>
                @endif
            @endfor
            
            <li "{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $paginator->url($paginator->lastPage()) }}">&raquo;</a>
            </li>
        </ul>
    </div>
@endif