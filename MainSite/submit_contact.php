<h1>Message bien reçu !</h1>
        
<div class="card">
    
    <div class="card-body">
        <h5 class="card-title">Rappel de vos informations</h5>
        <p class="card-text"><b>Nom</b> : <?php echo $_GET['Nom']; ?></p>
        <p class="card-text"><b>prenom</b> : <?php echo $_GET['prenom']; ?>
        <p class="card-text"><b>UserName</b> : <?php echo $_GET['UserName']; ?></p>
        <p class="card-text"><b>Password</b> : <?php echo $_GET['Password']; ?></p>
        <p class="card-text"><b>Question secrète</b> : <?php echo $_GET['SecretQuestion']; ?></p>
        <p class="card-text"><b>Réponse à la question secrète</b> : <?php echo $_GET['SecretAnswer']; ?></p>
    </div>
</div>