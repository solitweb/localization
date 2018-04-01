# PHP localization class
A simple PHP class for handling translations.

## Usage
Include the class
```
require __DIR__ . '/localization.class.php';
$lang = new Localization();
```

Add languages files formatted as JSON to the languages folder
```
/languages
    en.json
    nl.json
    fr.json
    ...
```

Example of the `nl.json` language file:
```
{
    "This is in English": "Dit is in het Nederlands"
}
```

Create a language switcher
```
foreach ($lang->getAllLocales() as $locale) :
    echo '<li>';
        echo '<a href="'. $lang->buildQueryString($locale) .'">';
            echo $lang->getLocaleNative($locale);
        echo '</a>';
    echo '</li>';
endforeach;
```

Translate a sting:
```
echo $lang->translate('This is in English');
```
If the `$_GET['lang']` parameter is set to `nl` this wil echo: `Dit is in het Nederlands`