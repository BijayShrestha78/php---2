<?php
    function evaluate($name, $attendance, $hygiene, $rating)
    {
if ($attendance < 80 || $hygiene < 50 || $rating < 2)
{
            echo "$name, You are fired from Rojan kirana Pasal";
        } else {
            echo "Not fired for now";
        }
    }

    evaluate("Kusal Karki", 90, 70, 3);
    ?>