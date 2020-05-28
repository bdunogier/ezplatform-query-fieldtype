<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformQueryFieldType\API;

use eZ\Publish\API\Repository\Values\Content\Location;

/**
 * Executes queries for a query field for a given a location.
 */
interface QueryFieldLocationService
{
    public function loadContentItemsForLocation(Location $location, string $fieldDefinitionIdentifier): iterable;

    public function loadContentItemsSliceForLocation(Location $location, string $fieldDefinitionIdentifier, int $offset, int $limit): iterable;

    public function countContentItemsForLocation(Location $location, string $fieldDefinitionIdentifier): int;
}
