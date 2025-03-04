<?php

declare(strict_types=1);

namespace RectorNette\Tests\Kdyby\Rector\MethodCall\ReplaceEventManagerWithEventSubscriberRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

final class ReplaceEventManagerWithEventSubscriberRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     * @return never
     */
    public function test(SmartFileInfo $fixtureFileInfo)
    {
        $this->markTestSkipped('Without this test, there is some Comment autoload issue');
    }

    /**
     * @return Iterator<SmartFileInfo>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/configured_rule.php';
    }
}
