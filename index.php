
<?php 
	include("include.php");

	//$RENDENGINE->standardRenderFile(["Test/StandardWelcomeTest","Test/TestingStandardRender"]);
	$RENDENGINE->layeredRender(["f" => "Test/StandardWelcomeTest","t" => "mimi"], $standard=True);


?>
