<?php

namespace App\LeituraJSON;

use Symfony\Component\HttpFoundation\File\Exception\FileException;

class LeJSON
{
    public function leJson(string $fileName): \stdClass
    {
        $path = "../storage/json/pokemon/$fileName.json";

        if (!file_exists($path)) {
            throw new FileException("Pokemon $fileName não encontrado");
        }

        $json = file_get_contents($path);
        
        return json_decode($json);
    }
}