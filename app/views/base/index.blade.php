@extends("layouts.base")
@section("main")
<div class="container">
    <p class="text-center"><img src="{{URL::asset('self/2.jpg')}}" class="img-circle" style="width: 150px"/> </p>
    <a href="http://wilhelmpaulm.com" ><h1 class="text-center fa-4x c-sunflower">wilhelm paul</h1></a>
    <br>

    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="row" style="margin-bottom: 40px">
                <div class="col-md-3">
                    <p class=" c-gray text-right fa-2x"><strong>About me</strong></p>
                    <!--<p class="text-right"><a href="http://twitter.com/wilhelmpaulm" target="_new"><i class="fa fa-twitter fa-4x c-lightblue"></i></a></p>-->
                </div>
                <div class="col-md-9 slime">
                    <p class="c-lime" >
                        I'm <strong>Wilhelm Paul Martinez</strong> and I'm taking up BS Information systems in De La Salle University.
                        I love programming, drawing, singing and speaking in public. </p>

                    <p class="c-lime"> Most of my days I simply enjoy reading books and playing indie games while I study various programming languages.
                    </p>

                </div>
            </div>


            <div class="row" style="margin-bottom: 40px">
                <div class="col-md-3">
                    <p class="c-gray text-right fa-2x"><strong>Programming</strong></p>
                    <!--<p class="text-right "><a href="http://www.wilhelmpaul.deviantart.com/" target="_new"><i class="fa fa-github fa-4x c-white"></i></a></p>-->
                </div>
                <div class="col-md-9 slime">
                    <p class="c-carrot" >
                        I love writing code for fun(. . . and of course for profit). One of my passions is studying programming 
                        languages. So far I've familiarized myself with major languages such as Java, PHP, C, Javascript and Ruby. I also study languages which 
                        are not as popular.

                    </p>
                    <p class="c-carrot" >
                        <i class="fa fa-angle-right"></i> <a href="http://pitchin.wilhelmpaulm.com" target="_new" class="c-carrot">PitchIn - Party Organizing Application</a><br>
                        <i class="fa fa-angle-right"></i> <a href="http://lamco.wilhelmpaulm.com" target="_new"  class="c-carrot">Lamco - Paper Company Production Management</a><br>
                        <i class="fa fa-angle-right"></i> <a href="http://mikey.wilhelmpaulm.com" target="_new" class="c-carrot">HRIS - Human Resource Management System</a><br>
                        <i class="fa fa-angle-right"></i> <a href="http://pacsa.wilhelmpaulm.com" target="_new"  class="c-carrot">PACSA - PACSA Event Registration</a><br>
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom: 40px">
                <div class="col-md-3">
                    <p class="c-gray text-right fa-2x"><strong>Drawing</strong></p>
                    <!--<p class="text-right "><a href="http://www.wilhelmpaul.deviantart.com/" target="_new"><i class="fa fa-pencil fa-4x c-greensea"></i></a></p>-->
                </div>
                <div class="col-md-9 slime">
                    <p class="c-lightblue" >
                        One of my favorite past times before I went into programming was drawing. 
                        It was my childhood passion and dream.
                    </p>
                    <p class="c-lightblue" >
                        I can also do character design and story lines.
                    </p>
                </div>
            </div>
            <div class="row" style="margin-bottom: 40px">
                <div class="col-md-3">
                    <p class=" c-gray text-right fa-2x"><strong>Events</strong></p>
                    <!--<p class="text-right"><a href="http://twitter.com/wilhelmpaulm" target="_new"><i class="fa fa-twitter fa-4x c-lightblue"></i></a></p>-->
                </div>
                <div class="col-md-9 slime">
                    <p class="c-s4" >
                        I have fun volunteering and participating in developer events whenever I have spare time.</p>


                    <p class="c-s4" >
                        <i class="fa fa-angle-right"></i> 3rd Startup Weekend Manila (first place + people's choice award)<br>
                        <i class="fa fa-angle-right"></i> 2nd DLSU Hacker Cup (first place)<br>
                    </p>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <p class="c-gray text-right"><strong>twitter</strong></p>
                </div>
                <div class="col-md-9 slime">
                    <a href="http://twitter.com/wilhelmpaulm" target="_new"><p class="c-lightblue" >@wilhelmpaulm</p></a>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-3">
                    <p class="c-gray text-right"><strong>email</strong></p>
                </div>
                <div class="col-md-9 slime">
                    <a href="mailto:wilhelmpaulm@gmail.com" target="_new"><p class="c-alizarin" >wilhelmpaulm@gmail.com</p></a>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-3">
                    <p class="c-gray text-right"><strong>deviantart</strong></p>
                </div>
                <div class="col-md-9 slime">
                    <a href="http://wilhelmpaulm.deviantart.com" target="_new"><p class="c-lime" >wilhelmpaul</p></a>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-3">
                    <p class="c-gray text-right"><strong>linkedin</strong></p>
                </div>
                <div class="col-md-9 slime">
                    <a href="http://ph.linkedin.com/in/wilhelmpaulm" target="_new"><p class="c-blue" >Wilhelm Paul Martinez</p></a>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    var slime = $(".slime");
    slime.hide();
//    slime.each(function(index) {
//        $(this).delay(1500 * index).show("slow");
//    });
    slime.show(2500);
//    $(".slime").show(2500);

</script>
@stop