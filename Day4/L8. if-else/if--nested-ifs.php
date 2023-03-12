<?php

$isLoggedUser = true;
$isAdminUser = false;
$canEdit = true;

// Nested ifs approach
if ($isLoggedUser) {
    if ($isAdminUser) {
        if ($canEdit) {
            var_dump('Logged admin user can edit.');
        } else {
            { /* Means that user is admin */ }
        }
    } else {
        { /* Means that user is admin */ }
    }
} else {
    { /* Means that user is logged */ }
}

// Shot-circuit logic approach
if ($isLoggedUser && $isAdminUser && $canEdit) {
    var_dump('Logged admin user can edit.');
} else {
    // No edit conditions covered.
}

// Fail-fast approach
if (!$isLoggedUser) {var_dump('User is not logged therefore can not edit too. Exit.'); } else { /* Means that user is logged */ }
if (!$isAdminUser) { var_dump('User is logged but it is not admin. Exit.'); } else { /* Means that user is admin */ }
if (!$canEdit) { var_dump('Logged admin user but cannot edit. Exit.'); } else { /* Met all conditions above */}

var_dump('Logged admin user can edit.');