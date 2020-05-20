<?php
    
namespace DevFramework\Kernel\FileUtils;

class FileReader
{   
    /**
     * @param string $path relative path in project root
     * example ("config/main_config.json")
     * 
     * @return string
     */
    public static function readJsonFile(string $path) : string
    {
        /** @var string */
        $jsonContent = "";

        $absolutePath = FileSystem::getRootPath() . "/" . $path;
        
        if ( !file_exists($path) ) {
            throw new Exception('File not found.');
        }

        $file_handle = fopen($absolutePath, 'r');

        while (!feof($file_handle)) {
            $line = fgets($file_handle);
            $jsonContent .= $line;
        }
        
        fclose($file_handle);
        return $jsonContent;        
    }
}
?>