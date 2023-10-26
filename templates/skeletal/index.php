<?php

defined ('_JEXEC') or die('Restricted access');

use Joomla\CMS\Factory;

$app = Factory::getApplication();
$doc = Factory::getDocument();

$siteTitle = $app->get('sitename');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <jdoc:include type="metas" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/style.css" type="text/css" />
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/script.js"></script>
</head>
<body>

    <header>
        <h1 class="site-title"><?php echo $siteTitle ?></h1>
        <div class="menu">
            <jdoc:include type="modules" name="menu" />
        </div>
        <div class="breadcrumbs">
            <jdoc:include type="modules" name="breadcrumbs" />
        </div>
    </header>

    <div class="main-container">
        <main>
        <jdoc:include type="message" />
        <jdoc:include type="component" />
        <jdoc:include type="modules" name="debug" />
        </main>
        <aside>
            <jdoc:include type="modules" name="sidebar-right" />
        </aside>
    </div>

    <footer>
        <jdoc:include type="modules" name="footer" />
        <br/>
        <span class="copy">&copy; <?php echo date('Y') ?> <?php echo $siteTitle ?></span>
    </footer>
    
</body>
</html>