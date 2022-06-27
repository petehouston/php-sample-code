<?php

$output = 'compressed.zip';

// Step 1: create an instance
$zip = new ZipArchive();

// Step 2: open zip output writer
$status = $zip->open($output, ZipArchive::CREATE);

if ($status === TRUE) {
    // Step 3: add files to the zip
    $zip->addFile('sample.txt');
    $zip->addFromString('string.txt', 'this is the content');
    $zip->addFromString('sub/inside.txt', 'this file is located under sub directory');

    // Step 4: finalize the zip
    $zip->close();
    echo "Zip file '$output' has been created successfully!";
} else {
    echo "Error creating zip archive!\n";
}