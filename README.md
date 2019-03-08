# Wrapper for simplehtmldom 1.8

## Install via "composer require"
composer require filipemansano/simplehtmldom

## Quick Start

```php
require_once 'composer/autoload.php';

use FilipeMansano\PhpSimple\HtmlDomParser;

...
$dom = HtmlDomParser::str_get_html($str);
// or 
$dom = HtmlDomParser::file_get_html($file);

$elems = $dom->find('#css-selector');
```

### Documentation
http://simplehtmldom.sourceforge.net/
