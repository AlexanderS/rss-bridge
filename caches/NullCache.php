<?php

declare(strict_types=1);

class NullCache implements CacheInterface
{
    public function setScope(string $scope): void
    {
    }

    public function setKey(array $key): void
    {
    }

    public function loadData(int $timeout = 86400)
    {
    }

    public function saveData($data): void
    {
    }

    public function getTime(): ?int
    {
        return null;
    }

    public function purgeCache(int $timeout = 86400): void
    {
    }
}
