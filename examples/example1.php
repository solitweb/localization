<?php
require __DIR__ . '/../src/localization.class.php';
$lang = new Localization(__DIR__ . '/languages/');
?>
<!doctype html>
<html lang="<?php echo $lang->getLocale(); ?>">
<head>
    <title>Localization</title>
</head>
<body>

    <h1><?php echo $lang->translate('This is in English'); ?></h1>

    <ul>
        <?php foreach ($lang->getAllLocales() as $locale) : ?>

            <li>
                <a href="<?php echo $lang->buildQueryString($locale); ?>">
                    <?php echo $lang->getLocaleNative($locale); ?>
                </a>
            </li>

        <?php endforeach; ?>
    </ul>

</body>
</html>