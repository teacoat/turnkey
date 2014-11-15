  <footer>
  	<div class="inner">
  		<?php echo kirbytext($site->copyright()) ?>
  	</div>
  </footer>

</body>

</html>

<script type="text/javascript" src="/assets/scripts/jquery.js"></script>
<script type="text/javascript" src="/assets/scripts/fss.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/scripts/shadowbox.css">
<script type="text/javascript" src="/assets/scripts/shadowbox.js"></script>

<script type="text/javascript">
	Shadowbox.init();

		var headerwidth = $('header').width();
		var headerheight = $('header').height();

		var container = document.getElementById('header');
	    var renderer = new FSS.CanvasRenderer();
	    var scene = new FSS.Scene();
	    var light = new FSS.Light('#171817', '#203145');
	    var geometry = new FSS.Plane(headerwidth, headerheight, 8, 5);
	    var material = new FSS.Material('#FFFFFF', '#FFFFFF');
	    var mesh = new FSS.Mesh(geometry, material);
	    var now, start = Date.now();

	    function initialise() {
	      scene.add(mesh);
	      scene.add(light);
	      container.appendChild(renderer.element);
	      window.addEventListener('resize', resize);
	    }

	    function resize() {
	      renderer.setSize(container.offsetWidth, container.offsetHeight);
	    }

	    function animate() {
	      now = Date.now() - start;
	      light.setPosition(300*Math.sin(now*0.001), 200*Math.cos(now*0.0005), 60);
	      renderer.render(scene);
	      requestAnimationFrame(animate);
	    }

	    initialise();
	    resize();
	    animate();
</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56248369-1', 'auto');
  ga('send', 'pageview');

</script>