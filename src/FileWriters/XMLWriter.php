<?php


namespace FileConverter\FileWriters;

use FileConverter\Writer;

/**
 * Class XMLWriter
 * @package FileConverter\FileWriters
 */
class XMLWriter implements  Writer
{
    /**
     * @param array $inputArray
     * @param string $outputFilePath
     *
     * @return void
     */
    public function write(array $inputArray, string $outputFilePath):void
    {
        $outputDatal = new SimpleXMLElement('<root/>');
        array_walk_recursive($test_array, array ($outputDatal, 'addChild'));
        file_put_contents($outputFilePath, $outputDatal);
    }

}