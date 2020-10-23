# PhpSpreadSheetIssue

I have a problem when I try to save an xlsx file with a pie chart:

vagrant@example:/vagrant/src$ php example.php

```PHP
PHP Fatal error:  Uncaught PhpOffice\PhpSpreadsheet\Exception: Invalid cell coordinate PROGRESS in /vagrant/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Coordinate.php:40
Stack trace:
#0 /vagrant/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Coordinate.php(186): PhpOffice\PhpSpreadsheet\Cell\Coordinate::coordinateFromString('PROGRESS')
#1 /vagrant/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Coordinate.php(206): PhpOffice\PhpSpreadsheet\Cell\Coordinate::rangeBoundaries('PROGRESS')
#2 /vagrant/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/DataSeriesValues.php(376): PhpOffice\PhpSpreadsheet\Cell\Coordinate::rangeDimension('Progress')
#3 /vagrant/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/DataSeries.php(390): PhpOffice\PhpSpreadsheet\Chart\DataSeriesValues->refresh(''Pie Chart'', false)
#4 /vagrant/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/PlotArea.php(108): PhpOffice\PhpSpreadsheet\Chart\DataSeries->refresh(Object(PhpOffice\PhpSpreadsheet\Worksheet\Worksheet in /vagrant/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Coordinate.php on line 40
```