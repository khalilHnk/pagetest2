<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initail-scale=1.0">
    <link rel="stylesheet" href="./styler.css">
    <title>TEST PAGE</title>
  </head>
  <body>
    <div>
      <header>
        <h1>TEST TITLE R</h1>
        <pre><a href="./index.php">LOG OUT</a></pre>
      </header>
      <main>        
        <?php if ( isset($_POST["psword"]) AND htmlspecialchars($_POST["psword"]) == "danube" ) { ?>        
        <article>
          <h2>TEST</h2>
          <p>Logged in successfully</p>
          <ul>
            <li><span>CODE0 : </span><span>value0</span></li>
            <li><span>CODE1 : </span><span>value1</span></li>
            <li><span>CODE2 : </span><span>value2</span></li>
            <li><span>CODE3 : </span><span>value3</span></li>
          </ul>
        </article>
        <?php } else { echo '<p style="color:darkred">INCORRECT PASSWORD :: LOGOUT AND TRY AGAIN</p>';}?>
      </main>
      <footer>
        <p>Page&copy;2021</p>
      </footer>
    </div>
  </body>
</html>
