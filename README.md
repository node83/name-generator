# Name Generator

A simple name generator that produces names not dissimilar to Docker
instance names.

It produces names based on one or more adjectives followed by a single
noun:

`<adjective>-<noun>`

You can specify a different sent of adjectives and nouns by 
passing a class that implements
`\NameGenerator\Interfaces\LocaleInterface`.

## Documenation

```php
class NameGenerator
{
    /**
     * NameGenerator Constructor.
     *
     * @param LocaleInterface|null $locale (Optional, defaults to English)
     */
    public function __construct(?LocaleInterface $locale = null);
         
    /**
     * Generates a single code name.
     * 
     * @param int $number_of_adjectives <optional>
     * @return string
     */
    public function generate(int $number_of_adjectives = 1): string;
}
``` 
## Installation

```shell
composer require node83/name-generator
```

## Example Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$generator = new \NameGenerator\NameGenerator();

for ($i = 0; $i < 10; $i++) {
    echo $generator->generate() . PHP_EOL;
}
```

## Example Output

```text
doubtful-move
energetic-visual
devilish-basis
cagey-money
two-age
hard-tear
shaggy-media
unhealthy-trade
pastoral-kind
dashing-membership
```
