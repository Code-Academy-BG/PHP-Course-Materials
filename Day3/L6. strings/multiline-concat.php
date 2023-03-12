<?php

$multiline_text = <<<'NowDoc'
line 1\n
NowDoc . <<<HereDoc
line 2\n
HereDoc;

var_dump($multiline_text);