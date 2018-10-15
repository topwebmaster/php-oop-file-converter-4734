<?php

namespace FileConverter;


interface Reader
{
    /**
     * @param string $inputString
     *
     * @return array
     */
    public function read(\SplFileObject $file):array;
}