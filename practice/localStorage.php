<?php

class LocalStorage implements FileStorage
{
    public function store(string $file, string $content)
    {
        $root = "storage";
        $savePath = "{$root}/{$file}";

        if (!file_exists(dirname($savePath))) {
            mkdir(dirname($savePath), 0777, recursive: true);
        }

        file_put_contents($savePath, $content);
    }
}
