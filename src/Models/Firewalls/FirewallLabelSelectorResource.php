<?php

namespace LKDev\HetznerCloud\Models\Firewalls;

use LKDev\HetznerCloud\Models\Firewalls\FirewallResource;

class FirewallLabelSelectorResource extends FirewallResource
{
    private string $selector;

    const TYPE = 'label_selector';

    public function __construct(string $selector)
    {
        parent::__construct(self::TYPE, null);

        $this->selector = $selector;
    }

    public function toRequestSchema(): array
    {
        return [
            'type' => $this->type,
            'label_selector' => ['selector' => $this->selector],
        ];
    }
}
