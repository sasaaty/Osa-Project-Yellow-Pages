<?php 
    $link_limit = 7; 
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
        <div class="center">
            <div class="pagination pageMargin">
                <a class="{{ $paginator->currentPage() == 1 ? ' disabled' : ''}}" href="{{ $paginator->url(1) }}">&laquo;</a> 

                @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                    @if ($from < $i && $i < $to)    
                        <a class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                    @endif
                @endfor
                
                <a class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}" href="{{ $paginator->url($paginator->lastPage()) }}">&raquo;</a>
            </div>
        </div>
    </div>
@endif