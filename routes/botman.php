<?php
use App\Http\Controllers\BotManController;
use App\Conversations\mainConversation;
use BotMan\BotMan\BotMan;

$botman = resolve('botman');

$botman->hears('/start', function($bot) {$bot->startConversation ( new mainConversation ); } );

?>