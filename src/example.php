<?php

require __DIR__ . '/../vendor/autoload.php';

$filename = __DIR__ . '/countryMA.xlsx';

$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($filename);
$reader->setIncludeCharts(true);

$spreadsheet = $reader->load($filename);
$worksheet = $spreadsheet->getSheetByName('Pie Chart');

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, \PhpOffice\PhpSpreadsheet\IOFactory::identify($filename));
$writer->setIncludeCharts(true);
$writer->save(__DIR__ . '/countryMA.new.xlsx');
