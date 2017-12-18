<!--Footer-->	
<footer id="footer" class="footer tCenter">

    <!--Footer top-->
    <div class="footerTop ofsInTop ofsInBottom">
        <!--Container-->
        <div class="container clearfix">
            <!--Footer top inner-->
            <div class="ftInner">
                <div class="info one-third column">
                    <span><i class="icon-mobile"></i>+ 123-456-789-456</span>	
                </div>
                <div class="info one-third column">
                    <div class="mail">
                        <i class="icon-paper-plane"></i>
                        <a href="mailto:suport@mutationmedia.net">suport@mutationmedia.net</a>	
                    </div>
                </div>
                <div class="info one-third column">
                    <span><i class="icon-location"></i>Street Road, City Name IN 567 890.</span>	
                </div>
            </div> <!--End footer top inner-->
        </div><!--End container-->
    </div><!--End footer top-->

    <!--Footer bottom-->
    <div class="footerBottom  ofsBMedium">
        <!--Container-->
        <div class="container clearfix">
            <!--Footer bottom inner-->
            <div class="fbInner">
                <div class="top">
                    <a class="scroll" href="#wrapper"><i class=" icon-angle-double-up"></i></a>
                </div>
                <p>&copy; 2015 <span class="brand">pixel agency</span> All Rights Reserved.</p>

                <!--Socials Footer-->
                <ul class="socialsFooter">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
                <!--End socials footer-->
            </div><!--End footer bottom inner-->
        </div><!--End container-->
    </div><!--End footer bottom-->
</footer><!--End footer-->
</div><!--End wrapper-->
<?php wp_footer(); ?>
<script>
    (function ($) {
        "use strict";


        //---------------------------------- Google map location -----------------------------------------//

        var styles = [
            {
                stylers: [
                    {saturation: -100}

                ]
            }, {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [
                    {hue: "#74b7b0"},
                    {visibility: 'simplified'}
                ]
            }, {
                featureType: 'road',
                elementType: 'labels',
                stylers: [
                    {visibility: 'on'}
                ]
            }
        ],
                lat = -33.867487,
                lng = 151.20699,
                customMap = new google.maps.StyledMapType(styles,
                        {name: 'Styled Map'}),
                mapOptions = {
                    zoom: 14,
                    scrollwheel: false,
                    center: new google.maps.LatLng(lat, lng),
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.ROADMAP]
                    }
                },
                map = new google.maps.Map(document.getElementById('map'), mapOptions),
                myLatlng = new google.maps.LatLng(lat, lng),
                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    icon: {
                        url: 'images/marker.png',
                        scaledSize: new google.maps.Size(36, 56)
                    }
                });

        map.mapTypes.set('map_style', customMap);
        map.setMapTypeId('map_style');

    })(jQuery);

    //---------------------------------- End google map location -----------------------------------------//

</script>

<!-- Google analytics -->


<!-- End google analytics -->
</body>
</html>