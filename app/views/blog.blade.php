<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="initial-scale=1.0, width=device-width, minimum-scale=1.0, maximum-scale=2.0">
        <title>Medium-Style Article Transition</title>
        <meta name="description" content="Page transition for the next article as seen on Medium" />
        <meta name="keywords" content="page transition medium, next article transition, medium.com, javascript, css" />
        <meta name="author" content="Maks Surguy" />
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='css/styles.css' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src='http://code.jquery.com/jquery-1.10.2.min.js'></script>
        <script type="text/javascript">
        /*   jQuery Setup                                                           
        ************************************************************************/ 
        jQuery.ajaxSetup({
          cache: false
        })

        /*   ArticleAnimator Object                                                           
        ************************************************************************/ 
        var ArticleAnimator = ArticleAnimator || {
          canScroll:          true,
          initialLoad:        true,
          animationDuration:  500,
          postCount:          {{$postCount}},
          currentPostIndex:   {{$currentPostID}},
          postCache:          {},
          pageTemplate:       null,
          nextPostID:         {{$nextPostID}},
          firstPostIndex:     {{$currentPostID}}
        };
        </script>

        <script type="text/javascript" src='{{url("js/app.js")}}'></script>

        <script type="text/javascript">
        /*  Document ready.                                                         
        ************************************************************************/ 
        $(document).ready(function(){

          /* A couple of selections. */
          $body         = $(document.body);
          $window       = $(window);
          $html         = $(document.documentElement);

          /* Let's get it started. */
          ArticleAnimator.load();

        })
        </script>
    </head>
    <body>
        <!-- Page. --> 
        <article class='page hidden'>
            <div class='big-image'>
                <div class='inner'>
                    <div class='fader'>
                        <div class='text'>
                            <a class='goto-next'>Read Next</a>
                            <h1 class='title'></h1>
                            <h2 class='description'></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class='content'>
                <h3 class='byline'>
                Published <time></time> by <span class='author'></span>
                </h3>
                <h1 class='title'></h1>
                <h2 class='description'></h2>
                <div class='text'></div>
            </div>
        </article>
    </body>
</html>