<?php

$data = json_decode(file_get_contents('file.json'), true);

function compare($a, $b)
{
    return strcasecmp($a['lastName'], $b['lastName']);
}
usort($data['employees'], "compare");

echo json_encode($data['employees'][0]);