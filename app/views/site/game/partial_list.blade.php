<section class="pt30">
    <div class="container">
        <div class="portfolio-items  isotopeWrapper clearfix imgHover neko-hover-1 isotope" id="3">
            @foreach ($games as $game)
            <article class="col-sm-3 isotopeItem isotope-item gameItem">
                <figure>

                    @if ($game->hasImage())
                    <a href="{{{ $game->url() }}}" title="{{ String::title($game->title) }}">
                        <img alt="{{ String::title($game->title) }}" src="{{ $game->image() }}" class="img-responsive">
                    </a>
                    @endif

                    <figcaption>
                        <ul class="pinInfo">
                            <li><a href=""><i class="icon-eye"></i>150</a></li>
                            <li><a href=""><i class="icon-comment-1"></i>4</a></li>
                            <li><a href=""><i class="icon-heart"></i>32</a></li>
                        </ul>
                        <div class="iconLinks">
                            <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture"></i></a>
                            <a href="images/portfolio/zoom6.jpg" class="image-link" title="Zoom"><i class="icon-search"></i></a>
                        </div>
                    </figcaption>
                </figure>


                <section class="boxContent">
                    <h3><a href="{{{ $game->url() }}}" title="{{ String::title($game->title) }}">{{ String::title($game->title) }}</a></h3>
                </section>

            </article>
            @endforeach
        </div>
        <div class="row centered">
            {{ $games->links() }}
        </div>
        <div class="row">
            <div class="col-md-12 mb40 mt30">
                <hr class="lineLines">
            </div>
        </div>
    </div>
</section>