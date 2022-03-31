@if ($paginator->lastPage() > 1)
    <div style="width: 100%;">
        <style>
            .pagination {
                display: flex;
                padding-top: 24px;
                justify-content: center;
                font-size: 17px;
            }

            .pagination li {
                transition: .5s;
            }

            .pagination li:hover {
                transform: scale(1.7) translateY(-2px);
                margin: 0 6px 0 2px;
            }

            .pagination li a {
                text-decoration: none;
                cursor: pointer !important;
            }

            .pagination li.active a {
                text-decoration: underline;
                transform: scale(1.3) translateY(-3px);
                margin: 0 3px 0 0px;
                display: block;
            }

        </style>
        <ul class="pagination">
            <!-- si la pagina actual es distinto a 1 y hay mas de 5 hojas muestro el boton de 1era hoja -->
            <!-- if actual page is not equals 1, and there is more than 5 pages then I show first page button -->
            @if ($paginator->currentPage() != 1 && $paginator->lastPage() >= 5)
                <li>
                    <a href="?page=1">
                        << </a> &nbsp;&nbsp;
                </li>
            @endif

            <!-- si la pagina actual es distinto a 1 muestra el boton de atras -->
            @if ($paginator->currentPage() != 1)
                <li>
                    <a href="{{ $paginator->url($paginator->currentPage() - 1) }}">
                        < </a> &nbsp;&nbsp;
                </li>
            @endif

            <!-- dibuja las hojas... Tomando un rango de 5 hojas, siempre que puede muestra 2 hojas hacia atras y 2 hacia adelante -->
            <!-- I draw the pages... I show 2 pages back and 2 pages forward -->
            @for ($i = max($paginator->currentPage() - 2, 1); $i <= min(max($paginator->currentPage() - 2, 1) + 4, $paginator->lastPage()); $i++)
                <li class="{{ $paginator->currentPage() == $i ? ' active' : '' }}">
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
                @if ($i < min(max($paginator->currentPage() - 2, 1) + 4, $paginator->lastPage()))
                    &nbsp;&nbsp;&nbsp;| &nbsp;
                @else
                    &nbsp;&nbsp;&nbsp;
                @endif
            @endfor

            <!-- si la pagina actual es distinto a la ultima muestra el boton de adelante -->
            <!-- if actual page is not equal last page then I show the forward button-->
            @if ($paginator->currentPage() != $paginator->lastPage())
                <li>
                    <a href="{{ $paginator->url($paginator->currentPage() + 1) }}">></a>&nbsp;&nbsp;
                </li>
            @endif

            <!-- si la pagina actual es distinto a la ultima y hay mas de 5 hojas muestra el boton de ultima hoja -->
            <!-- if actual page is not equal last page, and there is more than 5 pages then I show last page button -->
            @if ($paginator->currentPage() != $paginator->lastPage() && $paginator->lastPage() >= 5)
                <li>
                    <a href="{{ $paginator->url($paginator->lastPage()) }}">
                        >>
                    </a>
                </li>
            @endif
        </ul>
    </div>
@endif
