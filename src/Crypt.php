<?php

namespace Arispati\LaravelEncryptFile;

use Arispati\PhpEncryptFile\Crypt as BaseCrypt;
use Illuminate\Support\Facades\Config;

class Crypt
{

    /**
     * Encrypt file
     *
     * @param string $filePath
     * @param string $encryptedPath
     * @return void
     */
    public static function encrypt(string $filePath, string $encryptedPath)
    {
        return static::crypt()->encrypt($filePath, $encryptedPath);
    }

    /**
     * Decrypt file
     *
     * @param string $encryptedPath
     * @param string $filePath
     * @return void
     */
    public static function decrypt(string $encryptedPath, string $filePath)
    {
        return static::crypt()->decrypt($encryptedPath, $filePath);
    }

    /**
     * File encryption class
     *
     * @return BaseCrypt
     */
    private static function crypt()
    {
        return new BaseCrypt(
            Config::get('app.key'),
            Config::get('app.cipher')
        );
    }
}
