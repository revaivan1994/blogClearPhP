<?php
if(!empty($_GET['act']) && $_GET['act'] == 'news') {
  require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/news.php';
  die();
}


require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/readnews.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
?>



  <body>

    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu.php'
    ?>

    <main role="main">

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <?php foreach($news as $item): ?>
          <div class="col-md-4">
            <h2><?= $item['title'] ?></h2>
            <p><?= mb_substr($item['text'], 0, 200); ?></p>
            <p><a class="btn btn-secondary" href="/?act=news&id=<?= $item['id'] ?>" role="button">View details &raquo;</a></p>
          </div>
          <?php endforeach; ?>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Company 2017-2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->

    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
