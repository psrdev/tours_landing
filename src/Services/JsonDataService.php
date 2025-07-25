<?php
namespace App\Services;

class JsonDataService
{
    public static function get(string $filename): array
    {
        $path = __DIR__ . '/../../data/' . $filename . '.json';

        if (!file_exists($path)) {
            return [];
        }

        $data = file_get_contents($path);
        return json_decode($data, true) ?? [];
    }
}