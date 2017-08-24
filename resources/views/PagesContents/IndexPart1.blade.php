<div class="banner col-md-8">
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="images/pic1.jpg" class="img-responsive" alt="" />
                </li>
                <li>
                    <img src="images/pic2.jpg" class="img-responsive" alt="" />
                </li>
                <li>
                    <img src="images/pic3.jpg" class="img-responsive" alt="" />
                </li>
                <li>
                    <img src="images/pic4.jpg" class="img-responsive" alt="" />
                </li>
            </ul>
        </div>
    </section>
    <!-- FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script type="text/javascript">
        $(function(){
            SyntaxHighlighter.all();
        });
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
</div>