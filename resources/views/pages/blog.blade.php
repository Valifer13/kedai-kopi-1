@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<x-page-header title="Blog" />

<!-- Section Contact -->
<section id="blog" class="padd-100">
    <h2 class="sr-only">Blog</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @php
                    $substat = array_slice($articles, 0, 3);
                @endphp
                @foreach ($substat as $item)
                <article class="blog-item">
                    <div class="entry-thumbnail">
                        <a title="" href="#">
                            <img src="assets/img/demo/blog/{{ $item['image'] }}" alt="{{ $item['image'] }}" class="img-responsive">
                        </a>
                    </div>
                    <div class="post-content">
                        <h2 class="entry-title">
                            {{ $item['title'] }}
                        </h2>
                        <div class="entry-content">
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>My Admin</span>
                                </li>
                                <li>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <span>{{ $item['date'] }}</span>
                                </li>
                                <li>
                                    <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                    <span>10 Comments</span>
                                </li>
                            </ul>
                            <p class="extrait-post">
                                {{ $item['description'] }}
                            </p>
                            <a class="btn-read-more" href="blog-single.html">Lihat Lebih</a>
                        </div>
                    </div>
                </article>
                @endforeach
                <div class="pagination sep-type-2">
                    <ul>
                        <li><a href="#" class="prev">Sebelumnya </a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" class="next">Selanjutnya</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 hidden-sm hidden-xs">
                <div class="sidebar">
                    <div class="widget widget_search">
                        <form id="searchform" class="search-area" action="blog.html" method="get">
                            <input id="s" class="form-control" type="text" placeholder="Cari" name="s">
                            <a href="" class="btn-search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </form>
                    </div>
                    <div class="widget widget_category">
                        <h3 class="widget-title">Kategori</h3>
                        <ul>
                            <li><a href="">Resep & Tips<span>(29)</span></a></li>
                            <li><a href="">Gaya Hidup<span>(45)</span></a></li>
                            <li><a href="">Cerita<span>(54)</span></a></li>
                            <li><a href="">Event dan Promo<span>(36)</span></a></li>
                            <li><a href="">Manfaat<span>(21)</span></a></li>
                        </ul>
                    </div>
                    <div class="widget widget_popullar">
                        <h3 class="widget-title">Postingan Terbaru</h3>
                        <ul>
                            @php
                                function short_description($description, $length = 50) {
                                    if (strlen($description) > $length) {
                                        return substr($description, 0, $length) . "...";
                                    }
                                    return $description;
                                }

                                $substat = array_slice($articles, 3, 3);
                            @endphp
                            @foreach ($substat as $item)
                            <li>
                                <a href="">
                                    <img src="assets/img/demo/blog/{{ $item['image'] }}" alt="{{ $item['image'] }}">
                                </a>
                                <div>
                                    <h4>
                                        <a href="">{{ short_description($item['title'], 40) }}</a>
                                    </h4>
                                    <span>{{ $item['date'] }}</span>
                                    <p>
                                        {{ short_description($item['description'], 60) }}
                                    </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget widget_tags">
                        <h3 class="widget-title">Tag</h3>
                        <ul>
                            <li><a href="">Coffee</a></li>
                            <li><a href="">Menu Lezat</a></li>
                            <li><a href="">Event</a></li>
                            <li><a href="">Discount</a></li>
                            <li><a href="">Tips</a></li>
                            <li><a href="">Cerita</a></li>
                        </ul>
                    </div>
                    <div class="widget widget_author">
                        <h3 class="widget-title">Kutipan Penulis</h3>
                        <div>
                            <img src="assets/img/demo/testimonials/02.jpg" alt="">
                            <p>
                                “Hidup itu seperti secangkir kopi: terkadang pahit, terkadang manis, tetapi selalu memberi kekuatan.”
                            </p>
                            <span>
                                Jhon Doe
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Contact -->
@endsection
