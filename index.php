<html>

<head>
  <title>Meu primeiro site em PHP! Woohoo</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

  <style type="text/css">
    .caixa {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 150px;
      height: 100px;
      padding: 0.5em;
      border: 3px solid green;
      border-radius: 50%;
      font-weight: bold;
      color: green;
    }
  </style>

</head>

<body>
  <h1>Itens arrastáveis</h1>
  <?php
  for ($i = 0; $i < 10; $i++) {
    print("<div class=\"caixa\">Item número " . $i . "</div><br />");
  }
  ?>
</body>

<script type="text/javascript">
  $(document).ready(function() {
    alert("Woohoo!");
  });

  $(function() {
    $(".caixa").draggable();
  });
</script>

</html>