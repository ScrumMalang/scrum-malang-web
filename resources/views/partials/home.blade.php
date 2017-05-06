@extends('layouts.landing') 
@section('title', 'Dashboard') 
@section('content')
<a id="home" class="in-page-link"></a>

<section class="hero-slider">
  <ul class="slides">
    <li class="countdown-header primary-overlay">
      <div class="background-image-holder parallax-background">
        <img class="background-image" alt="About Image" src="{{asset('img/hero5.jpg')}}">
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
            <img alt="logo" class="logo" src="{{asset('img/logo.png')}}">
            <span class="uppercase text-white">October 3rd to 5th -  San Francisco, California</span>
            <h1 class="text-white large-h1">An evening with the web's most forward thinking innovators.</h1>
          </div>
        </div>
        <!--end of row-->

        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <div class="countdown" data-date="2016/09/10"></div>
          </div>
        </div>
      </div>
      <!--end of container-->
    </li>
  </ul>
</section>

<a id="about" class="in-page-link"></a>

<section class="inline-video">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Welcome to Meetup&nbsp;</h1>
      </div>
    </div>
    <!--end of row-->

    <div class="row">
      <div class="col-md-6">
        <p class="lead">
          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.

        </p>
        <p>
          Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
          saepe eveniet ut et voluptates repudiandae sint et molestiae non.
        </p>
        <a href="#" class="btn">Get Tickets</a>
        <a href="#" class="btn btn-hollow">Subscribe</a>
      </div>

      <div class="col-md-6">
        <div class="embedded-video-holder">
          <iframe delay-src="//player.vimeo.com/video/88883554?color=ffffff" src="//player.vimeo.com/video/88883554?color=ffffff"></iframe>
        </div>
      </div>
    </div>
    <!--end of row-->
  </div>
  <!--end of container-->
</section>

<section class="topics duplicatable-content overlay">

  <div class="background-image-holder parallax-background">
    <img class="background-image" alt="About Image" src="{{asset('img/hero2.jpg')}}">
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="text-white">Topics Covered</h1>
      </div>
    </div>
    <!--end of row-->

    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="topic">
          <i class="pe-7s-ribbon"></i>
          <h3 class="text-white">PHP Development</h3>
          <p class="lead text-white">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
          </p>
          <ul class="ruled-list text-white">
            <li>Introduction to PHP</li>
            <li>How PHP changed the web</li>
            <li>Why developers love PHP</li>
            <li>Improving WordPress workflow</li>
          </ul>
        </div>
      </div>
      <!--end of individual topic-->

      <div class="col-md-4 col-sm-6">
        <div class="topic">
          <i class="pe-7s-id"></i>
          <h3 class="text-white">Grunt Workflow</h3>
          <p class="lead text-white">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
          </p>
          <ul class="ruled-list text-white">
            <li>Introduction to PHP</li>
            <li>How PHP changed the web</li>
            <li>Why developers love PHP</li>
            <li>Improving WordPress workflow</li>
          </ul>
        </div>
      </div>
      <!--end of individual topic-->

      <div class="col-md-4 col-sm-6">
        <div class="topic">
          <i class="pe-7s-medal"></i>
          <h3 class="text-white">UI / UX Design</h3>
          <p class="lead text-white">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
          </p>
          <ul class="ruled-list text-white">
            <li>Introduction to PHP</li>
            <li>How PHP changed the web</li>
            <li>Why developers love PHP</li>
            <li>Improving WordPress workflow</li>
          </ul>
        </div>
      </div>
      <!--end of individual topic-->

    </div>
    <!--end of row-->

  </div>
  <!--end of container-->

</section>

<a id="speakers" class="in-page-link"></a>

<section class="speakers duplicatable-content">

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Speakers</h1>
      </div>
    </div>
    <!--end of row-->

    <div class="row">

      <div class="col-md-6 col-sm-12">
        <div class="speaker-with-bio">
          <div class="speaker">
            <div class="image-holder">
              <img class="background-image" alt="Speaker" src="{{asset('img/speaker4.jpg')}}">
              <div class="hover-state text-center preserve3d">
                <div class="social-links vertical-align">
                  <a href="#"><i class="icon social_twitter"></i></a>
                  <a href="#"><i class="icon social_linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="speaker-description">
            <h2>Pete Dunn</h2>
            <span class="sub">HR at CodeMogul</span>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="speaker-with-bio">
          <div class="speaker">
            <div class="image-holder">
              <img class="background-image" alt="Speaker" src="{{asset('img/speaker1.jpg')}}">
              <div class="hover-state text-center preserve3d">
                <div class="social-links vertical-align">
                  <a href="#"><i class="icon social_twitter"></i></a>
                  <a href="#"><i class="icon social_linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="speaker-description">
            <h2>Salem Marsden</h2>
            <span class="sub">The King of Capital</span>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
            </p>
          </div>
        </div>
      </div>
      <!--end of individual speaker with bio-->

      <!--end of individual speaker with bio-->

      <div class="col-md-6 col-sm-12">
        <div class="speaker-with-bio">
          <div class="speaker">
            <div class="image-holder">
              <img class="background-image" alt="Speaker" src="{{asset('img/speaker3.jpg')}}">
              <div class="hover-state text-center preserve3d">
                <div class="social-links vertical-align">
                  <a href="#"><i class="icon social_twitter"></i></a>
                  <a href="#"><i class="icon social_linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="speaker-description">
            <h2>Simon Sesz</h2>
            <span class="sub">CEO of WhoDat</span>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
            </p>
          </div>
        </div>
      </div>
      <!--end of individual speaker with bio-->

      <!--end of individual speaker with bio-->

      <div class="col-md-6 col-sm-12">
        <div class="speaker-with-bio">
          <div class="speaker">
            <div class="image-holder">
              <img class="background-image" alt="Speaker" src="{{asset('img/speaker2.jpg')}}">
              <div class="hover-state text-center preserve3d">
                <div class="social-links vertical-align">
                  <a href="#"><i class="icon social_twitter"></i></a>
                  <a href="#"><i class="icon social_linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="speaker-description">
            <h2>Toby Wallace</h2>
            <span class="sub">Wild Ideas Man</span>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!--end of row-->


  </div>
  <!--end of container-->

</section>

<a id="schedule" class="in-page-link"></a>

<section class="schedule schedule-with-text">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <h1>Meetup is set over two days of ground-breaking speeches for web enthusiasts</h1>

        <p>
          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia
          animi, id est laborum et dolorum fuga.
        </p>

        <a href="#" class="btn">Buy a ticket</a>

      </div>

      <div class="col-md-7 col-sm-6">
        <ul class="schedule-overview">
          <li>
            <div class="schedule-title">
              <span class="time">9:30am - 11:30am</span>
              <span class="title">Welcome &amp; Registration</span>
            </div>

            <div class="schedule-text">
              <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.
              </p>
            </div>

            <div class="marker-pin">
              <div class="top"></div>
              <div class="middle"></div>
              <div class="bottom"></div>
            </div>
          </li>
          <!--end of individual schedule item-->

          <li>
            <div class="schedule-title">
              <span class="time">11:30am - 1pm</span>
              <span class="title">Improving WordPress Workflow</span>
            </div>

            <div class="schedule-text">
              <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.
              </p>
            </div>

            <div class="marker-pin">
              <div class="top"></div>
              <div class="middle"></div>
              <div class="bottom"></div>
            </div>
          </li>
          <!--end of individual schedule item-->

          <li>
            <div class="schedule-title">
              <span class="time">1pm - 2pm</span>
              <span class="title">Catered Lunch</span>
            </div>

            <div class="schedule-text">
              <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.
              </p>
            </div>

            <div class="marker-pin">
              <div class="top"></div>
              <div class="middle"></div>
              <div class="bottom"></div>
            </div>
          </li>
          <!--end of individual schedule item-->

          <li>
            <div class="schedule-title">
              <span class="time">2pm - 3:30pm</span>
              <span class="title">Advanced MySQL Usage</span>
            </div>

            <div class="schedule-text">
              <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.
              </p>
            </div>

            <div class="marker-pin">
              <div class="top"></div>
              <div class="middle"></div>
              <div class="bottom"></div>
            </div>
          </li>
          <!--end of individual schedule item-->
        </ul>
      </div>

    </div>
    <!--end of row-->
  </div>
  <!--end of container-->
</section>

<section class="lightbox-gallery preserve-3d">

  <div class="gallery-holder">
    <ul>
      <li>
        <a href="img/lb1.jpg" class="lightbox-link-mrv" data-lightbox="true" data-title="Meetup 2013">
          <div class="background-image-holder">
            <img class="background-image" alt="Lightbox Image" src="{{asset('img/lb1.jpg')}}">
          </div>
        </a>
      </li>

      <li>
        <a href="img/lb2.jpg" class="lightbox-link-mrv" data-lightbox="true" data-title="Meetup 2013">
          <div class="background-image-holder">
            <img class="background-image" alt="Lightbox Image" src="{{asset('img/lb2.jpg')}}">
          </div>
        </a>
      </li>

      <li>
        <a href="img/lb3.jpg" class="lightbox-link-mrv" data-lightbox="true" data-title="Meetup 2013">
          <div class="background-image-holder">
            <img class="background-image" alt="Lightbox Image" src="{{asset('img/lb3.jpg')}}">
          </div>
        </a>
      </li>

      <li>
        <a href="img/lb4.jpg" class="lightbox-link-mrv" data-lightbox="true" data-title="Meetup 2013">
          <div class="background-image-holder">
            <img class="background-image" alt="Lightbox Image" src="{{asset('img/lb4.jpg')}}">
          </div>
        </a>
      </li>

      <li>
        <a href="img/lb5.jpg" class="lightbox-link-mrv" data-lightbox="true" data-title="Meetup 2013">
          <div class="background-image-holder">
            <img class="background-image" alt="Lightbox Image" src="{{asset('img/lb5.jpg')}}">
          </div>
        </a>
      </li>

      <li>
        <a href="img/lb6.jpg" class="lightbox-link-mrv" data-lightbox="true" data-title="Meetup 2013">
          <div class="background-image-holder">
            <img class="background-image" alt="Lightbox Image" src="{{asset('img/lb6.jpg')}}">
          </div>
        </a>
      </li>

      <li>
        <a href="img/lb7.jpg" class="lightbox-link-mrv" data-lightbox="true" data-title="Meetup 2013">
          <div class="background-image-holder">
            <img class="background-image" alt="Lightbox Image" src="{{asset('img/lb7.jpg')}}">
          </div>
        </a>
      </li>

      <li>
        <a href="img/lb8.jpg" class="lightbox-link-mrv" data-lightbox="true" data-title="Meetup 2013">
          <div class="background-image-holder">
            <img class="background-image" alt="Lightbox Image" src="{{asset('img/lb8.jpg')}}">
          </div>
        </a>
      </li>

      <li>
        <a href="img/lb1.jpg" class="lightbox-link-mrv" data-lightbox="true" data-title="Meetup 2013">
          <div class="background-image-holder">
            <img class="background-image" alt="Lightbox Image" src="{{asset('img/lb1.jpg')}}">
          </div>
        </a>
      </li>

      <li>
        <a href="img/lb2.jpg" class="lightbox-link-mrv" data-lightbox="true" data-title="Meetup 2013">
          <div class="background-image-holder">
            <img class="background-image" alt="Lightbox Image" src="{{asset('img/lb2.jpg')}}">
          </div>
        </a>
      </li>
    </ul>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div>
          <i class="icon pe-7s-camera text-white"></i>
          <h1 class="text-white">Memories from Meetup 2013</h1>
          <span class="lead text-white">Follow this year's event on <strong><a class="text-white" href="#">Instagram</a></strong></span>
        </div>
      </div>
    </div>
    <!--end of row-->
  </div>
  <!--end of container-->
</section>

<a id="contact" class="in-page-link"></a>

<section class="contact-tweets">
  <div class="container vertical-align">
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <i class="icon social_twitter"></i>
        <div class="tweets-feed" data-widget-id="492085717044981760">

        </div>
        <span class="text-white">Follow <a href="#">@mrareweb</a> for more updates</span>
      </div>
    </div>
    <!--end of row-->
  </div>
  <!--end of container-->

  <div class="map-holder col-md-6 col-sm-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.2140611954183!2d-122.12117800000001!3d37.408414999999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba7963491697%3A0x2f1c2bf242a2d45d!2sElks+Lodge!5e0!3m2!1sen!2sau!4v1409714993346"></iframe>
  </div>
</section>

<a id="subscribe" class="in-page-link"></a>

<section class="subscribe-2">

  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <i class="icon pe-7s-pen"></i>
        <i class="icon pe-7s-mail-open-file"></i>
        <i class="icon pe-7s-paper-plane"></i>
        <h1 class="large-h1">Subscribe to stay informed</h1>
      </div>
    </div>
    <!--end of row-->

    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <form class="email-subscribe mail-list-signup">
          <div class="col-sm-7">
            <input class="form-email signup-email-field" type="text" placeholder="Enter your email address">
          </div>

          <div class="col-sm-5">
            <input class="btn" type="submit" value="Subscribe">
          </div>

          <div class="col-sm-12 text-center">
            <span>*We never share your email with 3rd parties</span>
          </div>
          <iframe class="mail-list-form" srcdoc="">
          </iframe>
        </form>
      </div>
    </div>
    <!--end of row-->
  </div>
  <!--end of container-->

</section>

@endsection
@section('scripts')
<script>
  $(document).ready(function() {

  });
@endsection