
<?php



$chemistRobot = new Robot(
    'chemist',
    'chemist',
    array('do yo do an Experiences?', 'what type of experence you do?'),
    array('yes', 'Chemical experiments')
);

$coderRobot = new Robot(
    'coder',
    'code',
    array('what type of progtamming do you write?'),
    array("anythigs")
);

$faheemRobot = new Robot(
    'Faheem',
    'math',
    array('are you smart?'),
    array("sure")
);

$sportsmanRobot = new Robot(
    'sportsman',
    'sport',
    array('do you love socer?'),
    array("yes")
);

$robots = [$chemistRobot, $coderRobot, $faheemRobot, $sportsmanRobot];

// foreach($robots as $value => $r){

//      echo  $r .'<br>';

// }

?>