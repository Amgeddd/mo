		<div class="span12">
				<div class="header">
				<div class="pull-left">
				<img class="stilogo" src="LMS/main.png">
				</div>
				</div>

					<div class="alert alert-info"><Strong>Welcome To CSE Library</strong>
					
							<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
//by using htmlspecialchars() with the ENT_QUOTES flag, you ensure that any special characters 
//in $new are properly encoded, reducing the risk of XSS vulnerabilities.
								echo htmlspecialchars($new, ENT_QUOTES, 'UTF-8');
								?>
							</div>
					</div>
				
					
				</div>
