<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfolivo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

    </head>
    <body>
        <div id="landingpage" class="landingpage">
            <div id="portfolivo-bubbles"></div>
            <ul class="navbar">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#hobbies">Hobbies</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <p class="Portfolivo">Portfolivo</p>
            <hr>

            <a class="scrolldownbutton" href="#learning-outcomes"><span></span>Scroll</a>
        </div>



        <div class="learning-outcomes" id="learning-outcomes">

            <div class="wrapper">
                <div class="parent">
                    <div class="child">
                        <h1 class="scrollEffect">learning outcomes</h1>
                        <p class="learning-outcomes-p scrollEffect">some stuff i did</p>
                    </div>
                </div>
            </div>

            <div class="buttonrow">
                <span class="buttonwrap">
                    <a href="interactivemedia.php"><button class="IM-button">Interactive Media</button></a>
                </span><br>
                <span class="buttonwrap">
                    <a href="development.php"><button class="development-button">Development</button></a>
                </span><br>
                <span class="buttonwrap">
                    <a href="design.php"><button class="design-button">Design</button></a>
                </span>
            </div>

            <div class="row">
                <a href="InteractiveMedia/1.php"><img class="IM-img1" src="img/Adobexd.png" alt="Interactive Media 1"width="250" height="250"></a>
                <a href="Development/1.php"><img class="Development-img1" src="img/4.JPG" alt="Development 1"></a>
                <a href="Design/1.php"><img class="Design-img1" src="img/1.JPG" alt="Design 1"></a>
            </div>

            <div class="row" style="margin-top: 50px;">
                <a href="InteractiveMedia/2.php"><img class="IM-img2" src="img/Iteration.png" alt="Interactive Media 2"></a>
                <a href="Development/2.php"><img class="Development-img2" src="img/5.JPG" alt="Development 2"></a>
                <a href="Design/2.php"><img class="Design-img2" src="img/10.JPG" alt="Design 2"></a>
            </div>

            <div class="row" style="margin-top: 100px;">
                <a href="InteractiveMedia/3.php"><img class="IM-img3" src="img/Iteration2.png" alt="Interactive Media 3"></a>
                <a href="Development/3.php"><img class="Development-img3" src="img/6.JPG" alt="Development 3"></a>
                <a href="Design/3.php"><img class="Design-img3" src="img/9.JPG" alt="Design 3"></a>
            </div>

        </div>

    </body>

    <script>


        // Give Bubbles image an offset based on Cursor placement ~Ivo

        $("#landingpage").mousemove(function(e) {
            beweegIMG(e, "#portfolivo-bubbles", -20);
        });

        function beweegIMG(e, target, movement) {
            var $this = $("#landingpage");
            var relY = e.pageY - $this.offset().top;

            TweenMax.to(target, 1, {
                y: (relY - $this.height() / 2) / $this.height() * movement
            });
        }


        // Scroll to ID with delay JavaScript ~Ivo

        $(function() {
            $('.scrolldownbutton').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
            });
        });


        // Revert scroll based on user scroll ~Ivo

        var controller = new ScrollMagic.Controller();

        $(".wrapper").each(function() {
            var tl = new TimelineMax();
            var child = $(this).find(".child");
            tl.to(child, 1, { y: -80, ease: Linear.easeNone });

            var scene = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 1,
                duration: "100%"
            })
                .setTween(tl)
                .addTo(controller);
        });

    </script>

</html>