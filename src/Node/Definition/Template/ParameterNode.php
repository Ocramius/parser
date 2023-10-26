<?php

declare(strict_types=1);

namespace TypeLang\Parser\Node\Definition\Template;

use TypeLang\Parser\Node\Identifier;
use TypeLang\Parser\Node\Node;
use TypeLang\Parser\Node\Type\TypeStatement;

final class ParameterNode extends Node
{
    public function __construct(
        public readonly Identifier $name,
        public ParameterVariance $variance = ParameterVariance::ANY,
        public ?TypeStatement $type = null,
    ) {}
}
