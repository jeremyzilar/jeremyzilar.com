	
	
	<!-- JS -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/jquery.cycle2.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/custom.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
		var data = <?php echo json_encode($jobs, JSON_PRETTY_PRINT); ?>;
		// console.log(data);
	</script>


  <!-- GA -->
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-3456252-2']);
    _gaq.push(['_setDomainName', 'jeremyzilar.com']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</body>
</html>
