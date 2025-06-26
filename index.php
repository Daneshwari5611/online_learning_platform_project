<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>eLearning - Free Educational Responsive Website</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php
		include "nav.php";
		/*if(isset($_SESSION["username"]))
		{
			//$username=$_SESSION["username"];
		}
		else{ echo 'session not started';}*/

	?>

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="banner-content">
				<div id="da-slider" class="da-slider">
					<div class="da-slide">
						<h2>Online Education</h2>
						<p>The purpose is to teach</p>
						<div class="da-img"></div>
					</div>
					<div class="da-slide">
						<h2>Online Education</h2>
						<p>The purpose is to teach</p>
						<div class="da-img"></div>
					</div>
					<div class="da-slide">
						<h2>Online Education</h2>
						<p>The purpose is to teach</p>
						<div class="da-img"></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /Header -->
	
	<div id="courses">
		<div class="container">
			<h2>Available Courses</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="login.php">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAkFBMVEX////kTSbjQxLxsKLkSRnkSSDoa1D++PboaU7kSyPjRxvjQArjRhriPQDjRRf539n98/H0vLH87er1w7n75uLrgmz2y8PsiXPqe2L30Mfzt6vpdVv1w7jmXj/vno353NbmWzboZkbtjXnumIjwpZflVS/tk4DrgGjmWzfrhXDpdl/vm4rnY0LyrZ7vopPob1UnDsOxAAAJU0lEQVR4nO2daXviOBCEwcFxZGOHcIWc5CLH5vr//27lMEwOuoSNq4Unj97vu5oKttTVh9zpBAKBQCAQCAQCgUAgEAgEAgE/vO61mVeCwl4WtZesR1D4EnfbS/xCUHjWaoVnBIVP6a5lOEifCApvi13LcFDcEhTetVrhHUHhXrRrGQ6iPYLCo2zXMhxkRwSF01YrnBIUzvNdy3CQzwkKx61WOCYoHLRa4YChsLdrGQ56DIXJwuxaB8QsEobClxYrfGEo7Oy3N/SO3xkCO7P2ht7pjKLwuMUKjykK7/u7FgLp31MUXrbXXBSXFIWv7TUXESMR1WpzQbEWrTYXFGvRanNBsRadziH+DU3sAxxTRYcUhWMYepuXfR/gsLHHME+dzrCLVsjOKQts4hw9RKY7pCwwgOYiOqUssIlTdFyZK4Z5slxAhYxM12bggWwuSCscIHNBCik28YyCqviAtMI7UkgKfDcBQ3+Seep0HuAKjLrIZmBtKH0grXCDzEV8TVrBzTVS2L8hrQDNhVmQVnAD93LaPgArF6ZPWsENdG+0vXwEw7aItIKTBLq3bERaApuLiHTiOhlihRxr0emcQIUZJy50M8bLn5CWmOMlOO5l58t7+CO68PAIDfRfBBc+tgGskJMncQOtBXErT6G54OS63NzB4zilrXGlHlS4gO0u5pG2BqzN0AJDF9ha7NPWgLUZWnDvXB1aC05dpgSbC9mgJUwcTxCnalHyVtNk94oeEZhpK95oCrG5kBMlnho2iWkiWLkAyS6Y9uBCPI2hfQIJy4mfmirNPNnIEFYuUjEy9FRTzXlR8SFUKBcO4M5EVsipWpQMoUK5+OOppppzcvolCVQomwscK3MV0gQ6ckHydgZLKVwKokJcmxHNBd6ZmFBzmTAnK5sLvDMxoeajYV5dDg3xzkRVyKwpwJmLVLRPAy+nBWXWYgU0obJ9GsCqMRPKrMUKbC5E+5Q8elHIsxaOIzyWGzxhTZUJNUmEK+lyk66XaTBqFwE2F7Fon7yYC6K1cB3hcrM8THswIVoL18yFPPDgZd6NMmuxYggDTdlceJl3y3jWwiqEO8fuzIWJmQpxW5Tc+IWrxkSFC2Z5NsFtUeKW7cNcmAvKrMUKeIRH4hAnLmryIOb0S/6raZ8K/bAt/o+qEB7hcm1m7CHjnU6oCnHlQq6O8KoW2Jpy6164PVC78QunF56p6+AWzyvqOuvUTBFtDT7CGVdvuMBFfG6DMu6HYCYtJWqmarcGH3A59dxdA08hk7uV5vBhoUb462BXE3EVjqHhI42tIPDATp/7px0atKVRfeg6cAMwhmktXAPd1FzCOjh/Qhnj/gJsGlJu/MI5MF670JJdTZXgli/WNMkK2NRCDp5+cg/DRa55cjUm6U6VQFMDQv7twc1l7JW+g6dJ2H9Z/dkjGV/WwmUu2Hvad3xZC1dblO7cDJ7uZJ9SjrYozdB7AGMpeqSB84PUxOxPxrDEQ48WvUXA3zmE5QF6xI9djLk+YHAtxkYeXRtuiyIN5WeiQjxNwnfe2nl6eW/EBRB+9kS7miTvjT6mSVZo3/gl742wCUThGIbhE0uh2CwKe3EVMtHQXLAUiscqbMZSCPi1mw/kvRHOsihM6yh3NptUVAi7/qkNUUuUO5tB/QO+/QpTc8rNB/LOgRvkFK5VUe5sliu6w5odEo1Qbj6Qm0WH/qyF+n1YhdhsjGesFYoJyp3NdRvGibMWKxzmgkHdpn+Fol7iuFSMoVDcG/EdWLGCQli5oCBbCzz4eKWQHdINveW9EfY4qrSA6HY21+xTVbm/CX/nwkjfR6kZxkaiQhjuU2ctVmCr9n4ocFLrtQUVXXgHF3GM+5OalQvckioqlJtFsbXQqOnhWqVYucAtqeL/Q24WhUPhctNnQ3C92TSfKpGfA9w9oHJjoyOx13yqRN4bPdyB9ZW6MxdnObz05ScmzmWFeEmNHhdHFCzu9MloZrIKIk2axWcj8TFwjHnwxri/LIdLCOgPOhg9dDP3gJCVNztHPgE7Nvn4bMgQht6uLsHB6CmDIuMsnxw5bBBuiFIp6TlmLtzl2GT0kK8/rvbhzM+O3CMT2FpQZy3+/kMbNA0lH4/r539v5ZnZ0UZ7gA8o7qzFCpzZq3L82se1my8fV/vuPbgezr/gwU6dBhAcQlUcyB1M7TvZt+/eqOIzhgNF1uWz38G3RVWffEimN/LBIALblIg3RFVaT+kv6rMhagm+N43dJrgCBt7UQfVPYErBGJX1HO1CKtbCVbnQmkjAIY3OZfD+Zy58zVqscHR+6Fy265i10Gmf9z5z4W3W4u+CuPNjTyVMxN8HLTTMk6vU1Y3SyYgb7dsgz+CabKrTLeiqXNhQuvtQI1rZsNJosnCZZ42qxQew13MlMpudN1/ayos25AbUDuDNGVDr+Z4aPa6D0TE2zJ8KtfqSK9VmrPOr7B1+YL3HymC5URvNrZgf/LC39d/J6XeT7FSo9V2N6t8gL1MUdd5J++4JiQ6ISl2mpN6dLGlWVHsn7buXbn73vqJkLbZoi/o4QtzvZDJ6WlRPHf9B7RrxLdqi7ONaPEzh4zotf7361fNIayJwu7ao8p18mq7/ksn0Jqr96y1Rm+rE5mITad79LjKZHi/yrfs51T7J0KQtqgzrJqs/vZWX9Ru0dqhNVzf8BnkZ1k1G9tfLtnn3vinUGmIhfIPcvpP1DgZZodrnbdryMUu9myrwdTheMXq3jeg2flVG8caYl0qRvzZxrnfrz/Bolme6PYob5UX52anmxGNncDTrN93st6UMAc9OPXwmbHBe3ckR+Siqqv56XxmeT1Kv72QZwPuTtySZ1jKtDfiw01smRpoynXQbxZfV5G2TEuExmN5Yj6Am0nqSY8F4+RfZ0xBpf72oBfL+YEVyH9fyYDjWvb2oNic3jyyRpp8tjn18la8uycn9Y974Wk9T5Iubkx1uLW6S+W2viUjTz6P79sr7w/x2kRXbTC6YIuve+/goJoH580vdX9I+nBf/irwl88uL6iKtvKvnedsfznXmb4u8wuNq5ZlnH9+kVeHw7SKKXCLjInu8/GflLTl8O8iASBPl1/+6vCXj1+t8TWS5tdzptFTshPHr49dfMo6yxW+St2S8t198iIyj6OD3yVsyfn3Ps3z/zsf3ynfG+PRXywsEAoFAIBAIBAKBQCAQCAR+Mf8DNnPAJ1FLiWMAAAAASUVORK5CYII=" alt='logo' class='logo'>
					<div class="text">
						<br>
							<h3>HTML</h3>
							This FREE Tutorial will teach you how to design a webpage using HTML.Complete a series of hands-on practice and examination while writing real HTML code.
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="login.php">
						<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAxlBMVEX///8Cd70Dm+Xu7u4AcbuEtdoAb7oAdbwAmuUDitICdrsAc7v39/cAluTy8O8FfsAIoeezzuDA5PgAbbmowdq02PRDj8ZIr+qMsNP39PEDk9wCgskCesADiND0+v3k8fhyq9Woy+VWtOubwN/h7/fV4OgAZLXG3e4hg8NupNE1hsNMmMzn9v2w0OeCx/B0ptLP4O+SzvLh6OyEr9ZjnM2Svt6l1vTF1uNywO7a5/K62ewAg9AAkOJTk8lOs+slpuhGn9iMv+M5eBcrAAALIUlEQVR4nO2d7VrbRhCFZUdoDVtjwGACGJkvNwZM4xBDQ1qS9v5vqpKFQeMZ7a6kGaP02fOrPxorb8arPfOx6yDw8vLy8vLy8vLy8vLy8vLy8vLy8mJRfLbRZJ3F9Ql/D5us3+sTBlGryYrqAwa994YwqsdAOFDvTWGQGjAQ3ur3xjBI3zIQfm404WcGwo/he2MYFH5kILxsNOElA+Fdk7eL6I6B8FOjCT8xED713xvDoP4TA2Hc6BgymLYgHvJu+Vv1BD5LDVkIJ6yEJ5sGnZL/CXQCCCcchLy2TW226+k4/7dhMW1B8MxpamoTbuYJ9ZyF8LpRhKf5T9PXLIRfG0UI1qHeYCF84LRtvIThAwvhOeeGyEsYnbMQstq22oTD/I7IYtoS29Ykws4w/2kRh2lLCDXjhlg7huDDNA/hiNO21STsHIMPG45YCOMJH2DtGAJL0+IxbUFw05wYrpi2Gx7AYMC45dclhKaNx5by1hNrE+Y3CyZbGgRnDSKEtvSMiZDTttUllDBtiW1rKiGTaQuC74ympi4htDTfmQg5jSkvIY8tTWxbg76lYGsOeUxbEEybQ9iBhFMmwsBKqNy12XEWQXgMqokhF2DQstg21XPX8Y6zKEJg2lpshLaKabi//cFVv7k/9ieO4qaILbXbtvDySIJwx0LI0gDOZKsn6q8ShDFBKFFLTGWzbfpagnDaxoQyps1u2/StBOEV8TKFhBwN4Ey2NrAaSBA+EYTQ0nA0gDPZbJu6kSCcdW2EXKbN3gZWPWfAEoSfCEKwbbE0gDPFNsLhvfOG6E54YCVkqkOlsrxpVGssEMNHTLhiS/kArdN7+k+BGH7BhLCWyDG1t5StnihC+IeFkNG02W1bJEH4bX2mzT69F7lbb3fCC4IQ1BI5pvaWsrWBw4f1EEJb+pWR0GpMN5y3fHfCw/XZUnsbWJ8JEBLpIbQ0XLXEVDbbpudH245yJoythHymzcG2DXZd9X2P1BUmJNJDQMho2oJgZKtFqchVf3Up/X2Ankmkhx3wzJCnPfpCyNYGLqgmdvfwMzGgSAM4E18buAQhYWnAJ3E1gDOxtYELCDt4HT6t07QxTu8VEeLq9Z6FUD+zEs5lCTtt/I0j0kOJucSl2NrARYT4kUR6KNMAzsTWBi4g3MGPJNJDaNr+ZSVkawMXEB7iRxLpISTkNG2MTdICwh8EocV4s5q2IJgJx/AbfiSRAAPfEc5YCZ9k3zTdP/AjcXoI5xKZpvaWGtlaiDUJH/EjcXoIbKlqcZo2xmMlBYTYeBPpIagl8hwmyYnrNHABIbalRPdQrpaYisuYuhPiF42kLeWb3isgxMY7sJk2zlpiqirHSsIoCt9S39CQAf+NjXdMEIJaIl8DONNG+Q1R7VM6P6CEH3hlsaUhz2GSN+2XJ9Rkdcq1EkUkT5KmrdJp4PC+TjXRRsjYAM5UwZiGZFPRlZBID+VqiakqnAYOyaaiKyGRHoJPZ60lpppWICQbUtUJYXu0zza1t9S6CXECvELIDRiUPxoU7dYhxMkTmEtUmp2w/HnneoQ4eYKmbcJOWP5YCd02dSX8gQhlDpO8qbxto2cyXQlxeggJuU1bEHwsT0g2hl0JcfIEa4kc17ZAlb/EhZ7JdCXEnSepqb2lyp8GphvDroS2Shu3La1yrISeOnUkjG0NYK7DJG8qb9v0vAbhFBOCD2c3bUEwKk9IztU6EhLpISTkrbSlikubGnqu1pEQD5fCWqJmrrSlhKWrbfRcrSMhTg9BA7jV4yesUG0bDgj9c0gI/3UthOyVtlQV2sDEoSB9Sh3/cemPSjaAM/Fc4kJVEzs7mBCnh9KmjasNTBL+xIQ4PYS1RM6pvaUq1BNdCan+qNmWsk7tLcXTBiYJL/DTcAIsW0tMxXMa2JUQJ8DSpo3r7j2SkOgA4/RQbmrvldD2LdVYboRUBxh3DwEh2wngvKxt4K8fV/UZ/wmS8IsDoWgDOJPFtqnWeLVPcTR2JMQ9bjRc2pE3bUFssW16jIoWYxx2kpAYLkVFDNn2aCbL7YJEAXiMu/8kIZ4bweOzErcJrsrSBsanSrbve26E+LWBT1fKNoAzWWwbLgC7EhLDpTgBhoRnIoQW20YUgO9xoZwg7LTxixGPz8o2gDNZ6onhJS6P3qD/iyLccRmfla4lpto12zaiALyNX78koUt6CGuJuyKEn8wxJE4GHbkR/sTPwukhjCF3AziTZT6RKAAf4Q3GkRCnh/KmLXm/md+lRAH4aBCuImLCTtdpfBY+i5gwYlCsjFs+UQDe3r0dRrAKuULY6XTbF8TIF0oPoS1VEqYt0ZaZ8Bm/S7eP7vfnrSgXfEDY6XYuDsh+PCYElmZLBtDSBlYDBJgyLiCjV8g3wk63e/FYNG6AEmDpBnAmcxtY3VCEC8jt+/1BGC6+ri+ECd7ho+GrhhLgY+EGcCZLPXFCzkC9RvJyoCK1IEy+nIeF0cuE0kP5WmIq82lg1SsmzCI5vhxE0WkSvS+2VyE+XQlriTKmzWbbVMtIuKD8MH74x4oXUKcroS2VMW3W6T3tcjnGttOTcH9UdmpvKUs9sW+NYSqn3hMen4WEErXEVDNzPbGPyxhVCfHpSlhL5D1MknuumdDt6ggnQpwewn9LiUrbQhZCcsqrEiFOD4Wn9pYyG9PonI0QpYfQtCkxQrNtC/ddLlZwIkTpIZxLlDJtNtumn3fTfZ2BcM9sS8VMm9W26ah1vXt/ZIa0EcZ733a6a5/aW8r6Wx5KR715ClmRMMMj7mmDhBIN4Ewup4ETyOHt/ofCSBoI9761Sbz2OhrAmRzbwEqH/dv9e5qxgDDeu+gW4bXX0QDOVOJYiY7U/HxMRJIinC6iV0SHCMVMm9W2oUi2kkiurklEGB9c0Gsvr/WYtvLTewmkGqxArhAeXHSseIhQzLRVmN5LXzz9wWVuTeYI40fj2ssLfqRQpS2oMr23kI708+X4JZJLwukiei507dWrd0QawC+EVc/KJpFUgwxyQTh9PCzcGCitTO3JEdb5LQ+lwujmcry9wHP9cr4SgiqNnGmrfYlLAjn490fX+cv5Rih4bQtU/ek9/VdpvPb6bCnH9F61e/VP899SoQZwpvq/DVyNcB0N4Ez1fxuYgVCslphq9k6EcC5RzrRx/JYHAyHztS1QV+Za1FoIlZJpAGea1r7EpQLh8SkIoRqyn3HOqf7tgiUJO5snwxb8lWO2n5OjVfsSlzKESfCIVSE0l7hU7R+ZcyVMg7dFfoLQ1N5StW8XdCI8Pj0pHkgWNW2JbZMnJFYeJJSrJaaqbdvMhMnKM4+0tIRNG4NtKyYsXnlQoqaN4XbBAsJ0z3N8TbNf2wJVqp7oSJgEr6VcopdJsJaYajSMwlovm1VCl5WX/+NhJHLUIqd4tjGIouq/gZwnTFdeieC10sLkxkzU0bxodHcd9sNqJvyV8HjTeeW1FnWsfn9+Lhw+oNnDjaoSyoxw82SrXPD0zYbsC4bU1d31pF96VZ7SbrP4nyTs9+bnkgmTUfHsYdAvGcoSwUtbAjfrWXlGyru5jiquShNd8trUt2tdeSbNNqqtykLpSL3LyjMpWZW9Phpcr6J3XnkmVVmVq3TNWHkmxefz4cvAc2k6FYZbzVl5JiW2R0UldxGV7XlNDh7U6LzMqlS6P2zoyjNqtjHp20OZrrzJrxQ8qOndvGdalcmeN/w1Vp5BaTKiqRdsErxoTamCvJJkpAVXZbLn6fWmCvJKVmX4sip1GE6aZlh4NLqbT6Iw6t3+gq9NZyW253+y8ry8vLy8vLy8vLy8vLy8vLy8vLz+d/oPCORCN5KZzgAAAAAASUVORK5CYII=" alt="logo" class="logo">						
						<div class="text">
							<br>
							<h3>CSS</h3>
							Our CSS Tutorial will teach you how to control the style & layout of websites.Complete a series of practice and examination while filling out actual CSS code.
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="login.php">
						<!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU-ojpD4yreI-TB_fcTZFFmGDaEQiXE5DTVQ&s" alt="logo" class="logo">						 -->
						<div class="text">
							<br>
							<h3>JAVASCRIPT</h3>
							Our JAVASCRIPT Tutorial will teach you how to create dynamically updating content, control multimedia, animate images.Complete a series of practice and examination while filling out actual JAVASCRIPT code.
						</div>
					</a>
					</div>
				</div>

		</div>
	</div>
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
