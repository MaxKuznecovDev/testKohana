<body>

    <nav class="navbar-default" role="navigation">
        <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Pratt</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a  href="#" class="smothscroll">Home</a></li>
                        <li><a href="#" class="smothscroll">Description</a></li>
                        <li><a href="#" class="smothscroll">Showcase</a></li>
                        <li><a href="#" class="smothscroll">Contact</a></li>
                    </ul>
                </div>
        </div>
    </nav>
    <section id="app_present">
        <div class="wrapper_app_present">
            <div class="container app_present">
                <div class="row text-center row-m-t">

                        <h1 class ="welcome_h1">Welcome To <b>Pratt</b></h1>
                        <h3>Show your product with this handsome theme.</h3>

                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="caption">
                            <h5><b>Amazing Results</b></h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="hidden-md hidden-sm hidden-xs">
                                <img src="<?php echo URL::base(). $imgSrc; ?>/arrow1.png" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8">
                        <img src="<?php echo URL::base(). $imgSrc; ?>/app-bg.png" class="img-responsive" alt="Responsive image">
                    </div>
                    <div class="col-lg-2">
                        <div class="caption">
                            <div class="hidden-md hidden-sm hidden-xs">
                                <img src="<?php echo URL::base(). $imgSrc; ?>/arrow2.png" alt="">
                            </div>
                            <h5><b>Awesome Design</b></h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="designed_excel">
        <div class="wrapper_designed_excel ">
            <div class="container border_bottom">
                <div class="row text-center row-m-t">
                    <h2>Designed To Excel</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 ">
                        <div class="thumbnail options_container text-center">
                            <img src="<?php echo URL::base(). $imgSrc; ?>/intro01.png" alt="...">
                            <div class="caption">
                                <h3>Community</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="thumbnail options_container text-center">
                            <img src="<?php echo URL::base(). $imgSrc; ?>/intro02.png" alt="...">
                            <div class="caption">
                                <h3>Schedule</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="thumbnail options_container text-center">
                            <img src="<?php echo URL::base(). $imgSrc; ?>/intro03.png" alt="...">
                            <div class="caption">
                                <h3>Monitoring</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section id="new">
        <div class="wrapper_new">
            <div class="container">
                <div class="row text-center row-m-t">
                    <h1>What's New?</h1>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-offset-1 col-md-12">

                        <img src="<?php echo URL::base(). $imgSrc; ?>/mobile.png" class="img-responsive center-block" alt="Responsive image">

                    </div>
                    <div class="col-lg-6">
                        <h3 class="row-m-t">Some Features</h3>
                        <div class="caption">
                            <h4 >First Class Design</h4>
                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <ul class="list-unstyled">
                                <li><a href="">Retina Ready Theme</a></li>
                                <li><a href="">Awesome Support</a></li>
                                <li><a href="">Responsive Design</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="screenshots">
        <div class="wrapper_screenshots">
            <div class="container container-p-b">
                <div class="row text-center row-m-t">
                    <h1>Some Screenshots</h1>
                </div>
                <div class="row">
                    <div id="carousel-generic" class="carousel slide img_width center-block" data-ride="carousel" data-interval="4000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-generic" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php echo URL::base(). $imgSrc; ?>/item-01.png" >
                            </div>
                            <div class="item">
                                <img src="<?php echo URL::base(). $imgSrc; ?>/item-02.png" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="wrapper_contact">
            <div class="container container-p-b">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="thumbnail address_container">

                                <h3>Address</h3>
                                <p>Av. Greenville 987,<br>
                                    New York,<br>
                                    90873<br>
                                    United States</p>

                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-offset-2">
                        <h1>Drop Us A Line</h1>
                        <form>
                            <div class="form-group">
                                <label for="InputName" >Your Name</label>
                                <input type="text" class="form-control" id="InputName" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">Your Email</label>
                                <input type="email" class="form-control" id="InputEmail" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label for="InputSubject">Subject</label>
                                <input type="text" class="form-control" id="InputSubject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <label for="InputText">Your Message</label>
                                <textarea class="form-control" id="InputText" rows="3" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success center-block">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="wrapper_footer">
            <div class="container">
                <div class="row text-center row-m-t">
                    <p>© Copyrights Pratt. All Rights Reserved</p>
                    <p>Created with Pratt template by TemplateMag</p>
                </div>
            </div>
        </div>

    </section>













<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>