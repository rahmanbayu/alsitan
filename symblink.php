<?php
$target = '/home/dkppseruyango/repositories/alsitan.dkpp.seruyankab.go.id/storage/app/public';
$shortcut = '/home/dkppseruyango/public_html/storage';
symlink($target, $shortcut);

$target = '/home/dkppseruyango/repositories/alsitan.dkpp.seruyankab.go.id/public/build';
$shortcut = '/home/dkppseruyango/public_html/';
symlink($target, $shortcut);
?>