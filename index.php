<!DOCTYPE html>
<html lang="en-AU">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News API</title>
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="main">
      <h2>News API - PHP Practice</h2>
      <!--Generate the sources select-->
      <select>
        <option value="#" selected disabled>Select a source</option>
        <?php include_once 'includes/news_sources.php';?>
      </select>
    </div>
    <footer>
    <p>Powered by <a href="https://newsapi.org">NewsAPI.org</a></p>
  </footer>
  </body>
</html>
