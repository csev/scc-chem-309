<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require "top.php";
require "nav.php";

?>
<div id="container">
<h1>LibreCourse: Chemistry 309</h1>
<p>
This is a demonstration web site that shows the potential of turning free textbooks available on
<a href="https://chem.libretexts.org" target="_blank">LibreTexts</a>
into self-paced stand alone MOOCs.
These materials are taken from a
<a href="https://chem.libretexts.org/LibreTexts/Sacramento_City_College/SCC%3A_Chem_309_-_General%2C_Organic_and_Biochemistry_(Bennett)" target="_blank">
Chemistry 309 Course</a>
at
<a href="https://www.scc.losrios.edu/" target="_blank">Sacremento City College</a>
taught by 
<a href="https://www.scc.losrios.edu/chemistry/dianne-bennett/" target="_blank">Dianne Bennet</a>
<?php if ( isset($_SESSION['id']) ) { ?>
<p>
Welcome to our Massive Open Online Course (MOOC). Now that you have logged in, you have access to 
course-style features of this web site.
<?php } else { ?>
<p>
Hello and welcome to this MOOC web site.
<ul>
<li>
You can add structures videos, course materials, and LTI tools under <a href="lessons">Lessons</a>.
You do this by editing the file <a href="lessons.json" target="_blank">lessons.json</a>.
</li>
<li>
Once you have login configured, you can 
<a href="tsugi/login.php">log in</a> to this site and get 
a grade book, access to autograded assignments, see a map of your fellow students and maybe earn a badge or two.
</li>
<li>
Privacy is important so there is a sample
<a href="privacy">Privacy Policy</a> that is provided as a starting point.
</li>
</ul>
<?php } ?>
This site uses <a href="http://www.tsugi.org" target="_blank">Tsugi</a> 
framework to embed a learning 
management system into this site.
If you are interested in collaborating
to build these kinds of sites for yourself, please see the
<a href="http://www.tsugi.org" target="_blank">tsugi.org</a> website.
The skelton content for this site is available in
<a href="https://github.com/tsugiproject/koseu-site" target="_blank">GitHub</a>.
</p>
<!--
<?php
echo("IP Address: ".Net::getIP()."\n");
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php 
require "foot.php";
