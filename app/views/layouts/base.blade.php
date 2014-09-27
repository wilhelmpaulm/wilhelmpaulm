
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="Wilhelm Paul Martinez">
        <meta name="subject" content="Computer Science">
        <meta name="keywords" content="De La Salle University, DLSU, Information, Systems, Information Systems, Blog, Resume, Programming, UI, UX, Design">
        <meta name="classification" content="Computer Science, programming, tutorials, requests, blog, drawing tutorials">
        <meta name="description" content="I'm Wilhelm a very random person who loves to code and draw, and this, this is my blog" />
        <meta name="abstraction" content="I'm Wilhelm a very random person who loves to code and draw, and this, this is my blog" name="description" />
        <meta name="author" content="Wilhelm Paul Martinez">
        <link rel="shortcut icon" href="{{URL::asset('apple-touch-icon-144.png')}}">

        <title>wilhelm paul</title>

        <!--         Bootstrap core CSS 
                {{HTML::style("css/bootstrap.css")}}
                {{HTML::style("css/wilhelmpaulm.css")}}
                {{HTML::script("js/jquery.js")}}
                {{HTML::script("js/bootstrap.min.js")}}
                {{HTML::style("css/font-awesome.css")}}-->

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


        <link href='http://fonts.googleapis.com/css?family=Cousine' rel='stylesheet' type='text/css'>
        <script>
(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-43721641-1', 'wilhelmpaulm.com');
ga('send', 'pageview');

        </script>
        <style>
            body {
                background: url("{{URL::asset('backgrounds/zwartevilt.png')}}");
                padding-top: 40px;
                padding-bottom: 20px;
                font-family: 'Cousine', "sans-serif";
            }
            a:hover {
                text-decoration: none; 
            }
            
            
            .c-turquoise{color: #1ABC9C;}
            .c-greensea{color: #16A085;}
            .c-peterriver{color: #3498DB;}
            .c-belizehole{color: #2980B9;}
            .c-amethyst{color: #9B59B6;}
            .c-wisteria{color: #8E44AD}
            .c-sunflower{color: #F1C40F;}
            .c-orange{color: #F39C12;}
            .c-carrot{color: #E67E22;}
            .c-pumpkin{color: #D35400;}
            .c-alizarin{color: #E74C3C;}
            .c-pomegranate{color: #C0392B;}
            .c-clouds{color: #ECF0F1;}
            .c-silver{color: #BDC3C7;}
            .c-emerald{color: #2ECC71}
            .c-nephritis{color: #27AE60}
            .c-whitesmoke{color: whitesmoke;}
            .c-white{color: white;}
            .c-brown{color: #632F00;}
            .c-gray{color: #696969;}
            .c-red{color: #E51400;}
            .c-darkred{color: #B81B1B;}
            .c-orange{color: #FF7D23;}
            .c-green{color: #15992A;}
            .c-lime{color: #8CBF26;}
            .c-lightblue{color: #1BA1E2;}
            .c-blue{color: #006AC1;}
            .c-teal{color: #00ABA9;}
            .c-pink{color: #FF76BC;}
            .c-magenta{color: #AE113D;}
            .c-purple{color: #7200AC;}
            .c-black{color: #000;}
            .c-p1{color: #649203;}
            .c-p2{color: #8bb029;}
            .c-p3{color: #f8ffd8;}
            .c-p4{color: #e0daa8;}
            .c-p5{color: #c2bd91;}
            .c-p6{color: #1d4025;}
            .c-p7{color: #45734c;}
            .c-p8{color: #528c37;}
            .c-p9{color: #9abf80;}
            .c-p10{color: #f2f0d0;}
            .c-s1{color: #012d3d;}
            .c-s2{color: #38ad9e;}
            .c-s3{color: #ffeb9e;}
            .c-s4{color: #ff6867;}
            .c-s5{color: #f9fcfc;}

        </style>
        
    </head>

    <body class="">

        <div class="container f-cos">
            @yield("main")
            <hr>
            <footer>
                <p class="c-lime">&copy; <span class="c-teal">wilhelmpaulm</span></p>
            </footer>
        </div> 

    </body>
</html>
