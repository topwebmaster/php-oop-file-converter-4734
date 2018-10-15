<?php

namespace FileConverter\FileReaders;

use FileConverter\Reader;

class XMLReader implements Reader
{

    /**
     * @param \SplFileObject $file
     * @return array
     */
    public function read(\SplFileObject $file): array
    {
        $content = "";
        foreach ($file as $line){
            $content .= $file->current();
        }
        $json = json_encode(simplexml_load_string($content));
        return json_decode($json, true);
    }
}