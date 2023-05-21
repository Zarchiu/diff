<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Diff;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Line::class)]
final class LineTest extends TestCase
{
    private Line $line;

    protected function setUp(): void
    {
        $this->line = new Line;
    }

    public function testCanBeCreatedWithoutArguments(): void
    {
        $this->assertInstanceOf(Line::class, $this->line);
    }

    public function testTypeCanBeRetrieved(): void
    {
        $this->assertSame(Line::UNCHANGED, $this->line->type());
        $this->assertSame(Line::UNCHANGED, $this->line->getType());
    }

    public function testContentCanBeRetrieved(): void
    {
        $this->assertSame('', $this->line->content());
        $this->assertSame('', $this->line->getContent());
    }
}
