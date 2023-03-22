<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form  action="form.php"  method="post"><h1>Contactez-nous</h1>

    <div>
      <label  for="name">Nom :</label>
      <input  type="text"  id="name"  name="name">
    </div>

    <div>
      <label  for="firstname">prénom :</label>
      <input  type="text"  id="firstname"  name="firstname">
    </div>
    
    </div>
    <div>
      <label  for="email">Courriel :</label>
        <input  type="email"  id="courriel"  name="email">
    </div>



    <div>
      <label  for="tel">Telephone :</label>
        <input  type="text"  id="tel"  name="user_tel">
    </div>


    <div>
      <label  for="sujet">Sujet :</label>
      <select  name="sujet" id="sujet"  name="sujet">
        <option value="">choix :</option>
        <option value="commande">Commande</option>
        <option value="expedition">Expedition</option>
        <option value="autre">Autre...</option>


      </select>
    </div>
    <div>
      <label   for="message">Message :</label>
      <textarea  id="message"  name="user_message" row="800" c></textarea>
    </div>



    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>

  </form>

</body>
</html>
