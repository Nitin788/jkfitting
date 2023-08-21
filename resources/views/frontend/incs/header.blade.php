<!-- start herade -->

<header>
    <div id="header-sticky" class="header-area box-90">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-6 col-md-6 col-7 col-sm-5 d-flex align-items-center pos-relative">

                    <div class="logo">
                        <a href="/"><img src="{{asset('img/logo.png')}}" alt="" oncontextmenu="return false"></a>
                    </div>

                </div>
                <div class="col-xl-8 col-lg-6 col-md-8 col-8 d-none d-xl-block">
                    <div class="main-menu text-center">
                        <nav id="mobile-menu" style="display: block;">
                            <ul>
                                <li><a href="/live">Home</a> </li>
                                <li> <a href="{{route('about')}}">About Us</a> </li>
                                <!--<li><a href="product.php">Our Products</a></li>-->
                                <div class="dropdown">
                                    <li><a href="#" class="dropbtn">Our Products</a></li>
                                    <div class="dropdown-content">
                                        <a href="productcat?id=aldrops">
                                            <li>ALDROPS</li>
                                        </a>

                                        <a href="productcat?id=door-accessories">
                                            <li>DOOR ACCESSORIES</li>
                                        </a>

                                        <a href="productcat?id=door-buffer">
                                            <li>DOOR BUFFER</li>
                                        </a>

                                        <a href="productcat?id=door-kit">
                                            <li>DOOR KIT</li>
                                        </a>

                                        <a href="productcat?id=door-stopper">
                                            <li>DOOR STOPPER</li>
                                        </a>

                                        <a href="productcat?id=fabricated-door-accessories">
                                            <li>FABRICATED DOOR ACCESSORIES</li>
                                        </a>

                                        <a href="productcat?id=gatehook">
                                            <li>GATEHOOK</li>
                                        </a>

                                        <a href="productcat?id=handle">
                                            <li>HANDLE</li>
                                        </a>

                                        <a href="productcat?id=latch">
                                            <li>LATCH</li>
                                        </a>

                                        <a href="productcat?id=neck-towerbolt">
                                            <li>NECK TOWERBOLT</li>
                                        </a>

                                        <a href="productcat?id=pipe-bracket">
                                            <li>PIPE BRACKET</li>
                                        </a>

                                        <a href="productcat?id=tower-bolt">
                                            <li>TOWER BOLT</li>
                                        </a>

                                        <a href="productcat?id=window-stay">
                                            <li>WINDOW STAY</li>
                                        </a>
                                    </div>
                                </div>


                                <!--<li><a href="blog.php">Blog</a></li>-->
                                <li><a href="information.php">Information </a> </li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 col-5 col-sm-7 pl-0">
                    <div class="header-right f-right">
                        <a class="enquiry-btn" href="contact.php">Enquiry Now</a>
                    </div>
                </div>
                <div class="col-12 d-xl-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- end header -->