<?php declare(strict_types=1);

namespace CPSIT\ShortNr\Event;

use CPSIT\ShortNr\Config\DTO\ConfigInterface;
use CPSIT\ShortNr\Config\DTO\ConfigItemInterface;
use CPSIT\ShortNr\Service\Url\Demand\Encode\EncoderDemandInterface;

final class ShortNrEncodingConfigItemEvent
{
    /**
     * @param ConfigItemInterface[] $configItems
     */
    public function __construct(
        private array $matchedConfig,
        private readonly EncoderDemandInterface $demand,
        private readonly ConfigInterface $globalConfig
    ) {}

    /**
     * @return ConfigItemInterface[]
     */
    public function getConfigItems(): array
    {
        return $this->matchedConfig;
    }

    /**
     * @param ConfigItemInterface[] $configItems
     */
    public function setConfigItems(array $configItems): void
    {
        $this->matchedConfig = $configItems;
    }

    public function getDemand(): EncoderDemandInterface
    {
        return $this->demand;
    }

    public function getGlobalConfig(): ConfigInterface
    {
        return $this->globalConfig;
    }
}
