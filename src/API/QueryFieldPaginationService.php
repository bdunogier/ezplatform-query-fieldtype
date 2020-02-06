<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformQueryFieldType\API;

use eZ\Publish\API\Repository\Values\Content\Content;

/**
 * Pagination related methods for v1.0.
 *
 * @deprecated since 1.0, will be part of the regular QueryFieldService interface in 2.0.
 */
interface QueryFieldPaginationService
{
    public function getPaginationConfiguration(Content $content, string $fieldDefinitionIdentifier): int;

    public function loadContentItemsSlice(Content $content, string $fieldDefinitionIdentifier, int $offset, int $limit): iterable;
}
