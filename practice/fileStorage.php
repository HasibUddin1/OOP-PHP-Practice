<?php

interface FileStorage
{
    public function store(string $file, string $content);
}