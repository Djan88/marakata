<!DOCTYPE html><!--[if IE 8]><html class="lt-ie9 no-js"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title(''); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/demo.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/component.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

  <style></style>
  <?php wp_head(); ?> 
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script><![endif]-->
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <section class="section section--menu" id="Adrian">
          <nav class="menu menu--adrian">
            <ul class="menu__list">
              <li class="menu__item"><a href="#" class="menu__link"><span class="menu__helper">Главная</span></a></li>
              <li class="menu__item menu__item--current"><a href="#" class="menu__link"><span class="menu__helper">О "MARAKATA"</span></a></li>
              <li class="menu__item"><a href="#" class="menu__link"><span class="menu__helper">Протокол</span></a></li>
              <li class="menu__item"><a href="#" class="menu__link"><span class="menu__helper">Новости</span></a></li>
            </ul>
          </nav>
        </section>
      </div>
    </div>
  </div>
  <canvas></canvas>
  <?php wp_footer(); ?>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/holder/2.3.0/holder.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/i18n/defaults-*.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/classie.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/clipboard.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
  <script>
  (function() {
    [].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
      var menuItems = menu.querySelectorAll('.menu__link'),
        setCurrent = function(ev) {
          ev.preventDefault();

          var item = ev.target.parentNode; // li

          // return if already current
          if (classie.has(item, 'menu__item--current')) {
            return false;
          }
          // remove current
          classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
          // set current
          classie.add(item, 'menu__item--current');
        };

      [].slice.call(menuItems).forEach(function(el) {
        el.addEventListener('click', setCurrent);
      });
    });

    [].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
      link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
      new Clipboard(link);
      link.addEventListener('click', function() {
        classie.add(link, 'link-copy--animate');
        setTimeout(function() {
          classie.remove(link, 'link-copy--animate');
        }, 300);
      });
    });
  })(window);
  </script>
</body>
