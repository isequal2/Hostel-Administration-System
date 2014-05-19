<?php
$college_id="8765567.jpg";
$f1="upload/" . $college_id;
$f2="images/" . $college_id;

if (!copy($f1,$f2)) {
						echo "failed to copy $file...\n";
							
							}
							
							
							?>