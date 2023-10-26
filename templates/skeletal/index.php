<?php
//leave everything at the top alone

defined ('_JEXEC') or die('Restricted access');

use Joomla\CMS\Factory;

$app = Factory::getApplication();
$doc = Factory::getDocument();
$siteTitle = $app->get('sitename');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- leave first 3 lines alone -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <jdoc:include type="metas" />

    <!-- load style.css -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/style.css" type="text/css" />
    
    <!-- you can delete this next line if you dont know/need javascript -->
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/script.js"></script>
</head>
<body>

    <header>
        <!-- shows site title in header -->
        <h1 class="site-title"><?php echo $siteTitle ?></h1>

        <div class="menu">
            <!-- this loads the menu module -->
            <jdoc:include type="modules" name="menu" />
        </div>
        <div class="breadcrumbs">
            <!-- this loads the breadcrumbs module -->
            <jdoc:include type="modules" name="breadcrumbs" />
        </div>
    </header>

    <div class="main-container">
        <main>
            <!-- this loads important messages, you should leave this -->
            <jdoc:include type="message" />
            <!-- this loads the actual component, the main part of the page -->
            <jdoc:include type="component" />
            <!-- this loads the debug module, you should leave this -->
            <jdoc:include type="modules" name="debug" />
        </main>
        <aside>
            <!-- this loads the sidebar-right module -->
            <jdoc:include type="modules" name="sidebar-right" />
        </aside>
    </div>

    <footer>
        <jdoc:include type="modules" name="footer" />
        <br/>
        <!-- shows site title and copyright in footer -->
        <span class="copy">&copy; <?php echo date('Y') ?> <?php echo $siteTitle ?></span>
    </footer>
    
</body>
</html>