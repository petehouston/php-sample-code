<?php

$file = 'compressed.zip';
$extractDirectory = dirname(__FILE__) . '/extracted/';

// Step 1: create an instance
$zip = new ZipArchive();

// Step 2: try to open zip archive
$status = $zip->open($file);
if ($status === TRUE) {
    // Step 3: decompress zip archive
    $zip->extractTo($extractDirectory);

    // Step 4: finalize the operation
    $zip->close();

    echo "Zip file $file has been extracted into $extractDirectory\n";
} else {
    echo "Failed to extract $file\n";
}