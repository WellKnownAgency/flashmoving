@section('title', "$post->metatitle")
@section('dscr', "$post->dscr")
@section('keywords', '')

@extends('layouts.main')

@section('content')
<div id="wrapper" class="">
    <header id="header" class="blog-header ">
        <div style="color: #fff;" class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <div class="container"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Etalon Moving." href="https://goborntomove.com/" class="home"><span property="name">Home</span></a>
                <meta property="position" content="1">
              </span><span class="fa fa-angle-right"></span><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Services." href="https://goborntomove.com/blogs/" class="post post-page"><span property="name">Blog</span></a>
                <meta property="position" content="2">
              </span><span class="fa fa-angle-right"></span><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Corporate moving." href="https://goborntomove.com/local-moving/{{$post->slug}}" class="post post-page current-item"><span property="name">{{$post->title}}</span></a>
                <meta property="position" content="3">
                </span>
            </div>
        </div>
    </header>
    <section id="single-page" class="section corporate-moving" style="">
        <div class="row single-page-heading ">
            <div class="header-overlay parallax-overlay darkend" style="background-image:url('/images/blog/{{$post->image}}')"></div>
            <div class="container">
                <h1 class="section-heading" style=" color:#fff;">{{$post->title}}</h1></div>
        </div>
        <div class="container ">
            <div class="row single-page-content">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-9 vc_col-lg-9 vc_col-md-6 vc_col-xs-12">
                        <div class="vc_column-inner vc_custom_1499437250775">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1498318207858">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper" style="color:rgb(51,51,51);">
                                                      {!!$post->body!!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-6 vc_col-xs-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_wp_custommenu wpb_content_element">
                                    <div class="widget widget_nav_menu">
                                      <div class="card__blog radius shadowDepth1">
                                        <div class="card__image border-tlr-radius">
                                          <a href="/get-a-quote"><img src="/images/moving_can_be_easy.png" alt="image" class="border-tlr-radius"></a>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="vc_wp_text wpb_content_element">
                                    <div class="widget widget_text">
                                        <div class="widgettitle">Get a quote</div>
                                        <div class="textwidget">
                                            <p>To Get a Free Online Quote you have to go through few simple steps. For more accurate estimate contact us.</p>
                                            <p><a href="/get-a-quote" class="tt_button pull-left tt_secondary_button mt2">Get a Quote</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_wp_text wpb_content_element">
                                    <div class="widget widget_text">
                                        <div class="textwidget">
                                            <p><a class="tt_button pull-left tt_secondary_button mt2" href="/blogs">All Posts</a></p>
                                        </div>
                                    </div>
                                </div>
																<div class="vc_wp_text wpb_content_element">
                                    <div class="widget widget_text">
                                        <div class="textwidget">
                                            <p><a style="color:white;" href="https://moving-crm.com">Moving Company Software</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="section corporate-moving" style="">
      <div class="row">
      <div id="disqus_thread" class="col-md-6 col-md-offset-3"></div>
        <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://borntomove.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      </div>
    </section> -->
</div>
@stop

<!-- @section('comments')
<script id="dsq-count-scr" src="//borntomove.disqus.com/count.js" async></script>
@stop -->
