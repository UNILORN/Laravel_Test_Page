<?php

$user = Socialite::driver('twitter')->user();

$name = $user->getName();

echo $name;

?>
