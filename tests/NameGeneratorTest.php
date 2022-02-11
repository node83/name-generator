<?php
declare(strict_types=1);

use NameGenerator\CodeNameGenerator;
use NameGenerator\Locales\English;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \NameGenerator\NameGenerator
 */
final class NameGeneratorTest extends TestCase
{
    /**
     * @covers ::generate
     * @covers ::__construct
     * @covers \NameGenerator\Locales\English
     */
    public function testDefaultsGeneratesTwoEnglishWords(): void
    {
        $generator = new NameGenerator();
        $name = $generator->generate();
        $words = explode('-', $name);
        $locale = new English();

        $this->assertCount(2, $words);
        $this->assertContains($words[0], $locale->adjectives());
        $this->assertContains($words[1], $locale->nouns());
    }
}
