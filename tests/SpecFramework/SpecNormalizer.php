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

namespace Humbug\PhpScoper\SpecFramework;

use Humbug\PhpScoper\NotInstantiable;

final class SpecNormalizer
{
    use NotInstantiable;

    public static function trimTrailingSpaces(string $value): string
    {
        return implode(
            "\n",
            array_map(
                rtrim(...),
                explode("\n", $value),
            ),
        );
    }
}
