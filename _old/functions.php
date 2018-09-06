<?php

include 'functions/projects.php';

$doc_root = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$request_uri = $_SERVER['REQUEST_URI'];
$host = $_SERVER['HTTP_HOST'];
$tpath = $doc_root . $request_uri;
define('TPATH', $tpath);



function show_project($id){
	$examples = show_examples($id);
	echo <<<EOF
		<section id="project_$id" class="project">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-2">
						<div class="row">
							<div class="col-sm-6">
								$examples
							</div>
							<div class="col-sm-5">
								<h3>Heading</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
EOF;
}

// function get_slides($slug,$img,$title){
// 	foreach ($img as $i) {
// 		return $example = '<div class="item"><img src="'.$i.'" class="img-responsive" /></div>';
// 	}
// }



?>