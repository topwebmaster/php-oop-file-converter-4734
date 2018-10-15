<?php

namespace FileConverter;


/**
 * Interface Reader
 * @package FileConverter
 */
interface Reader
{
    /**
     * @param string $inputString
     *
     * @return array
     */
    public function read(\SplFileObject $file):array;
}