<?php

namespace FileConverter\FileReaders;

use FileConverter\Reader;


class JSONReader implements Reader
{
    /**
     * @param \SplFileObject $file
     *
     * @return array
     */
    public function read(\SplFileObject $file):array
    {
        return json_decode($file->current(), true);
    }
}