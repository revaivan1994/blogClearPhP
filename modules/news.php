<?php
$id = (int)$_GET['id'];

$content = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/data/" . $id . '.txt' );
$news = unserialize($content);


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
          <h1><?= $news['title'] ?></h1>
          <p>
            <?= $news['text'] ?>
          </p>
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
