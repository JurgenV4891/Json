<?php

if (!empty($_POST)) {
  if (empty($_POST['catalogue'])) {
    $message = "Revenez plus tard pour faire votre choix définitif";
  } else {
    $commande = array('catalogue' => $_POST['année'], '1999' => $_POST['1999'], '2001' => $_POST['2001'], '2003' => $_POST['2003'], '2005' => $_POST['2005'], '2007' => $_POST['2007'], '2009' => $_POST['2009']);
    $options = json_encode($commande);  
  
    $message = "Merci d'avoir louer votre Formule 1 chez RentNBurnUrCash " . $_POST['catalogue'] . ', ';
    $options = json_decode($options);

    foreach ($options as $option) {
      if ($option) $message .= ' ' . $option . ',';
    }
  }
}

?>

<html>

<body>

  <style>
    form {
      display: flex;
      flex-direction: column;
      width: 80%;
      height: 80%;
      margin: auto;
      margin-top: 5%  ;
      color: red;
      text-align: center;
      background: url("https://images.unsplash.com/photo-1590214074323-fd5649874bee?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80");
    }   
    
  </style>

  <form method="post">
      <h1>Location d'Anciennes Formule 1</h1>
      <select name="catalogue">
        <option value="">Choisissez Votre Voiture</option>
        <option value="mercedes">Mercedes</option>
        <option value="ferrari">Ferrari</option>
        <option value="redbull">Red Bull</option>
        <option value="haas">Haas</option>
        <option value="williams">Williams</option>
        <option value="astonMartin">Aston Martin</option>
        <option value="alphaTauri">Alpha Tauri</option>

      </select><br />

      <span><input type="checkbox" name="année" value="Années"/> Quel année souhaitez-vous essayer ?</span>
      <span><input type="checkbox" name="1999" value="1999"/> 1999</span>
      <span><input type="checkbox" name="2001" value="2001"/> 2001</span>
      <span><input type="checkbox" name="2003" value="2003"/> 2003</span>
      <span><input type="checkbox" name="2005" value="2005"/> 2005</span>
      <span><input type="checkbox" name="2007" value="2007"/> 2007</span>
      <span><input type="checkbox" name="2009" value="2009"/> 2009</span>


      <br /><input type="submit" value="Louer maintenant!" />

      <?php if (isset($message)) echo "<h2>$message !</h2>"; ?>

  </form>


</body>

</html>