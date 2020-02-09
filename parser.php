<?php

$file = 'event.log';
$result = [];

if ($lines = fopen($file, 'r')) {
    $i = 1;
    $pattern = '/\[(.+?)\]\ ([^ ]+)/';
    while (!feof($lines)) {
        if ($line = trim(fgets($lines))) {
            if (preg_match($pattern, $line, $matches)) {
                if (!empty($matches)) {
                    list($line, $time, $status) = $matches;
                    $time = explode(" ", $time);
                    list($date, $hour_minuts) = $time;
                    $hour_minuts = substr($hour_minuts, 0, -3);
                    if (!array_key_exists($date, $result)) {
                        $result[$date] = [];
                    }
                    $status = strtolower($status);
                    if ($status == "nok") {
                        if (!array_key_exists($hour_minuts, $result[$date])) {
                            $result[$date][$hour_minuts] = 1;
                        } else {
                            $result[$date][$hour_minuts]++;
                        }
                    }
                }
            }
        }
    }
}

print_r($result);