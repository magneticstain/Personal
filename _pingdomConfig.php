<?php
	// This file is for Pingdom's Real User Monitoring feature. It SHOULD be on every page...
    echo "
    <script>
	var _prum = [['id', '517e5b3fabe53dc53d000000'],
	             ['mark', 'firstbyte', (new Date()).getTime()]];
	(function() {
	    var s = document.getElementsByTagName('script')[0]
	      , p = document.createElement('script');
	    p.async = 'async';
	    p.src = '//rum-static.pingdom.net/prum.min.js';
	    s.parentNode.insertBefore(p, s);
	})();
	</script>
    ";
?>