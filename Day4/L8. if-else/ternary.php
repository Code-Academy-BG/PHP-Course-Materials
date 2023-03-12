<?php

$isLoggedUser = true;
$isAdminUser = true;
$canEdit = true;

$result = $isLoggedUser && $isAdminUser && $canEdit
    ? 'Logged admin user can edit.'
    : 'No edit conditions covered.';

var_dump($result);