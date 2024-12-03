<?php
function generateFamilyInvitations($startPerson, $totalGenerations) {
    $familyList = [];
    $currentGenMembers = [$startPerson];

    for ($generationIndex = 0; $generationIndex < $totalGenerations; $generationIndex++) {
        $nextGenMembers = [];
        foreach ($currentGenMembers as $individual) {
            $familyList[] = $individual;
            $parentName = "Parent of " . $individual;
            $nextGenMembers[] = $parentName;
        }
        $currentGenMembers = $nextGenMembers;
    }
    return $familyList;
}

$familyInvitations = generateFamilyInvitations("John", 3);

echo "Invited Family Members:\n";
foreach ($familyInvitations as $member) {
    echo $member . "\n";
}
?>