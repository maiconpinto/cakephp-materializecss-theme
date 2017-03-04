<?php
if (!$this->fetch('section-banner')) :
?>
<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <h1 class="header center teal-text text-lighten-2"><?php echo ($this->fetch('section-banner-title')) ? $this->fetch('section-banner-title') : 'Parallax Template'; ?></h1>
      <div class="row center">
        <h5 class="header col s12 light"><?php echo ($this->fetch('section-banner-subtitle')) ? $this->fetch('section-banner-subtitle') : 'A modern responsive front-end framework based on Material Design'; ?></h5>
      </div>
      <div class="row center">
        <a href="<?php echo ($this->fetch('section-banner-button-link')) ? $this->fetch('section-banner-button-link') : 'http://materializecss.com/getting-started.html'; ?>" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">
            <?php echo ($this->fetch('section-banner-button-text')) ? $this->fetch('section-banner-button-text') : 'http://materializecss.com/getting-started.html'; ?>
        </a>
      </div>
      <br><br>

    </div>
  </div>
  <div class="parallax">
    <?php
    $image = ($this->fetch('section-banner-background-url')) ? $this->fetch('section-banner-background-url') : 'background1.jpg';
    $alt = ($this->fetch('section-banner-background-alt')) ? $this->fetch('section-banner-background-alt') : 'Unsplashed background img 1';
    ?>
    <?php echo $this->Html->image($image, ['alt' => $alt]); ?>
  </div>
</div>
<?php
else :
echo $this->fetch('section-banner');
endif;?>


<div class="container">
  <div class="section">

    <!--   Icon Section   -->
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons"><?php echo ($this->fetch('section-icons-block-left-icon')) ? $this->fetch('section-icons-block-left-icon') : 'flash_on'; ?></i></h2>
          <h5 class="center"><?php echo ($this->fetch('section-icons-block-left-title')) ? $this->fetch('section-icons-block-left-title') : 'Speeds up development'; ?> </h5>

          <p class="light"><?php echo ($this->fetch('section-icons-block-left-description')) ? $this->fetch('section-icons-block-left-description') : 'We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.'; ?></p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons"><?php echo ($this->fetch('section-icons-block-middle-icon')) ? $this->fetch('section-icons-block-middle-icon') : 'group'; ?></i></h2>
          <h5 class="center"><?php echo ($this->fetch('section-icons-block-middle-title')) ? $this->fetch('section-icons-block-middle-title') : 'Experience Focused'; ?> </h5>

          <p class="light"><?php echo ($this->fetch('section-icons-block-middle-description')) ? $this->fetch('section-icons-block-middle-description') : 'By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.'; ?></p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons"><?php echo ($this->fetch('section-icons-block-right-icon')) ? $this->fetch('section-icons-block-right-icon') : 'settings'; ?></i></h2>
          <h5 class="center"><?php echo ($this->fetch('section-icons-block-right-title')) ? $this->fetch('section-icons-block-right-title') : 'Easy to work with'; ?></h5>

          <p class="light"><?php echo ($this->fetch('section-icons-block-right-description')) ? $this->fetch('section-icons-block-right-description') : 'We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.'; ?></p>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light"><?php echo ($this->fetch('section-banner-two-title')) ? $this->fetch('section-banner-two-title'): 'A modern responsive front-end framework based on Material Design'; ?></h5>
      </div>
    </div>
  </div>
  <div class="parallax">
    <?php
    $image_two = ($this->fetch('section-banner-two-background-url')) ? $this->fetch('section-banner-two-background-url') : 'background2.jpg';
    $alt_two = ($this->fetch('section-banner-two-background-alt')) ? $this->fetch('section-banner-two-background-alt') : 'Unsplashed background img 2';
    ?>
    <?php echo $this->Html->image($image_two, ['alt' => $alt_two]); ?>
  </div>
</div>

<div class="container">
  <div class="section">

    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h4><?php echo ($this->fetch('section-contact-title')) ? $this->fetch('section-contact-title') : 'Contact Us'; ?></h4>
        <p class="left-align light"><?php echo ($this->fetch('section-contact-content')) ? $this->fetch('section-contact-content') : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;'; ?></p>
      </div>
    </div>

  </div>
</div>

<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light"><?php echo ($this->fetch('section-banner-three-title')) ? $this->fetch('section-banner-three-title') : 'background3.jpg'; ?></h5>
      </div>
    </div>
  </div>
  <div class="parallax">
    <?php
    $image_three = ($this->fetch('section-banner-three-background-url')) ? $this->fetch('section-banner-three-background-url') : 'background3.jpg';
    $alt_three = ($this->fetch('section-banner-three-background-alt')) ? $this->fetch('section-banner-three-background-alt') : 'Unsplashed background img 3';
    ?>
    <?php echo $this->Html->image($image_three, ['alt' => $alt_three]); ?>
  </div>
</div>

