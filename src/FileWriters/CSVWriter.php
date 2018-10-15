<?php

namespace FileConverter\FileWriters;

use FileConverter\Writer;


class CSVWriter implements Writer
{
    /**
     * @param array $inputArray
     * @param string $outputFilePath
     *
     * @return void
     */
    public function write(array $inputArray, string $outputFilePath):void
    {
        $outputFile = fopen($outputFilePath, "w");
        foreach ($inputArray as $fields){
            fputcsv($outputFile, $fields);
        }
        fclose($outputFile);
    }
}