<?php

require_once __DIR__ . '/../vendor/autoload.php';

$config = file_get_contents(__DIR__ . '/../config.json');
$config = json_decode($config, true);

if (is_readable(__DIR__ . '/../config-local.json')) {
    $localConfig = file_get_contents(__DIR__ . '/../config-local.json');
    $localConfig = json_decode($localConfig, true);
    $config = array_merge_recursive($localConfig ?? [], $config ?? []);
}

if (!$config) {
    http_response_code(500);
    echo 'Unable to load config';
    exit;
}

$url = $_SERVER['REQUEST_URI'];
if (!isset($config['pages'][$url])) {
    http_response_code(404);
    echo 'Page not found';
    exit;
}

$languages = $config['languages'];
$page = $config['pages'][$url];

$home = '/';
if (
    isset($config['pages']['/'])
    && $config['pages']['/']['language'] != $page['language']
    && isset($config['pages'][$home . $page['language']])
) {
    $home .= $page['language'];
}

$pages = [];
foreach ($config['pages'] as $link => $content) {
    if ($content['language'] == $page['language']) {
        $pages[$content['title'] ?? ''] = $link;
    }
}

$pages += $config['links'][$page['language']] ?? [];
?>
<!DOCTYPE html>
<html lang="<?php echo $page['language']; ?>>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
        $title = $config['title'];
        if (isset($page['subtitle']) || isset($page['title'])) {
            $title .= ' - ' . ($page['subtitle'] ?? $page['title']);
        }
        echo $title;
        ?>
    </title>
    <link href="/assets/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/styles.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $home; ?>">
            <span class="icon-icon_angel bg-body"></span> <?php echo $config['title']; ?>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <span class="me-auto"></span>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <?php
                foreach ($pages as $name => $pageUrl) {
                    if (!$name) {
                        continue;
                    }

                    $class = '';
                    if ($url == $pageUrl) {
                        $class = ' active';
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link<?php echo $class ?>" href="<?php echo $pageUrl; ?>">
                            <?php echo $name; ?>
                        </a>
                    </li>
                <?php } ?>
                <?php foreach ($page['languages'] ?? [] as $language => $url) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url; ?>"><?php echo $languages[$language]; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<div class="col-lg-8 mx-auto p-3 py-md-5">
    <main>
        <div class="row g-5">
            <?php
            foreach ($page['content'] ?? [] as $content) {
                $cta = $content['cta'] ?? false;
                $class = 'col-md-' . ($content['size'] ?? $page['size'] ?? 12);

                if ($content['centered'] ?? false) {
                    $class .= ' text-center';
                }

                if ($cta) {
                    $class .= ' p-3 m-0 bg-dark text-light';
                }
                ?>

                <div class="<?php echo $class; ?>">

                    <?php if (isset($content['image'])) { ?>
                        <img class="cta" src="<?php echo $content['image'] ?>"
                             alt="<?php echo $content['title'] ?? '' ?>"
                        >
                    <?php } ?>

                    <?php if (isset($content['title'])) { ?>
                        <h2<?php if ($cta) {
                            echo ' class="fw-bold"';
                        } ?>><?php echo $content['title']; ?></h2>
                    <?php } ?>

                    <?php if (isset($content['content'])) { ?>
                        <?php foreach ((array)$content['content'] as $line) { ?>
                            <p><?php echo nl2br($line); ?></p>
                        <?php } ?>
                    <?php } ?>

                    <?php
                    if (isset($content['file'])) {
                        $file = __DIR__ . '/../content/' . str_replace(['/', '\\'], '', $content['file']);
                        echo file_get_contents($file);
                    }
                    ?>

                    <?php if (isset($content['list'])) { ?>
                        <ul>
                            <?php foreach ((array)$content['list'] as $item) { ?>
                                <li><?php echo $item; ?></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>

                    <?php if (isset($content['reference'])) { ?>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col"><span class="icon-icon_angel"></span></th>
                                <th scope="col">Event</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach (array_reverse($config['references']) as $reference) { ?>
                                <tr>
                                    <th scope="row" class="text-end"><?php echo $reference['angels'] ?? '-' ?></th>
                                    <td>
                                        <?php if (isset($reference['link'])) { ?>
                                            <a href="<?php echo $reference['link'] ?>" target="_blank"><?php echo $reference['name'] ?></a>
                                        <?php } else { ?>
                                            <?php echo $reference['name'] ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    <?php } ?>

                    <?php
                    if (isset($content['button'])) {
                        $class = 'btn-primary';
                        $buttonClass = 'bg-light';

                        if ($cta) {
                            $class = 'btn-info';
                            $buttonClass = 'bg-dark';
                        }
                        ?>
                        <p>
                            <a class="btn <?php echo $class; ?>"
                               href="<?php echo $content['button']['link']; ?>"
                               target="_blank"
                            >
                                <?php if ($content['button']['angel'] ?? false) { ?>
                                    <span class="icon-icon_angel <?php echo $buttonClass; ?>"></span>
                                <?php } ?>
                                <?php echo $content['button']['text']; ?>
                            </a>
                        </p>
                    <?php } ?>

                    <?php if (isset($content['footer'])) { ?>
                        <p class="text-muted">
                            <?php echo $content['footer']; ?>
                        </p>
                    <?php } ?>

                </div>
            <?php } ?>
        </div>
    </main>
</div>

<script src="/assets/bootstrap.bundle.min.js"></script>

</body>
</html>
