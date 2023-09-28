<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears("/start", BotManController::class . '@startUserConversation');
$botman->hears('Start conversation', BotManController::class.'@startConversation');
