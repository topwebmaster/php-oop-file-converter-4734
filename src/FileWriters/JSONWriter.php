<?php

namespace FileConverter\FileWriters;

use FileConverter\Writer;


/**
 * Class JSONWriter
 * @package FileConverter\FileWriters
 */
class JSONWriter implements Writer
{
    /**
     * @param array $inputArray
     * @param string $outputFilePath
     *
     * @return void
     */
    public function write(array $inputArray, string $outputFilePath):void
    {
        file_put_contents($outputFilePath, json_encode($inputArray));
    }
}