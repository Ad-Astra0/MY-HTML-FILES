
<?php
    
    $answer1 = $_POST['question_1'];
    $answer2 = $_POST['question_2'];
    $answer3 = $_POST['question_3'];
    $answer4 = $_POST['question_4'];
  

    $totalCorrect = 0;
    
    if ($answer1 == "2/7") { $totalCorrect++; }
    if ($answer2 == "4") { $totalCorrect++; }
    if ($answer3 == "3") { $totalCorrect++; }
    if ($answer4 == "360") { $totalCorrect++; }
    echo "hello"
    echo "<div id='results'>$totalCorrect / 4 correct</div>";
    
?>
