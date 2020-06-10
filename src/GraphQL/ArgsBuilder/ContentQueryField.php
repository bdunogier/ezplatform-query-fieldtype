<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */

namespace EzSystems\EzPlatformQueryFieldType\GraphQL\ArgsBuilder;

use Overblog\GraphQLBundle\Definition\Builder\MappingInterface;

final class ContentQueryField implements MappingInterface
{
    public function toMappingDefinition(array $config): array
    {
        return [
            'locationId' => [
                'type' => 'Int',
                'description' => 'Which of the content\'s location id results must be queried for. If not specified, the main one is used.'
            ],
        ];
    }
}
