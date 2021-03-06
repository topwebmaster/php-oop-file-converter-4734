<?php

namespace FileConverter;


/**
 * Interface Writer
 * @package FileConverter
 */
interface Writer
{
    /**
     * @param array $inputArray
     * @param string $outputFilePath
     *
     * @return void
     */
    public function write(array $inputArray, string $outputFilePath):void;
}