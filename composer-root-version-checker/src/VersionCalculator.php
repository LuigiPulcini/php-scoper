<?php

declare(strict_types=1);

/*
 * This file is part of the humbug/php-scoper package.
 *
 * Copyright (c) 2017 Théo FIDRY <theo.fidry@gmail.com>,
 *                    Pádraic Brady <padraic.brady@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Humbug\PhpScoperComposerRootChecker;

final class VersionCalculator
{
    public static function calculateDesiredVersion(string $tag): string
    {
        $tagParts = explode('.', $tag);

        array_pop($tagParts);

        $tagParts[] = '99';

        return implode('.', $tagParts);
    }

    private function __construct()
    {
    }
}
