@extends('layout')
@section('nav-bar')
 <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                  
                    @foreach($Items as $Item)
                      <li><a class="page-scroll" href="#{{ $Item->tag_name }}">
                            {{ $Item->tag_name }}
                      </a></li>
                    @endforeach
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

@endsection
@section('header')
  <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Creativity Station!</div>
                <div class="intro-heading">Do you think that you are creative?</div>
                <a href="#services" class="page-scroll btn btn-xl">stay creative:)</a>
            </div>
        </div>
    </header>
@endsection

@section('content')

        <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">whats our solution for being creative</h3>
                </div>
            </div>
            <div class="row text-center">
                @foreach($servs as $serv)
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        
                        <i class="fa fa-{{$serv->icon_name}} fa-stack-1x fa-inverse"></i>    
                    </span>
                    <h4 class="service-heading"> {{ $serv->title }}</h4>
                    <p class="text-muted"> {{ $serv->body }}</p>
                      
                </div>
                 @endforeach
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <p style="display:none;">{{$i=1 }}</p>
                @foreach($prts as $prt)
                
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal{{ $i }}" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ $prt->img_path }}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{ $prt->title }}</h4>
                        <p class="text-muted">{{ $prt->sub_title }}</p>
                    </div>
                </div>
                <p style="display:none;">{{ ++$i }}</p>
                @endforeach

            </div>
        </div>
    </section>
   <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <p style="display:none;">{{$i=1 }}</p>
                        @foreach($abs as $ab)
                        @if(($i%2)!=0)
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{ $ab->img_path }}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>{{ $ab->date }}</h4>
                                    <h4 class="subheading">{{ $ab->title}}</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">{{ $ab->body }}</p>
                                </div>
                            </div>
                        </li>
                        @elseif(($i%2)==0)
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{ $ab->img_path }}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>{{ $ab->date }}</h4>
                                    <h4 class="subheading">{{ $ab->title}}</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">{{ $ab->body }}</p>
                                </div>
                            </div>
                        </li>
                        @endif
                        <p style="display:none;">{{ ++$i }}</p>
                        @endforeach
                       <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
     <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                @foreach($tms as $tm)
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{ $tm->img_path }}" class="img-responsive img-circle" alt="">
                        <h4>{{ $tm->name }}</h4>
                        <p class="text-muted">{{ $tm->job }}</p>
                        <ul class="list-inline social-buttons">
                           @foreach(explode(',', $tm->social_net) as $info)

                            <li><a href="#"><i class="fa fa-{{ $info }}"></i></a>
                            </li>

                           @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
                
           </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                @foreach($lgs as $lg)
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="{{ $lg->img_path }}" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </aside>
        <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="contactus" name="sentMessage" id="contactForm" novalidate>
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger name"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger email"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger phone"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger message"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>

                    </form>

                    @if(count($errors))
                        <ul>
                            @foreach($errors->all() as $error)
                             <li><{{ $error }}</li>
                            @endforeach
                        </ul>
                     @endif
                </div>
            </div>
        </div>
    </section>
    @section('footer')
        <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                          @foreach(explode(',', $tm->social_net) as $info)

                            <li><a href="#"><i class="fa fa-{{ $info }}"></i></a>
                            </li>

                           @endforeach
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    @endsection
        <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <p style="display:none;">{{$i=1 }}</p>
    @foreach($prjs as $prj)
    <div class="portfolio-modal modal fade" id="portfolioModal{{$i }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>{{ $prj->name }}</h2>
                                <p class="item-intro text-muted">{{ $prj->title }}</p>
                                <img class="img-responsive img-centered" src="{{ $prj->img_path }}" alt="">
                                <p>{{ $prj->body }}</p>
                                <p>
                                   
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p style="display:none;">{{ ++$i }}</p>
    @endforeach
    

  


@endsection
