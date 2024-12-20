<?php

if (!isset($_POST['rps'])) {
    echo "No selection provided";
    exit;
}

$userSel = $_POST['rps'];
$computerSel = rand(1,3);
// 1 = Rock, 2 = Paper, 3 Scissors

if($computerSel === 1 && $userSel === "scissors"){
    echo "You Lost";
    exit;
}
elseif ($computerSel === 1 && $userSel === "paper") {
    echo "You Win";
    exit;
}
elseif ($computerSel === 2 && $userSel === 'scissors') {
    echo "You Win";
    exit;
}
elseif ($computerSel === 2 && $userSel === 'rock') {
    echo "You Lost";
    exit;
}
elseif ($computerSel === 3 && $userSel === 'rock') {
    echo "You Win";
    exit;
}
elseif ($computerSel === 3 && $userSel === "paper") {
    echo "You Lost";
    exit;
}
else{
    echo "You Tie";
    exit;
}

?>