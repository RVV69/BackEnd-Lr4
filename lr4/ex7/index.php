<?php

class FileHandler {
    public static $dir = "text";

    public static function writeToFile($filename, $content) {
        $file = fopen(self::$dir . "/" . $filename, "a");
        fwrite($file, $content);
        fclose($file);
    }

    public static function readFromFile($filename) {
        $file = fopen(self::$dir . "/" . $filename, "r");
        $content = fread($file, filesize(self::$dir . "/" . $filename));
        fclose($file);
        return $content;
    }

    public static function clearFile($filename) {
        $file = fopen(self::$dir . "/" . $filename, "w");
        fclose($file);
    }
}

if (!file_exists(FileHandler::$dir)) {
    mkdir(FileHandler::$dir);
}

for ($i = 1; $i <= 3; $i++) {
    FileHandler::writeToFile("file$i.txt", "<br>");
}

for ($i = 1; $i <= 3; $i++) {
    echo" Це вміст файлу $i <br>";
    FileHandler::writeToFile("file$i.txt", " Додатковий текст: Lorem Lorem<br><br>");
    echo FileHandler::readFromFile("file$i.txt");
    FileHandler::clearFile("file$i.txt");
}

?>
