 	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>	<head>
		<title>CGL @ ETHZ - Keys-to-Sim: Transferring Hand-Crafted Key-framed Animations to Simulated Figures using Wide Band Stochastic Trajectory Optimization</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	    <meta charset="UTF-8"/>
	    <meta name="description" content=""/>
	    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
	    <link href="/css/offcanvas.css" rel="stylesheet"/>
	    <link href="/css/custom2014.css" rel="stylesheet"/>
	</head>
	
<!-- Side menu page -->
<body class="Keys-to-Sim: Transferring Hand-Crafted Key-framed Animations to Simulated Figures using Wide Band Stochastic Trajectory Optimization">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53220520-1', 'auto');
  ga('send', 'pageview');
</script>
<!--   new code   -->
<div class="container headerBar">
	<div class="col-lg-6 col-md-6 col-xs-6 headerBarA">
		<h1><a href="/"><span>Computer Graphics Laboratory ETH Zurich</span></a>
	</h1>
	</div>
	<div class="col-lg-6 col-md-6 col-xs-6 headerBarB">
		<a href="http://www.ethz.ch"><span>ETH</span></a>
	</div>
</div>
<div class="container navbar navbar-inverse menuBar" role="navigation">
<!--  menu -->
	<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href='/aboutus/' class='list-group-item'>Contact</a></li><li><a href='/people/' class='list-group-item'>People</a></li><li><a href='/research/' class='list-group-item'>Research</a></li><li><a href='/teaching/' class='list-group-item'>Teaching</a></li><li><a href='/publications/' class='list-group-item active'>Publications</a></li><li><a href='/events/' class='list-group-item'>Events</a></li><li><a href='/industrypartners/' class='list-group-item'>Industry Partners</a></li><li><a href='/internal/' class='list-group-item'>Internal</a></li>                </ul>
            </div>
    </div>
<!--  end menu -->
</div>
<div class="container contentWrapper">
	<div class="row navTools">
		<!-- breadcrumb -->	
		<div class="col-lg-8 col-sm-8 col-xs-12 breadCrumb">
			<!--<a href='http://www.ethz.ch'>ETH Zurich</a> &raquo; <a href='http://www.inf.ethz.ch/'>D-INFK</a> &raquo; <a href='http://ivc.ethz.ch/'>IVC</a> &raquo;--> <a href='/'>CGL</a>  &raquo; <a href='/publications/'>Publications</a> &raquo; <a href='/publications/papers/'>Papers</a>		</div>
		<!-- end breadcrumb -->	
		<!-- search -->	
		<div class="col-lg-4 col-sm-4 col-xs-12 searchEngine">
			

	<form method="get" action="/content/search.php" name="search">
			<input type="text" size='17' name='q' value="Search" onclick="if(this.value=='Search'){this.value=''}" onblur="if(this.value==''){this.value='Search'}" />
		</form>

			</div>
		<!-- end search -->	
	</div>
	<!-- content -->
	<!-- <div class="row"> Marcel removed this -->
		<div class="row row-offcanvas row-offcanvas-left">
			<!--  side menu -->
			<div class="col-xs-6 col-sm-3 sidebar-offcanvas noLeftPadding" id="sidebar" role="navigation">
				<div class="list-group sideMenu">
					<a href='/publications/papers/' class='list-group-item active'>Papers</a><a href='/publications/techreports.php' class='list-group-item'>Technical Reports</a><a href='/publications/books.php' class='list-group-item'>Books</a><a href='/publications/tutorials.php' class='list-group-item'>Tutorials</a><a href='/publications/dissertations.php' class='list-group-item'>Dissertations</a><a href='/publications/varia.php' class='list-group-item'>Varia</a><a href='/publications/videos.php' class='list-group-item'>Video Archive</a>				</div>
			</div>
			<!--  end side menu -->
			<div class="col-xs-12 col-sm-9">
				<p class="pull-left visible-xs">
					<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
				</p>
				<h2 class="pageTitle">Keys-to-Sim: Transferring Hand-Crafted Key-framed Animations to Simulated Figures using Wide Band Stochastic Trajectory Optimization</h2>
				<!-- CONTENT STARTS HERE -->
				<b>D. Borer, M. Guay, R. W. Sumner</b><br/><br/><i>To appear: Computer Graphics and Visual Computing 2018, The Eurographics Association (Swansea, Wales, September 13-14, 2018)</i><br/><p/><h3>Abstract</h3> The vision of fully simulating characters and their environments has the potential to offer rich interactions between characters and objects in the virtual world. However, this introduces a challenging problem similar to controlling robotic figures: computing the necessary torques to perform a given task. In this paper, we address the problem of transferring hand-crafted kinematic motions to a fully simulated figure, by computing open-loop controls necessary to reproduce the target motion. One key ingredient to successful control is the mechanical feasibility of the target motion. While several methods have been successful at replicating human captured motion, there has not yet been a method capable of handling the case of artist-authored key-framed movements that can violate the laws of physics or go beyond the mechanical limits of the character. Due to the curse of dimensionality, sampling-based optimization methods typically restrict the search to a narrow band which limits exploration of feasible motions—resulting in a failure to reproduce the desired motion when a large deviation is required. In this paper, we solve this problem by combining a window-based breakdown of the controls on the temporal dimension, together with a global wide search strategy that keeps locally sub-optimal samples throughout the optimization.		
		<p/><p/>
		<center>
		
		<video width="640" height="360" controls><source src="/Downloads/Publications/PaperVideos/2018/Bor18a_supp.mp4" type="video/mp4">Unfortunately, your browser does not support the video tag.</video>		
		</center>
				
		<p/><p/>
		<center>
		
		<video width="640" height="360" controls><source src="/Downloads/Publications/PaperVideos/2018/Bor18a.mp4" type="video/mp4">Unfortunately, your browser does not support the video tag.</video>		
		</center>
		<br><p/><h3>Downloads</h3><table border='0' cellspacing='16'><tr><td align='center'/><a href='/disclaimer.php?dlurl=/Downloads/Publications/Papers/2018/Bor18a/Bor18a.pdf'><img src='images/PDF.png' alt='Download Paper' border='0'/></a><br/><a href='/disclaimer.php?dlurl=/Downloads/Publications/Papers/2018/Bor18a/Bor18a.pdf'>[PDF]</a></td><td align='center'/><a href='/disclaimer.php?dlurl=/Downloads/Publications/Papers/2018/Bor18a/Bor18a_supp.pdf'><img src='images/PDF.png' alt='Download Paper' border='0'/></a><br/><a href='/disclaimer.php?dlurl=/Downloads/Publications/Papers/2018/Bor18a/Bor18a_supp.pdf'>[PDF suppl.]</a></td><td align='center'/><a href='/Downloads/Publications/PaperVideos/2018/Bor18a_supp.mp4'><img src='images/Quicktime.png' alt='Download Video' border='0'/></a><br/><a href='/Downloads/Publications/PaperVideos/2018/Bor18a_supp.mp4'>[Video]</a></td><td align='center'/><a href='/Downloads/Publications/PaperVideos/2018/Bor18a.mp4'><img src='images/Quicktime.png' alt='Download Video' border='0'/></a><br/><a href='/Downloads/Publications/PaperVideos/2018/Bor18a.mp4'>[Video]</a></td><td align='center'/><a href='/Downloads/Publications/Papers/2018/Bor18a/Bor18a.bib'><img src='images/Text.png' alt='Download Paper' border='0'/></a><br/><a href='/Downloads/Publications/Papers/2018/Bor18a/Bor18a.bib'>[BibTeX]</a></td></tr></table>				<!-- CONTENT ENDS HERE -->
			</div>
			<!-- end content -->
		</div>
	<!-- </div> Marcel removed this -->
</div>
<!-- footer -->
<div class="container wrapperCloser">
	<div class="grey"><br></div>
	<div class="red"><br></div>
	<div class="green"><br></div>
	<div class="blue"><br></div>
</div>
<div class="container footer">
		<div class='col-xl-6 col-lg-6 col-sm-6 col-xs-12 footerA'>&copy; CGL, ETH Zurich</div>
	<!--<div class='col-xl-6 col-lg-6 col-sm-6 col-xs-12 footerB'>wwwgraph<img src='/images2014/at.png' alt='o'/>inf.ethz.ch</div>-->
	</div>
<!-- end footer -->
<!--   end new code   -->


<!-- old stuff
end old stuff  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/offcanvas.js"></script>
</body>
</html>
