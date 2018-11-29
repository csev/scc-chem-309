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
This is a demonstration web site that shows the potential of using the free textbooks available on
<a href="https://chem.libretexts.org" target="_blank">LibreTexts</a>
to build a series of self-paced stand alone MOOCs.
These materials are taken from a
<a href="https://chem.libretexts.org/LibreTexts/Sacramento_City_College/SCC%3A_Chem_309_-_General%2C_Organic_and_Biochemistry_(Bennett)" target="_blank">
Chemistry 309 Course</a>
at
<a href="https://www.scc.losrios.edu/" target="_blank">Sacremento City College</a>
taught by 
<a href="https://www.scc.losrios.edu/chemistry/dianne-bennett/" target="_blank">Dianne Bennett</a>
<?php if ( isset($_SESSION['id']) ) { ?>
<p>
Welcome to our Massive Open Online Course (MOOC). Now that you have logged in, you have access to 
course-style features of this web site.
<?php } else { ?>
<p>
Hello and welcome to this MOOC web site.
<ul>
<li>
You can 
<a href="tsugi/login.php">log in</a> to this site and get 
a grade book, access to assessments and see a map of your fellow students.
</li>
<li>
<a href="privacy">Privacy Policy</a>.
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
<a href="https://github.com/csev/scc-chem-309" target="_blank">GitHub</a>.
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
