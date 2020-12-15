<?php

declare(strict_types=1);

namespace Gorgo\Bundle\MigrationBundle\Locator;

use Oro\Bundle\MigrationBundle\Locator\FixturePathLocator as OroFixturePathLocator;
use Oro\Bundle\MigrationBundle\Migration\DataFixturesExecutorInterface;

class FixturePathLocator extends OroFixturePathLocator
{
    protected const GORGO_DEMO_FIXTURES_PATH = 'Migrations/Data/Demo/Gorgo';

    /**
     * {@inheritdoc}
     */
    public function getPath(string $fixtureType): string
    {
        if ($fixtureType === DataFixturesExecutorInterface::DEMO_FIXTURES) {
            return self::GORGO_DEMO_FIXTURES_PATH;
        }

        return parent::getPath($fixtureType);
    }
}
