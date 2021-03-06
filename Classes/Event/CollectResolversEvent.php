<?php

/**
 * This file is part of the "wpu_graphql" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Wolf Utz <wpu@hotmail.de>
 */

declare(strict_types=1);

namespace Wpu\Graphql\Event;

use Symfony\Contracts\EventDispatcher\Event;
use Wpu\Graphql\Registry\ResolverRegistry;

class CollectResolversEvent extends Event
{
    /**
     * @var ResolverRegistry
     */
    protected $resolverRegistry;

    public function __construct(ResolverRegistry $resolverRegistry)
    {
        $this->resolverRegistry = $resolverRegistry;
    }

    public function getResolverRegistry(): ResolverRegistry
    {
        return $this->resolverRegistry;
    }
}
