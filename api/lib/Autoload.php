<?php


// Initializes autloader
spl_autoload_register('Autoloader');

/**
 * Callback autoloader function for spl_autoload_register(). 
 * If you want to use it. Just don't use this function.
 * @param  string className
 * @return void Don't expect to return any values
 */
function AutoLoader(string $className): void
{

    // Replaces namespace separator in PHP (backslash) into
    // what type of directory seperator that OS recommends.
    // ----------------------------------------------------
    // Before:
    //      Kamisato\Ayaka
    // After: 
    //      Kamisato/Ayaka (*nix)
    //      Kamisato\Ayaka (Windows)
    if (strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN') {
        $classPath = str_replace('\\', '/', $className);
    }
    else {
        $classPath = $className;
    }


    // Get the FULL PATH of PHP file where the classes are located.
    // Take note that the __DIR__ constant is actually the 
    // path of this autoloader.
    // ----------------------------------------------------
    // Before:
    //      Kamisato\Ayaka
    // After: 
    //      PATH/OF/AUTOLOADER/Kamisato/Ayaka.php (*nix)
    //      <Volume Letter>:\PATH\OF\AUTLOADER\Kamisato\Ayaka.php (Windows)
    $fullPath = __DIR__.DIRECTORY_SEPARATOR."{$classPath}.php";

    // Check if the file exists.
    if (!file_exists($fullPath))
    {
        echo "We have an error! Namespace {$classPath} is missing.";
        return;
    }

    // Opens the PHP file.
    require_once $fullPath;
}

?>