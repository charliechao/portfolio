   <!-- scripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="js/mapapi.min.js"></script>

        <!-- Plugins -->
        <script>
        <!-- Initialize smooth scroll -->        
        smoothScroll.init();   
        <!-- initialize skrollr --> 
        if (document.documentElement.clientWidth > 600) {
          var s = skrollr.init();
          }       
        <!-- initialze fittext --> 
        $("#lpname,#lptitle").fitText(1, { minFontSize: '40px', maxFontSize: '60px' });
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-50294220-1', 'auto');
          ga('send', 'pageview');
        </script>