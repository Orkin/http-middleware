<?php
/**
 * This file is part of prooph/http-middleware.
 * (c) 2016-2017 prooph software GmbH <contact@prooph.de>
 * (c) 2016-2017 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\HttpMiddleware;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface MetadataGatherer
 *
 * Gatherer of metadata from the request object
 */
interface MetadataGatherer
{
    /**
     * Gets metadata from the request
     */
    public function getFromRequest(ServerRequestInterface $request): array;
}