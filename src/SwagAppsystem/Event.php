<?php declare(strict_types=1);

namespace App\SwagAppsystem;

class Event
{
    /**
     * @var string
     */
    private $shopUrl;

    /**
     * @var string
     */
    private $shopId;

    /**
     * @var int
     */
    private $appVersion;

    /**
     * @var array
     */
    private $eventData;

    private int $timestamp;

    public function __construct(string $shopUrl, string $shopId, int $appVersion, array $eventData, int $timestamp)
    {
        $this->shopUrl = $shopUrl;
        $this->shopId = $shopId;
        $this->appVersion = $appVersion;
        $this->eventData = $eventData;
        $this->timestamp = $timestamp;
    }

    public function getShopUrl(): string
    {
        return $this->shopUrl;
    }

    public function getShopId(): string
    {
        return $this->shopId;
    }

    public function getAppVersion(): int
    {
        return $this->appVersion;
    }

    public function getEventData(): array
    {
        return $this->eventData;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }
}
