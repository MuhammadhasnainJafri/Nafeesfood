
<link rel='stylesheet' id='rosa-main-style-css'  href="{{asset('Nafees/Assets/css/style.css' )}} " type='text/css' media='all' />
<link rel='stylesheet' id='rosa-main-style-css'  href="{{asset('Nafees/Assets/css/header.css')}} " type='text/css' media='all' />

<script type='text/javascript' src='{{asset("Nafees/Assets/js/jquery.js")}}'></script>
<script type='text/javascript' src='{{asset("Nafees/Assets/js/jquery-migrate.min.js")}}'></script>
<script type='text/javascript' src='{{asset("Nafees/Assets/js/gridable-scripts.js")}}'></script>
<script type='text/javascript' src='{{asset("Nafees/Assets/js/vendor/modernizr.min.js")}}'></script>
<script type='text/javascript' src='{{asset("Nafees/Assets/js/webfont.js")}}'></script>
<script type='text/javascript' src='{{asset("Nafees/Assets/js/TweenMax.min.js")}}'></script>
<script type='text/javascript' src='{{asset("Nafees/Assets/js/EasePack.min.js")}}'></script>
<script type='text/javascript' src='{{asset("Nafees/Assets/js/ScrollToPlugin.min.js")}}'></script>
<script type='text/javascript' src='{{asset("Nafees/Assets/js/index.js")}}'></script>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<script type="text/javascript">
				if (typeof WebFont !== 'undefined') {					WebFont.load({
						google: {families: ['Source Sans Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic:latin-ext','Great Vibes:regular:latin-ext','Cabin:regular:latin','Cabin:regular,italic,500,500italic,600,600italic,700,700italic:latin']},
						classes: false,
						events: false
					});
				} else {
					var tk = document.createElement('script');
					tk.src = 'public/Assets/js/webfont.js';
					tk.type = 'text/javascript';

					tk.onload = tk.onreadystatechange = function () {
						WebFont.load({
							google: {families: ['Source Sans Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic:latin-ext','Great Vibes:regular:latin-ext','Cabin:regular:latin','Cabin:regular,italic,500,500italic,600,600italic,700,700italic:latin']},
							classes: false,
							events: false
						});
					};

					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(tk, s);
				}
			</script>