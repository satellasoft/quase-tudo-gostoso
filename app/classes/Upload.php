<?php

namespace app\classes;

class Upload
{
    public static function upload($file)
    {

        if ($file === null)
            return null;

        self::createDir();

        $fileName = uniqid('', true) . '-' . $file['name'];

        $fileName = strtolower(str_replace([
            ' ',
            '(',
            ')',
            '[',
            ']',
            '+',
            ','
        ], '', $fileName));

        if (!move_uploaded_file($file['tmp_name'], IMAGE_PATH . $fileName))
            return null;

        return $fileName;
    }

    private static function createDir()
    {
        if (!is_dir(IMAGE_PATH))
            mkdir(IMAGE_PATH, 755, true);
    }
}
