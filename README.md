# Laravel Encrypt File
Laravel library for encrypt and decrypt file

## How to Install
- Install with composer
```bash
composer require arispati/laravel-encrypt-file
```

## How to Use
```php
use Arispati\LaravelEncryptFile\Crypt;

// set file path
$source = Storage::disk('local')->path('image.jpg');
$encrypted = Storage::disk('local')->path('encrypted.jpg');
$decrypted = Storage::disk('local')->path('decrypted.jpg');

// Encrypt the file
Crypt::encrypt($source, $encrypted);

// Decrypt the file
Crypt::decrypt($encrypted, $decrypted);
```