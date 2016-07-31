<?php
namespace controller;

class CSVImport {
    
    private $filepath = '/home/sayem/Desktop/data.csv';

    private $data = array();

    public function __construct($filePath) {
        $this->filepath = $filePath;
        $this->importDataFromFile();
    }

    public function getFilePath() {
        return $this->filepath;
    }

    public function importDataFromFile() {
        $file = new \SplFileObject($this->getFilePath());
        while (!$file->eof()) {
            $this->data[] = (object) $file->fgetcsv();
        }
        return $this->data;
    }

    public function getCSVData() {
        print_r( json_encode($this->data));
    }

}
$csv = new CSVImport('/home/sayem/Desktop/data.csv');
 $csv->getCSVData();
