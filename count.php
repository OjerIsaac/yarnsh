<?php

require_once 'classes/class.user.php';

$user = new Count();

$old_count = $user->getOldCount()->fetch()['visits'];
$new_count = $old_count + 1;
$a =2;

$count = $user->recordCount($new_count);