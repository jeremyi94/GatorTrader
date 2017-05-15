<?php
foreach($myMessages as $row)
{
    echo 'receiver_name: '. $row->receiver_name . "\n";
    echo '<br>';
    echo "date: " . $row->date . "\n";
    echo '<br>';
    echo "message: " . $row->text . "\n";
    echo '<br>';
    echo "subject: " . $row->subject . "\n";
    echo '<br>';
    echo "sender_name: " . $row->sender_name . "\n";
    echo '<br>';

}
