<?php

class Conversation {}


$obj = new Conversation();


$type = match ($obj::class) {
    'Conversation' => 'started_conversion',
    'Reply' => 'replied_to_conversion',
    'Comment' => 'commented_on_lesson',
    default => 'unknown_type'
};

echo $type;