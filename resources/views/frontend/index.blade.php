@extends('layouts.frontend')
@section('title', 'Welcome to Ecosanjal')
@section('content')


<section class = "primary-search-form" style="background-image: url({{url('public/frontend/assets/uploads/images/6.jpg')}})">
    <div class="container">
        <div class="row">

            <!-- SEARCH FORM -->
            <div class="col-md-6 col-sm-12 col-xs-12" style="margin-left: -17px;">
                 <div class="search-form">
                    <form action="{{route('search')}}" method="get">
                         <div class="form-row align-items-center">
                            <div class="searchpanel panel-body">

                                <div class="row">
                                    <div class="col-md-6 demo-radio-button">
                                        <input type="radio" name="way" value="one way" id="hideid"/> <label for="hideid">&nbsp One Way</label>
                                    </div>        
                                    <div class="col-md-6">        
                                        <input type="radio" name="way" value="two way" id="showid" checked /> &nbsp <label for="showid">Return ( Two Way )</label>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 ui-widget">
                                        <center><strong>Departure</strong></center>
                                            <input type="text" name="from" id="departure" class="search-form-control" placeholder="Enter Departure">
                                    </div>
                                    <div class="col-md-6 ui-widget">
                                        <center><strong>Arrival</strong></center>
                                            <input type="text" name="to" id="arrival" class="search-form-control" placeholder="Enter Arrival">
                                    </div> 
                                </div>






                                <div class="row">
                                    <div class="col-md-6">
                                        <center><strong>Departure Date</strong></center>
                                            <input type="text" id="datepicker" name="departure_date" class="search-form-control" placeholder="Enter Departure Date">
                                    </div>
                                    
                                     <div class="col-md-6" id="data">
                                        <center><strong>Return Date<center><strong>
                                            <input type="text" id="datepicker1" name="arrival_date" class="search-form-control" placeholder="Enter Return Date">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <center><strong>Discount</strong></center>
                                            <select name="" class="search-form-control">
                                                <option>5%</option>
                                                <option>10%</option>
                                                <option>15%</option>
                                                <option>20%</option>
                                            </select>
                                    </div>

                                    <div class="col-md-6" style="margin-top: 34px; text-align: center; text-transform: uppercase;">
                                        <p><a href="#">Need Any Help?</a></p>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                          Insure your travel by adding Rs.25 per passenger  
                                        </p>
                                        <input type="checkbox" name=""><b  style="font-size: 9px"> &nbsp  &nbsp YES, SECURE MY TRIP WITH INSURANCE. I AGREE WITH TERM AND CONDITIONS</b><br/>
                                        <input type="checkbox" name=""><b style="font-size: 9px"> &nbsp  &nbsp NO, I AM WILLING TO TAKE RISK OF MY TRIP</b>
                                        <p>
                                          <center><strong style="font-size: 10px">TICKET BY PHONE: 9841512143</strong></center> 
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3" >
                                        <input type="submit" name="SUBMIT" class="btn btn-default" style="background-color: #800000cf;color: white;">
                                    </div>
                                </div>
                            </div>          
                        </div>
                    </form>
                </div>
            </div>            


                        <!-- Registration Form -->

            <div class="col-md-6 col-sm-12 col-xs-12" style="float: right;">
                            
                
               <div class = "section-title" data-animation = "fadeInUp">
                    <h1 class = "title" style="font-size: 26px;color: white;text-transform: capitalize;">Register Here</h1>
                </div>
                
            </div>
        </div>
    </div>
</div>

</section>

<!-- POPULAR ROUTES AND NEW ROUTES -->
<section id = "news" class = "page-section">
    <div class = "container">
        <div class = "row">
            <div class = "col-sm-12 col-md-6">
                <div class = "section-title text-left" data-animation = "fadeInLeft">
                    <!-- Heading -->
                    <h2 class = "title">Popular Routes</h2>
                </div>
                <ul class = "latest-posts">
                    <li data-animation = "fadeInLeft">
                        <div class = "post-thumb">
                            <img class = "img-rounded" src = "{{url('public/frontend/images/sections/blog/1.jpg')}}" alt = "" title = "" width = "84" height = "84"/>
                        </div>
                        <div class = "post-details">
                            <div class = "description">
                                <a href = "#">
                                    <!-- Text -->The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.
                                </a>
                            </div>
                            <div class = "meta">
                                <!-- Meta Date -->

                                <span class = "time">
                                    <i class = "fa fa-calendar"></i>
                                    03.11.2014</span></div>
                        </div>
                    </li>
                    <li data-animation = "fadeInUp">
                        <div class = "post-thumb">
                            <img class = "img-rounded" src = "{{url('public/frontend/images/sections/blog/2.jpg')}}" alt = "" title = "" width = "84" height = "84"/>
                        </div>
                        <div class = "post-details">
                            <div class = "description">
                                <a href = "#">
                                    <!-- Text -->The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.
                                </a>
                            </div>
                            <div class = "meta">
                                <!-- Meta Date -->

                                <span class = "time">
                                    <i class = "fa fa-calendar"></i>
                                    03.11.2014</span></div>
                        </div>
                    </li>
                    <li data-animation = "fadeInDown">
                        <div class = "post-thumb">
                            <img class = "img-rounded" src = "{{url('public/frontend/images/sections/blog/3.jpg')}}" alt = "" title = "" width = "84" height = "84"/>
                        </div>
                        <div class = "post-details">
                            <div class = "description">
                                <a href = "#">
                                    <!-- Text -->The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.
                                </a>
                            </div>
                            <div class = "meta">
                                <!-- Meta Date -->

                                <span class = "time">
                                    <i class = "fa fa-calendar"></i>
                                    03.11.2014</span></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class = "col-sm-12 col-md-6">
                <div class = "section-title text-left" data-animation = "fadeInLeft">
                    <!-- Heading -->
                    <h2 class = "title">New Routes</h2>
                </div>
                <ul class = "latest-posts">
                    <li data-animation = "fadeInLeft">
                        <div class = "post-thumb">
                            <img class = "img-rounded" src = "{{url('public/frontend/images/sections/blog/1.jpg')}}" alt = "" title = "" width = "84" height = "84"/>
                        </div>
                        <div class = "post-details">
                            <div class = "description">
                                <a href = "#">
                                    <!-- Text -->The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.
                                </a>
                            </div>
                            <div class = "meta">
                                <!-- Meta Date -->

                                <span class = "time">
                                    <i class = "fa fa-calendar"></i>
                                    03.11.2014</span></div>
                        </div>
                    </li>
                    <li data-animation = "fadeInUp">
                        <div class = "post-thumb">
                            <img class = "img-rounded" src = "{{url('public/frontend/images/sections/blog/2.jpg')}}" alt = "" title = "" width = "84" height = "84"/>
                        </div>
                        <div class = "post-details">
                            <div class = "description">
                                <a href = "#">
                                    <!-- Text -->The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.
                                </a>
                            </div>
                            <div class = "meta">
                                <!-- Meta Date -->

                                <span class = "time">
                                    <i class = "fa fa-calendar"></i>
                                    03.11.2014</span></div>
                        </div>
                    </li>
                    <li data-animation = "fadeInDown">
                        <div class = "post-thumb">
                            <img class = "img-rounded" src = "{{url('public/frontend/images/sections/blog/3.jpg')}}" alt = "" title = "" width = "84" height = "84"/>
                        </div>
                        <div class = "post-details">
                            <div class = "description">
                                <a href = "#">
                                    <!-- Text -->The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.
                                </a>
                            </div>
                            <div class = "meta">
                                <!-- Meta Date -->

                                <span class = "time">
                                    <i class = "fa fa-calendar"></i>
                                    03.11.2014</span></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- news -->

<!-- fun-factor -->
<section id = "call-to-action" class = "page-section no-pad bg-color">
    <div class = "container">
        <div class = "row">
            <div class = "col-md-12 top-pad-20 bottom-pad-20 text-center">
                <h3 class = "text-capitalize inline-block tb-margin-20 black" data-animation = "fadeInUp">Are you <span class = "white">Bus Owner</span> let us help you earn more</h3>
                <div class = "inline-block lr-pad-20">
                    <a href = "#" class = "btn btn-transparent-white btn-lg" data-animation = "fadeInDown">Register Now!!!</a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- TRAVEL WITH US -->

<section id = "about-us" class = "page-section">
    <div class = "container">
        <div class = "section-title" data-animation = "fadeInUp">
            <h1 class = "title">Travel With Us</h1>
        </div>
        <div class = "row">
            <div class = "col-md-12 text-center" data-animation = "fadeInUp">
                <!-- Text -->
                <p class = "title-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima voluptatem assumenda voluptas quidem sit maiores odio velit voluptate.</p>
            </div>
        </div>
        <div class = "row text-center">
            <div class = "col-sm-4 col-md-3" data-animation = "fadeInUp">
                <div class="row">
                    <div class="col-md-9">
                        <div class = "work-process-box">
                            <div class = "process-content">
                                <!-- Title -->
                                <h4 class = "title">Search Route</h4>
                                <!-- Description -->
                                <p>Requirement Gathering &amp; System Study</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="public/img/arrow.png" style="margin-top: 120px; margin-left: 27px" width="130px">
                    </div>
                </div>
            </div>
            <!-- .process-box-two -->
            <div class = "col-sm-4 col-md-3" data-animation = "fadeInDown">
                <div class="row">
                    <div class="col-md-9">
                        <div class = "work-process-box">
                            <div class = "process-content">
                                <!-- Title -->
                                <h4 class = "title">Book Tikect</h4>
                                <!-- Description -->
                                <p>Design Wire-frame &amp; Layout Design</p>
                            </div>
                        </div>
                     </div>
                    <div class="col-md-3">
                        <img src="public/img/arrow.png" style="margin-top: 120px; margin-left: 27px" width="130px">
                    </div>
                </div>
            </div>
            <!-- .process-box-two -->
            <div class = "col-sm-4 col-md-3" data-animation = "fadeInUp">
                <div class="row">
                    <div class="col-md-9">
                        <div class = "work-process-box">
                            <div class = "process-content">
                                <!-- Title -->
                                <h4 class = "title">Travel</h4>
                                <!-- Description -->
                                <p>Product development &amp; Testing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="public/img/arrow.png" style="margin-top: 120px; margin-left: 30px" width="130px">
                    </div>
                </div>        
            </div>
            <!-- .process-box-two -->
            <div class = "col-sm-4 col-md-3" data-animation = "fadeInDown">
                <div class = "work-process-box">
                    <div class = "process-content">
                        <!-- Title -->
                        <h4 class = "title">Enjoy</h4>
                        <!-- Description -->
                        <p>Implementation &amp; Support</p>
                    </div>
                </div>
            </div>
            <!-- .process-box-two -->
        </div>
    </div>
</section><!-- about-us -->

<section id = "who-we-are" class = "page-section no-pad light-bg border-tb">
    <div class = "container-fluid who-we-are">
        <div class = "row">
            <div class = "col-md-6 pad-60" data-animation = "fadeInLeft">
                <div class = "section-title text-left" data-animation = "fadeInUp">
                    <!-- Title -->
                    <h2 class = "title">Who We Are</h2>
                </div>
                <div class = "owl-carousel pagination-1 dark-switch" data-pagination = "true" data-autoplay = "true" data-navigation = "false" data-singleitem = "true" data-animation = "fadeInUp">

                    @foreach($whoweare as $w)
                    <div class = "item">
                        <!-- Heading -->
                        <h2 class = "entry-title">
                            <a href = "#">{{$w->title}}</a>
                        </h2>
                        <!-- Content -->
                        <div class = "entry-content">
                            <p>{{$w->description}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class = "col-md-6 no-pad text-center" data-animation = "fadeInRight">
                <!-- Image -->
                <div class = "image-bg" data-background="url({{url('public/frontend/images/sections/bg/full-img1.jpg')}})" style="background-image : url({{url('public/frontend/images/sections/bg/full-img1.jpg')}})"></div>
            </div>
        </div>
    </div>

</section><!-- who-we-are -->

<section id = "additional-info">
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-md-6 no-pad text-center" data-animation = "fadeInRight">
                <!-- Image -->
                <div class = "image-bg" data-background = "url({{url('public/frontend/images/sections/bg/full-img2.jpg')}})" style="background-image: url({{url('public/frontend/images/sections/bg/full-img2.jpg')}})"></div>
            </div>
            <div class = "col-sm-6 col-md-6 video-half-content light-bg pad-40 z-index-9" data-animation = "fadeInRight">
                <div class = "section-title text-left">
                    <!-- Heading -->
                    <h2 class = "title">What We Offer</h2>
                </div>
                <div class = "panel-group no-list" id = "accordion1" data-animation = "fadeInLeft">

                <?php $k=0 ?>
                    @foreach($whatweoffer as $w)
                    <?php $k++ ?>
                    <div class = "panel panel-default active">
                        <div class = "panel-heading">
                            <div class = "panel-title">
                                <!-- Tab -->
                                <a data-toggle = "collapse" data-parent = "#accordion1" href = "#item{{$k}}">
                                    <i class = "icon-mobile9"></i>
                                    {{$w->title}}
                                </a>
                            </div>
                        </div>
                        <div id = "item{{$k}}" class = "panel-collapse collapse ">
                            <div class = "panel-body">
                                <!-- Image -->
                                <img src = "{{ asset('public/img/whatweoffer/'.$w->image)}})}}" class = "pull-right" width = "120" height = "90" alt = ""/>
                                <!-- Tab Content-->
                                <p>{{$w->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


<!-- video -->
<section id = "fun-factor" class = "page-section">
    <div class = "container">
        <div class = "row top-pad-20">
            <div class = "col-md-6" data-animation = "fadeInLeft">
                <h3 class = "text-uppercase bottom-margin-10">Why <span class = "text-color">JOIN US</span></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <a href = "#" class = "btn btn-default">Read more..</a>
            </div>
            <div class = "col-md-6">
                <div class = "row text-center fact-counter">
                    <div class = "col-sm-4 col-md-4 bottom-xs-pad-30" data-animation = "fadeInDown">
                        <!-- Icon -->
                        <i class = "icon-download14 fa-3x"></i>
                        <!-- number -->
                        <div class = "count-number" data-count = "9987">
                            <span class = "counter"></span>
                        </div>
                        <!-- Title -->
                        <h5>Routes</h5></div>
                    <div class = "col-sm-4 col-md-4 bottom-xs-pad-30" data-animation = "fadeInUp">
                        <!-- Icon -->
                        <i class = "icon-profile-male fa-3x"></i>
                        <!-- number -->
                        <div class = "count-number" data-count = "9123">
                            <span class = "counter"></span>
                        </div>
                        <!-- Title -->
                        <h5>Travellers</h5></div>
                    <div class = "col-sm-4 col-md-4 bottom-xs-pad-30" data-animation = "fadeInDown">
                        <!-- Icon -->
                        <i class = "icon-trophy5 fa-3x"></i>
                        <!-- number -->
                        <div class = "count-number" data-count = "925">
                            <span class = "counter"></span>
                        </div>
                        <!-- Title -->
                        <h5>Cities</h5></div>
                </div>
            </div>
        </div>
    </div>
</section><!-- call to action -->

<section id = "news" class = "page-section">
    <div class = "container">
        <div class = "row">
            <div class = "col-sm-12 col-md-6">
                <div class = "section-title text-left" data-animation = "fadeInLeft">
                    <!-- Heading -->
                    <h2 class = "title">Videos</h2>
                </div>
                         <iframe src="http://www.youtube.com/embed/W7qWa52k-nE" width="560" height="315" frameborder="0" allowfullscreen></iframe>
            </div>


            <div class = "col-sm-12 col-md-6 testimonails">
                <div class = "section-title text-left" data-animation = "fadeInRight">
                    <!-- Heading -->
                    <h2 class = "title">Testimonials</h2>
                </div>
                <div class = "owl-carousel pagination-1 dark-switch" data-effect = "backSlide" data-pagination = "true" data-autoplay = "true" data-navigation = "false" data-singleitem = "true" data-animation = "fadeInRight">


                    @foreach($testimonials as $t)
                    <div class = "item">
                        <div class = "desc-border bottom-arrow quote">
                            <blockquote class = "small-text">{{$t->message}}</blockquote>
                            <div class = "star-rating text-right">
                                <i class = "fa fa-star text-color"></i>
                                <i class = "fa fa-star text-color"></i>
                                <i class = "fa fa-star text-color"></i>
                                <i class = "fa fa-star text-color"></i>
                                <i class = "fa fa-star-half-o text-color"></i>
                            </div>
                        </div>
                        <div class = "client-details text-center">
                            <div class = "client-image">
                                <!-- Image -->
                                <img class = "img-circle" src = "{{ asset('public/img/testimonial/'.$t->image)}}" width = "80" height = "80" alt = ""/>
                            </div>
                            <div class = "client-details">
                                <!-- Name -->
                                <strong class = "text-color">{{$t->name}}</strong>
                                <!-- Company -->

                                <span>{{$t->post}}</span></div>
                        </div>
                    </div>
                    @endforeach

                   


                </div>
            </div>
        </div>
    </div>
</section><!-- news -->

<!--social -->
<section id="twitter" class="page-section light-bg">
    <div class="image-bg content-in fixed"
         data-background="url({{url('public/frontend/images/sections/bg/bg-10.jpg')}})" style="background-image: url({{url('public/frontend/images/sections/bg/bg-10.jpg')}})">
        <div class="overlay-half-dark"></div>
    </div>
    <div class="twitter-feed">
        <div class="container" data-animation="fadeInUp">
            <div class="row">
                <div class="col-md-12 text-center icons-circle icons-bg-color fa-1x">


                    <div class="text-center">
                        <h2 class="section-title white">Connect With Us</h2>

                        <a href="http://facebook.com" class="btn btn-social-icon btn-facebook">
                            <i class="fa fa-facebook" style="color: #3B5998;"></i></a>
                        <a class="btn btn-social-icon btn-google-plus" style="color:#cd201f "><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon btn-twitter" style="color: #55acee;"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-instagram" style="color:#e4405f; "><i class="fa fa-instagram"></i></a>
                        <a class="btn btn-social-icon btn-pinterest" style="color:#bd081c "><i class="fa fa-pinterest"></i></a>
<!--                        <a class="btn btn-social-icon btn-linkedin" style="color:#0077B5 "><i class="fa fa-linkedin"></i></a>-->
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- social -->

<section id = "clients" class = "page-section tb-pad-30">
    <div class = "container">
        <div class = "section-title text-center" data-animation = "fadeInUp">
            <!-- Heading -->
            <h2 class = "title">Our Bus Partners</h2>
        </div>
        <div class = "row">
            <div class = "col-md-12 text-center" data-animation = "fadeInDown">
                <div class = "owl-carousel navigation-1" data-pagination = "false" data-items = "6" data-autoplay = "true" data-navigation = "true">
                    <a href = "#">
                        <img src = "{{url('public/frontend/images/sections/clients/1.png')}}" width = "150" height = "150" alt = ""/>
                    </a>
                    <a href = "#">
                        <img src = "{{url('public/frontend/images/sections/clients/2.png')}}" width = "150" height = "150" alt = ""/>
                    </a>
                    <a href = "#">
                        <img src = "{{url('public/frontend/images/sections/clients/3.png')}}" width = "150" height = "150" alt = ""/>
                    </a>
                    <a href = "#">
                        <img src = "{{url('public/frontend/images/sections/clients/4.png')}}" width = "150" height = "150" alt = ""/>
                    </a>
                    <a href = "#">
                        <img src = "{{url('public/frontend/images/sections/clients/5.png')}}" width = "150" height = "150" alt = ""/>
                    </a>
                    <a href = "#">
                        <img src = "{{url('public/frontend/images/sections/clients/6.png')}}" width = "150" height = "150" alt = ""/>
                    </a>
                    <a href = "#">
                        <img src = "{{url('public/frontend/images/sections/clients/1.png')}}" width = "150" height = "150" alt = ""/>
                    </a>
                    <a href = "#">
                        <img src = "{{url('public/frontend/images/sections/clients/2.png')}}" width = "150" height = "150" alt = ""/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!-- clients -->
<div id = "get-quote" class = "bg-color get-a-quote black text-center">
    <div class = "container" data-animation = "pulse">
        <div class = "row">
            <div class = "col-md-12">Do you need any Help ?
                <a class = "black" href = "#">Contact Us</a>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function()
    {
        
        $("#hideid").click(function ()
         {
            if ($(this).is(":checked")) 
            {
                $("#data").hide();
            } 
        });

         $("#showid").click(function ()
         {
            if ($(this).is(":checked")) 
            {
                $("#data").show();
            } 
        });

    });
</script>

<script>

    /*for departure autocomplete*/
  $( function() {
    var availableDeparture = [
      "Kathmandu",
      "Pokhara",
      "Biratnagar",
      "Palpa",
      "Birgunj",
      "Nepalgunj",
      "Butwal",
      "Lumbini",
    ];
    $( "#departure" ).autocomplete({
      source: availableDeparture
    });
  } );
/* for arrival autocomplete */
  $( function() {
    var availableArrival = [
      "Kathmandu",
      "Pokhara",
      "Biratnagar",
      "Palpa",
      "Birgunj",
      "Nepalgunj",
      "Butwal",
      "Lumbini",
    ];
    $( "#arrival" ).autocomplete({
      source: availableArrival
    });
  } );

/*for departure datepicker*/
  $( function() {
   $( "#datepicker" ).datepicker({
  duration: "fast"
});
  } );

  /* for return date*/
  $( function() {
    $( "#datepicker1" ).datepicker({
        showAnim: "slideDown"
    });
    
  } );

  </script>

@endsection




