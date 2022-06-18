<?php
include_once "Friend.php";
$hanna = new Friend('Henna', 'Taastrup', '12345678');
$benny = new Friend('Benny', 'Ishøj', '12345678');
$carol = new Friend('Carol', 'Gladsaxe', '12345678');
$daniel = new Friend('Daniel', 'NY', '12345678');
$eliza = new Friend('Eliza', 'Copenhagen', '12345678');

$hanna->setImage('ann.jpg');
$benny->setImage('benny.jpg');
$carol->setImage('carol.jpg');
$daniel->setImage('daniel.jpg');
$eliza->setImage('eliza.jpg');

$users = [$hanna, $benny,$carol, $daniel, $eliza];