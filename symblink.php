<?php
$target = '/home/dkppseruyango/repositories/alsitan/storage/app/public';
$shortcut = '/home/dkppseruyango/public_html/alsitan.dkpp.seruyankab.go.id/storage';
symlink($target, $shortcut);

$target = '/home/dkppseruyango/repositories/alsitan/public/build';
$shortcut = '/home/dkppseruyango/public_html/alsitan.dkpp.seruyankab.go.id';
symlink($target, $shortcut);

echo 'oke';
// ln -s /home/dkppseruyango/repositories/alsitan/storage/app/public /home/dkppseruyango/public_html/storage
?>