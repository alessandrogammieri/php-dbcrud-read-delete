<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="css/style.css">
    <!-- IMG: ICON -->
    <link rel="shortcut icon" href="img/me_icon.gif">
    <title>PHP DBcrud Read Delete</title>
  </head>
  <body>
    <h1>Pagamenti</h1>
    <div class="container">
      <div class="box">
        <p>Pending</p>
        <div class="prezzi-pend">
          <!-- Template -->
        </div>
      </div>
      <div class="box">
        <p>Rejected</p>
        <div class="prezzi-rej">
          <!-- Template -->
        </div>
      </div>
      <div class="box">
        <p>Accepted</p>
        <div class="prezzi-acc">
          <!-- Template -->
        </div>
      </div>
    </div>

    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">
      <div class="card" data-id={{id}} status={{status}}>
        <p>€ {{price}}</p>
        <p class="delete">Delete payment</p>
      </div>
    </script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- JS: MY SCRIPT -->
    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
