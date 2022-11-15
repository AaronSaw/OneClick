<!DOCTYPE html>
<html>

<head>
    <title>One Click</title>
</head>

<body>
    <style>
        .pagi-nav {
            margin-top: 15px display: block;
            font-weight: bold;
            font-size: 15px;
            display: flex;
            justify-content: center;
            height: 50px;
            align-items: center;
            background-color: #F6C4C5;
        }

        .pagi-nav .pagination {
            display: block;
        }

        .pagi-nav .pagination .page-item {
            float: left;
            padding: 3px 7px;
            cursor: pointer;
            color: #fff;
        }

        .page-item.active {
            border-bottom: 1px solid gray;
            padding: 5px;
            background-color: #fb5757;
        }
    </style>
</body>
<!-- resources/views/vendor/pagination/custom.blade.php -->

@if ($paginator->hasPages())
    <nav aria-label="Page navigation example" class="pagi-nav">
        <ul class="pagination justify-content-center">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">&lsaquo;</a>
                </li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                        &lsaquo;</a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a class="page-link">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="page-link" href="#">&rsaquo;</a>
                </li>
            @endif
        </ul>
    </nav>
@endif

</html>
