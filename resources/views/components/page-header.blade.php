{{-- resources/views/components/breadcrumb.blade.php --}}

<section id="breadcrumb" data-background="assets/img/demo/slides/02.webp" class="parallax-window">
    <div>
        <span class="section-suptitle text-center">Coffee Lover</span>
        <h1 class="section-title white-font text-center">{{ $title }}</h1>
        <ul>
            <li><a href="{{ url('/') }}">Beranda</a></li>
            @php
                $segments = Request::segments();
                $currentPath = '/';
            @endphp
            @foreach($segments as $segment)
                @php
                    $currentPath .= $segment . '/';
                @endphp
                <li>
                    <a href="{{ url($currentPath) }}">{{ ucfirst(str_replace('-', ' ', $segment)) }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
