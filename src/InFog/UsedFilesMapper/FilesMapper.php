<?php

namespace InFog\UsedFilesMapper;

class FilesMapper
{
    const MODE_REPLACE = 0;
    const MODE_APPEND = FILE_APPEND;

    private static $oFile = '';
    private static $mode = FilesMapper::MODE_REPLACE;

    public static function register($outputFile, $mode = FilesMapper::MODE_REPLACE)
    {
        self::$oFile = $outputFile;
        self::$mode = $mode;

        register_shutdown_function('InFog\UsedFilesMapper\FilesMapper::shutdown');
    }

    public static function shutdown()
    {
        $files = get_included_files();
        $output = '';

        foreach ($files as $f) {
            $output .= $f . PHP_EOL;
        }

        file_put_contents(self::$oFile, $output, self::$mode);
    }
}
