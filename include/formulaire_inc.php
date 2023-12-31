
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<!DOCTYPE html>
<html>
<head>
    <title>inscription</title>
</head>
<body>
<?php 
    include('menu_inclu.php');
?>
<div class="p-3 mb-2 bg-light text-dark">
     <h1>Inscription</h1>
     <p>Merci de remplir ce formulaire d'inscription</p>

     <small>Vous ferez bientôt parti de nos membres.Vous avez fait le bon choix ;-)</small>
</div>
   
    
        

    <form class="was-validated" novalidate>
        <div class="col-md-4 mb-3">
            <div class="form-group ">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prnom"  placeholder="Votre prenom" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control" id="prenom" oninput="saisietexteprenom(this)" aria-describedby="emailHelp" placeholder="Votre prénom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Adresse éléctronique</label>
                <input type="email" class="form-control" id="Email1" oninput="saisiemail(this)" aria-describedby="emailHelp" placeholder="Enter email" name="mail" required>
                <small id="emailHelp" class="form-text text-muted">Nous ne partegons votre mail.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Votre mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" oninput='motdepasse1.setCustomValidity(motdepasse2.value != motdepasse1.value ?  "Mot de passe non identique" : "")' class="form-control" id="motdepasse2" name="motdepasse2" minlength="5" maxlength="30" required >
            </div>
            <p id="erreurMotDePasse"></p>
            <div class="form-group">
                <label for="exampleInputPassword2">Confirmation du mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword2" oninput='motdepasse2.setCustomValidity(motdepasse2.value != motdepasse1.value ?  "Mot de passe non identique" : "")' class="form-control" id="motdepasse2" name="motdepasse2" minlength="5" maxlength="30" required >
            </div>
        </div>
  
            <div class = "btn-group">
                <button type="button"  class="btn btn-info">Client</button>
                <button type="button" class="btn btn-info">Photographe</button>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"><small>Oui je veux recevoir des sources d'inspiration visuelles  et autres communication par mail</small></label>
            </div>

            <button type="submit" class="btn btn-primary">Envoyez</button>
           
       
    </form>
        
    

    

    

        




    </script>
</body>
</html>
