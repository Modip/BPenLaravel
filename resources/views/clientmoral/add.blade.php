<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{$url_base}/public/css/mystyle.css" />
    <title>Creation client</title>
</head>

<body>

    <header class="topbar">
        <h3>BANQUE DU <span style="color: white;">PEUPLE</span></h3>
    </header>
    <div>
        <nav class="sidebar">
            <a class="dash" href="{$url_base}Client">Dashboard </a>
            <a class="compt" href="{$url_base}Compte" style="color: black;">Compte</a>
            <a class="dash" href="{$url_base}Client">Client </a>
        </nav>
    </div>
    @if(isset($confirmation))
    @if($confirmation == 1)
    <div>Client bien ajoute </div>
    @else
    <div> Erreur </div>
    @endif
    @endif
    <form id="inscription" method="POST" action="{{route('persistclientmoral')}}">
        @csrf
        <legend>
            <h2>Ajout de Client</h2>
        </legend>

        <main id="clientmoral" class="climo">
            <fieldset>
                <legend>Client Moral</legend>
                <label for="nommor">Nom</label>
                <input type="text" name="nommor" id="nommor">
                <label for="" id="contrnommor" class="contr">Veillez saisir le nom</label>
                <label for="adresse">Adresse</label>
                <input type="text" name="adressemor" id="adresse">
                <label for="" id="contradresse" class="contr">Veillez saisir l'dresse</label><br>
                <label for="social">Raison social</label>
                <input type="text" name="raisonsocial" id="social"><br>
                <label for="" id="contrsocial" class="contr">Veillez saisir la raison social</label>
                <label for="telmor">Téléphone</label>
                <input type="text" name="telmor" id="telmor">
                <label for="" id="contrtelmor" class="contr">Veillez saisir téléphone</label>
                <label for="mailmor">E-mail</label>
                <input type="text" name="mailmor" id="mailmor">
                <label for="" id="contrmailmor" class="contr">Veillez saisir l'adresse mail</label>
                <label for="loginmor">Login</label>
                <input type="text" name="loginmor" id="loginmor">
                <label for="" id="contrloginmor" class="contr">Veillez saisir le login</label>
                <label for="passwordmor">Password</label>
                <input type="password" name="passwordmor" id="passwordmor">
                <label for="" id="contrpasswordmor" class="contr">Veillez saisir le mot de passe</label>
            </fieldset>
        </main>

        <div class="boutton" id="boutton">
            <button type="submit" name="submit" class="ajout" onclick="return validate() "> Ajouter </button>
        </div>
    </form>


    <script src="{$url_base}/public/js/client.js"></script>
</body>

</html>