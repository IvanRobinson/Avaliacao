<?php
   require_once("logica/conecta.php");
   $sql = "select id, nome, apelido from contatos";
   $res = $mysqli->query($sql);
?>
<html lang="pt">
<head>
   <meta charset="utf-8"/>
   <title> Lista de Contatos</title>
  <link rel="stylesheet" href="css/style.css" />
  <style >
     body {
   font-family: sans-serif;
   background-image: url(lista.jpg);
  background-attachment: fixed;
  background-size: 100%;
  background-repeat: no-repeat;
  background-color: #000;
}
 </style>
 
</head>
<body>
  
   <div class="container">
      <h1>Lista de Contatos</h1>

      <table class="table table-striped" border="1">

         <thead>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Ações</th>
         </thead>

         <tbody>
            <?php
               while ($row = $res->fetch_assoc()){
                  echo "<tr>";
                  echo "<td>".$row['nome']."</td> ";
                  echo "<td>".$row['apelido']."</td> ";
                  echo "<td><a class='btn btn-danger btn-sm' href=\"detalhes.php?id=".$row['id']."\">Info</a></td>";
                  echo "</tr>";
               }
            ?>
         </tbody>
      </table>
      <div class="text-center">
         <buttonclass="button">   novo cantato</button>
         <a href="novo_contato.php" class="btn btn-primary"> <button>Novo Contato</button></a>

      </div>
   </div>

</body>
</html>