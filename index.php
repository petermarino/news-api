<!DOCTYPE html>
<html lang="en-AU">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News API</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="header">
      <h2>News API - PHP Practice</h2>
    </div>
    <div class="headline">
      <h3>Top Headlines from Australia</h3>
      <div class="flex-container headlines">
        <?php include_once 'includes/headlines.php';?>
      </div>
    </div>
    <div class="sources">
      <h3>Select a news source</h3>
      <!--Generate the sources select-->
      <select id="src-select">
        <option value="#" selected disabled>Select a source</option>
        <?php include_once 'includes/news_sources.php';?>
      </select>
      <div id="preloader"></div>
      <div class="flex-container" id="content"></div>
    </div>
    <footer>
    <p>Powered by:<a href="https://newsapi.org">NewsAPI.org</a></p>
  </footer>
  <script>
   $(document).ready(function(){
    $("#preloader").hide();
    $('select').on('change', function() {
      $("#preloader").show();
      $.post("includes/content.php",
      {
        id: $("#src-select").val()
      },
      function(data,status){
        $('#content').html(data);
        $("#preloader").hide();
      });
    });
  });
</script>
  </body>
</html>
