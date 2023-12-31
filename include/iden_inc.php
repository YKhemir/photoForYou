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
     <h1>Identification</h1>
     
</div>
   
    
        

    <form class="was-validated" novalidate>
        <div class="form-group">
                <label for="exampleInputEmail1">Adresse éléctronique</label>
                <input type="email" class="form-control" id="Email1" oninput="saisiemail(this)" aria-describedby="emailHelp" placeholder="Enter email" name="mail" required>
                <small id="emailHelp" class="form-text text-muted">Nous ne partegons votre mail.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Votre mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" oninput='motdepasse1.setCustomValidity(motdepasse2.value != motdepasse1.value ?  "Mot de passe non identique" : "")' class="form-control" id="motdepasse2" name="motdepasse2" minlength="5" maxlength="30" required >
            </div>
    </form>

