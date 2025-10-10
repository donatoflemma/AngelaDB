<?php
    $waitingList = [
        'Alex Reed',
        'Blake Jordan',
        'Casey Smith',
        'Drew Alex',
        'Elliot Ford',
        'Finley Harper',
        'Jordan Kay',
        'Kim Lee',
        'Liam Park',
        'Morgan Drew'
    ];

        $priorityParticipants = [
        'Jordan Kay', 
        'Sam Taylor', 
        'Zane Pryor' 
    ];
    $finalAttendees = array_merge($priorityParticipants , array_slice($waitingList, 0, 5 - count($priorityParticipants)));
    foreach($finalAttendees as $name){
        echo $name . "\n";
    }



//array_unique($priorityParticipants);
//array_unique($waitingList);
//$finalAttendees;

/*if(count($priorityParticipants) < 5){
    $finalAttendees = [...$priorityParticipants , array_slice($waitingList, 0, 5 - count($priorityParticipants))];
    array_unique($finalAttendees);
    if(count($finalAttendees) < 5){
        while(count($finalAttendees) < 5){
            foreach ($waitingList as $value) {
                if (!in_array($finalAttendees)){
                    $finalAttendees[$value];
                }

            }
        }
    }
}elseif ($priorityParticipants === 5) {
    $finalAttendees = [...$priorityParticipants];
}else{
    $finalAttendees = array_slice($priorityParticipants,0,4);
}

$backupCandidates;
$counter ;

while (count($backupCandidates) < 3){
    if(count($priorityParticipants) > 5){
        $counter = 5;
        if(in_array())
    }else{

    }

}



*/
?>