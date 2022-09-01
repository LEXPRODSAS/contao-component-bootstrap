<?php

declare(strict_types=1);

/*
 * This file is part of [component bootstrap].
 *
 * (c) Alexandre Normand
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\LexprodBootstrapBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\LexprodBootstrapBundle\ContaoComponentBootstrapBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoComponentBootstrapBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
