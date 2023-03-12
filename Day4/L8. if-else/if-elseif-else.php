<?php

define('EscapeKeyCode', 27, false);
define('SpaceKeyCode', 32, false);
define('ArrowLeftKeyCode', 37, false);
define('ArrowRightKeyCode', 39, false);
define('OtherKeyCode', 65, false);

// $keyboardKeyCode = EscapeKeyCode;
// $keyboardKeyCode = SpaceKeyCode;
// $keyboardKeyCode = ArrowLeftKeyCode;
// $keyboardKeyCode = ArrowRightKeyCode;
$keyboardKeyCode = OtherKeyCode;

if (EscapeKeyCode === $keyboardKeyCode) {
    var_dump('Escape. Trigger game pause.');
} elseif (SpaceKeyCode === $keyboardKeyCode) {
    var_dump('Space key. Trigger a shoot.');
} elseif (ArrowLeftKeyCode === $keyboardKeyCode) {
    var_dump('Arrow Left Key. Move left.');
} elseif (ArrowRightKeyCode === $keyboardKeyCode) {
    var_dump('Arrow Right Key. Move right.');
} else {
    // Some other key. BEEP.
    var_dump("Some other key code." . chr(7));
}
