<?php

namespace FileConverter\FileReaders;

use FileConverter\Reader;


require_once __DIR__ . '/../vendor/autoload.php';

class CSVReader implements Reader
{
    public function read(\SplFileObject $file): array
    {
        $result = [];
        $file->setFlags(\SplFileObject::READ_CSV);
        foreach ($file as $fields) {
            $result [] = $fields;
        }
        return $result;
    }
}