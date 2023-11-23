<?php
class Test{
	public function systemDetails(){
		phpinfo();
	}
}

$test = new Test();
$test-> systemDetails();
?>
