<?php

namespace LaraDumps\LaraDumps\Payloads;

class ScreenPayload extends Payload
{
    public function __construct(
        public string $screen,
        public bool $classAttr = false
    ) {
    }

    public function type(): string
    {
        return 'screen';
    }

    /** @return array<string> */
    public function content(): array
    {
        /** @var array $config */
        $config    = config('laradumps.screen_btn_colors_map');
        $classAttr = ($this->classAttr) ? $config[$this->screen] : $config['default'];

        return [
            'screen'    => $this->screen,
            'classAttr' => $classAttr,
        ];
    }
}
