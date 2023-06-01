<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <h1>The Best Calculator</h1>
    <div id="calculator">
      <form action="api.php" method="POST">
        <input type="text" id="mainScreen" name="screen" value="<?php echo @$number ?>"> <br>
        <input type="submit" class="numbtn" name="number" value="7"/>
        <input type="submit" class="numbtn" name="number" value="8"/>
        <input type="submit" class="numbtn" name="number" value="9"/>
        <input type="submit" class="operation" name="op" value="+"/> <br>
        <input type="submit" class="numbtn" name="number" value="4"/>
        <input type="submit" class="numbtn" name="number" value="5"/>
        <input type="submit" class="numbtn" name="number" value="6"/>
        <input type="submit" class="operation" name="op" value="-"/><br>
        <input type="submit" class="numbtn" name="number" value="1"/>
        <input type="submit" class="numbtn" name="number" value="2"/>
        <input type="submit" class="numbtn" name="number" value="3"/>
        <input type="submit" class="operation" name="op" value="*"/><br>
        <input type="submit" class="numbtn" name="number" value="0"/>
        <input type="submit" class="numbtn" name="number" value="C"/>
        <input type="submit" class="result" name="equal" value="="/>
        <input type="submit" class="operation" name="op" value="/"/></br>
  
      </form>
    </div>
  </body>
</html>
