<?php

declare(strict_types=1);

namespace TypeLang\Parser\Node\Literal;

/**
 * @template TValue of bool
 * @template-extends LiteralNode<TValue>
 * @template-implements ParsableLiteralNodeInterface<TValue, non-empty-string>
 *
 * @psalm-consistent-constructor
 * @psalm-consistent-templates
 */
class BoolLiteralNode extends LiteralNode implements ParsableLiteralNodeInterface
{
    /**
     * @param TValue $value
     */
    final public function __construct(
        public readonly bool $value,
        string $raw = null,
    ) {
        parent::__construct($raw ?? ($value ? 'true' : 'false'));
    }

    public static function parse(string $value): self
    {
        return new self(\strtolower($value) === 'true', $value);
    }

    public function getValue(): bool
    {
        return $this->value;
    }
}
