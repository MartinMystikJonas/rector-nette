<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Nette\Rector\ClassMethod\TemplateMagicAssignToExplicitVariableArrayRector;
use Rector\Nette\Rector\Identical\SubstrMinusToStringEndsWithRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(TemplateMagicAssignToExplicitVariableArrayRector::class);
    $rectorConfig->rule(SubstrMinusToStringEndsWithRector::class);
};
