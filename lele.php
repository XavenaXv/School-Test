<?php
	echo "====  FOTOKOPI MAUGRAFIKA ====";
	$lembar = 158;
if ($lembar <100) {
  echo $lembar*150;
} elseif (($lembar >100)&&($lembar<200))  {
  echo $lembar*100;
} elseif ($lembar >200){
  echo $lembar*80;
}

?>
