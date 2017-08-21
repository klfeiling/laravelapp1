<div class="review-slider">
    <ul id="flexiselDemo1">
        <li>
            <a ><img src="images/r1.jpg" alt=""/></a>
            <div class="slide-title"><h4>Ted</h4> </div>
            <div class="date-city">
                <h5>Dec 12-15</h5>
                <h6>Multi-city</h6>
                <div class="buy-tickets">
                    <a href="show">版权评估</a>
                </div>
            </div>
        </li>
        <li>
            <a ><img src="images/r2.jpg" alt=""/></a>
            <div class="slide-title"><h4>Vitican Tapes</h4></div>
            <div class="date-city">
                <h5>Dec 12-15</h5>
                <h6>Multi-city</h6>
                <div class="buy-tickets">
                    <a href="show">版权评估</a>
                </div>
            </div>
        </li>
        <li>
            <a ><img src="images/r3.jpg" alt=""/></a>
            <div class="slide-title"><h4>Iron Man</h4></div>
            <div class="date-city">
                <h5>Dec 12-15</h5>
                <h6>Multi-city</h6>
                <div class="buy-tickets">
                    <a href="show">版权评估</a>
                </div>
            </div>
        </li>
        <li>
            <a ><img src="images/r4.jpg" alt=""/></a>
            <div class="slide-title"><h4>The Terminator</h4></div>
            <div class="date-city">
                <h5>Dec 12-15</h5>
                <h6>Multi-city</h6>
                <div class="buy-tickets">
                    <a href="show">版权评估</a>
                </div>
            </div>
        </li>
        <li>
            <a ><img src="images/r5.jpg" alt=""/></a>
            <div class="slide-title"><h4>Insidious 3</h4></div>
            <div class="date-city">
                <h5>Dec 12-15</h5>
                <h6>Multi-city</h6>
                <div class="buy-tickets">
                    <a href="show">版权评估</a>
                </div>
            </div>
        </li>
        <li>
            <a ><img src="images/r6.jpg" alt=""/></a>
            <div class="slide-title"><h4>Inside Out</h4></div>
            <div class="date-city">
                <h5>Dec 12-15</h5>
                <h6>Multi-city</h6>
                <div class="buy-tickets">
                    <a href="show">版权评估</a>
                </div>
            </div>
        </li>
    </ul>
    <script type="text/javascript">
        $(window).load(function() {

            $("#flexiselDemo1").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: false,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint:480,
                        visibleItems: 2
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems: 3
                    },
                    tablet: {
                        changePoint:800,
                        visibleItems: 4
                    }
                }
            });
        });
    </script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
</div>