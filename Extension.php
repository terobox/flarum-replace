<?php

namespace Flarum\KeywordReplacer;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            // Replace "keyword" with "replacement" in posts
            $config->BBCodes->addCustom(
                '[keyword]{TEXT}[/keyword]',
                '<span class="KeywordReplacer">{TEXT}</span>'
            );
        })
];
