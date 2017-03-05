<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light"><?php echo ($this->fetch('parallax-title')) ? $this->fetch('parallax-title') : 'A modern responsive front-end framework based on Material Design'; ?></h5>
            </div>
        </div>
    </div>
    <div class="parallax">
        <?php
        $image = ($this->fetch('parallax-image')) ? $this->fetch('parallax-image') : 'background1.jpg';
        $alt = ($this->fetch('parallax-image-alt')) ? $this->fetch('parallax-image-alt') : 'Unsplashed background img 2';

        echo $this->Html->image($image, ['alt' => $alt]);
        ?>
    </div>
</div>

<?php
if (!$this->fetch('content')) {
    ?>
    <div class="container">
        <div class="section">

          <!--   Icon Section   -->
          <div class="row">
            <div class="col s12 m12">
                <h1>Page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta est ut quae, doloribus maiores veniam pariatur quia explicabo minus excepturi quaerat tempora itaque, autem. Nobis cum quod tenetur magnam reiciendis.</p>
            </div>
        </div>
    </div>
    <?php
} else {
    echo $this->fetch('content');
}
