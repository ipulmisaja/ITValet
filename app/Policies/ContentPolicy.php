<?php

namespace App\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Basic;

class ContentPolicy extends Basic
{
    public function configure()
    {
        parent::configure();

        $this
            ->addDirective(Directive::STYLE, 'https://fonts.cdnfonts.com')
            ->addDirective(Directive::DEFAULT, 'https://fonts.cdnfonts.com');
    }
}
