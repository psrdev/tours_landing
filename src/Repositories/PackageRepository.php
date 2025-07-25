<?php
namespace App\Repositories;

use App\Services\JsonDataService;

class PackageRepository
{
    protected array $destinations = [];

    public function __construct()
    {
        $data = JsonDataService::get('packages');
        $this->destinations = $data['packages'] ?? [];
    }

    /** Get all destination packages */
    public function all(): array
    {
        return $this->destinations;
    }

    /** Find all packages for a specific destination */
    public function findByDestinationSlug(string $destinationSlug): array
    {
        foreach ($this->destinations as $item) {
            if ($item['destination']['slug'] === $destinationSlug) {
                return [$item];
            }
        }
        return [];
    }

    /** Find a specific package inside a destination */
    public function findPackage(string $destinationSlug, string $packageSlug): ?array
    {
        foreach ($this->destinations as $item) {
            if ($item['destination']['slug'] === $destinationSlug) {
                foreach ($item['packages'] as $pkg) {
                    if ($pkg['slug'] === $packageSlug) {
                        return $pkg;
                    }
                }
            }
        }
        return null;
    }

    /** Find other packages excluding the current one */
    public function findRelatedPackages(string $packageSlug, int $limit = 6): array
    {
        $related = [];

        foreach ($this->destinations as $item) {
            foreach ($item['packages'] as $pkg) {
                if ($pkg['slug'] !== $packageSlug) {
                    // Add destination info manually
                    $pkg['destination_name'] = $item['destination']['name'];
                    $pkg['destination_slug'] = $item['destination']['slug'];
                    $related[] = $pkg;
                }
            }
        }

        return array_slice($related, 0, $limit);
    }
}
