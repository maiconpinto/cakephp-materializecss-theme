<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title><?php echo ($this->fetch('title')) ? $this->fetch('title') : 'Parallax Template - Materialize'; ?></title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php echo $this->Html->css('MaterializeCSS.materialize', array('media' => 'screen,projection')) ?>
    <?php echo $this->Html->css('MaterializeCSS.style', array('media' => 'screen,projection')) ?>
</head>
<body>

    <?php
    if (!$this->fetch('nav')) {
        ?>
        <nav class="white" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo">
                    <?php echo ($this->fetch('logo')) ? $this->fetch('logo') : 'logo'; ?>
                </a>
                <?php
                if (!$this->fetch('menu')) {
                    ?>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#">Navbar Link</a></li>
                    </ul>

                    <ul id="nav-mobile" class="side-nav">
                        <li><a href="#">Navbar Link</a></li>
                    </ul>
                    <?php
                } else {
                    echo $this->fetch('menu');
                }
                ?>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <?php
     } else {
        echo $this->fetch('nav');
     }
     ?>

<?php echo $this->fetch('content'); ?>

<?php
if (!$this->fetch('footer')) {
    ?>
    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text"><?php echo ($this->fetch('footer-bio-title')) ? $this->fetch('footer-bio-title') : 'Company Bio'; ?></h5>
                    <p class="grey-text text-lighten-4"><?php echo ($this->fetch('footer-bio-description')) ? $this->fetch('footer-bio-description') : 'We are a team of college students working on this project like it\'s our full time job. Any amount would help support and continue development on this project and is greatly appreciated.'?></p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text"><?php echo ($this->fetch('footer-menu-one-title')) ? $this->fetch('footer-menu-one-title'): 'Settings'; ?></h5>
                    <?php
                    if (!$this->fetch('footer-menu-one')) {
                        ?>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                        <?php
                    } else {
                        echo $this->fetch('footer-menu-one');
                    }
                    ?>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text"><?php echo ($this->fetch('footer-menu-two-title')) ? $this->fetch('footer-menu-two-title'): 'Connect'; ?></h5>
                    <?php
                    if (!$this->fetch('footer-menu-two')) {
                        ?>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                        <?php
                    } else {
                        echo $this->fetch('footer-menu-two');
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
            </div>
        </div>
    </footer>
    <?php
}
?>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<?php echo $this->Html->script('materialize') ?>
<?php echo $this->Html->script('init') ?>
</body>
</html>
