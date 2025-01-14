<?php

class Conversation {}


$obj = new Conversation();

// switch (get_class($obj)) {
//     case 'Conversation':
//         $type = 'started_conversion';
//         break;
//     case 'Reply':
//         $type = 'replied_to_conversation';
//         break;
//     case 'Comment':
//         $type = 'commented_on_lesson';
//         break;  
// }


$type = match (get_class($obj)) {
    'Conversation' => 'started_conversion',
    'Reply' => 'replied_to_conversion',
    'Comment' => 'commented_on_lesson',
    default => 'unknown_type'
};

echo $type;