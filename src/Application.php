<?php

declare(strict_types=1);

namespace FileConverter;

/**
 * Class Application
 * @package FileConverter
 */
class Application
{

    /**
     * @param string $filename
     * @param string $outputFormat
     * @param string $outputFilePath
     */
    public function run(string $filename, string $outputFormat, string $outputFilePath)
    {
        $converter = new Converter();

        $file = new \SplFileObject($filename, 'r');

        $converter->convert($file, $outputFormat, $outputFilePath);
    }
}
