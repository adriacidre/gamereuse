<!-- footer -->
<footer id="footerWrapper" class="footer2">
    <section id="mainFooter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footerWidget">
                        {{ HTML::image('assets/images/main-logo.png')}}
                        <br /><br />
                        <p><a href="{{ URL::to('/') }}" title="GameReuse">GameReuse</a> Is a web that allows you sell your old games, and buy used ones saving some money! <br /><br />Create collections, wish lists, meet people and even more! <a href="{{ URL::to('user/login') }}">Join now!</a></p>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="footerWidget">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footerWidget">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footerWidget">

                        <h3>About GameReuse</h3>
                        <ul class="list-unstyled iconList borderList">
                            <li><a href="/about">About us</a></li>
                            <li><a href="/about#team">The Team</a></li>
                            <li><a href="/terms">Terms of service</a></li>
                            <li><a href="/privacy">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footerRights">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <ul class="socialNetwork">
                        <li><a href="#" class="tips" title="follow us on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
                        <li><a href="#" class="tips" title="follow us on Twitter"><i class="icon-twitter-bird iconRounded"></i></a></li>
                        <li><a href="#" class="tips" title="follow us on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
                    </ul>
                </div>


                <div class="col-md-12">
                    <p>Copyright © 2014 <a href="http://www.oridoki.com" target="blank">Oridoki</a> / All rights reserved.</p>
                </div>

            </div>
        </div>
    </section>
</footer>
<!-- End footer -->