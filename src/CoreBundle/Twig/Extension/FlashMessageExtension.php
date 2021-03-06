<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CoreBundle\Twig\Extension;

if (!class_exists(\Sonata\Twig\Extension\FlashMessageExtension::class, false)) {
    @trigger_error(
        'The '.__NAMESPACE__.'\FlashMessageExtension class is deprecated since version 3.13.0 and will be removed in 4.0.'
        .' Use Sonata\Twig\Extension\FlashMessageExtension instead.',
        E_USER_DEPRECATED
    );
}

class_alias(
    \Sonata\Twig\Extension\FlashMessageExtension::class,
    __NAMESPACE__.'\FlashMessageExtension'
);

if (false) {
    /**
     * This is the Sonata core flash message Twig extension.
     *
     * @author Vincent Composieux <composieux@ekino.com>
     * @author Titouan Galopin <galopintitouan@gmail.com>
     *
     * @deprecated since sonata-project/core-bundle 3.13.0, to be removed in 4.0.
     */
    class FlashMessageExtension extends \Sonata\Twig\Extension\FlashMessageExtension
    {
    }
}
