<?php

namespace InFog\UsedFilesMapper;

class FilesMapper
{
    private static $oFile = '';

    public static function register($outputFile)
    {
        self::$oFile = $outputFile;
        register_shutdown_function('UsedFilesMapper::shutdown');
    }

    public static function shutdown()
    {
        $files = get_included_files();
        $output = '';

        foreach ($files as $f) {
            $output .= $f . PHP_EOL;
        }

        file_put_contents(self::$oFile, $output);
    }
}
