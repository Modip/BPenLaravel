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

    <form id="inscription" method="POST" action="{{route('persistclientphysique')}}">
    @csrf    
    <legend>
            <h2>Ajout de Client</h2>
        </legend>
        
        <main id="clientphysique">
            <fieldset>
                <legend>Client Physique</legend>
                <select name="nature" id="natclient" onchange="return chwnatclient()">
                    <option value="0">Nature client physique</option>
                    <option value="1">Salarié</option>
                    <option value="2">Non Salarié</option>
                </select>

                <label for="nameph"> Nom </label>
                <input type="text" name="nomph" id="nameph">
                <label for="" id="contrnameph" class="contr">Veillez saisir le nom</label>
                <label for="prenomph">Prénom</label>
                <input type="text" name="prenomph" id="prenomph">
                <label for="" id="contrprenomph" class="contr"> Veillez saisir le prénom</label> <br>
                <label for="ninph">NIN</label>
                <input type="text" name="ninph" id="ninph">
                <label for="" id="contrnin" class="contr">Veillez saisir le numéro d'identification</label>
                <label for="">Adresse</label>
                <input type="text" name="adresseph" id="adresseph">
                <label for="" id="contradresseph" class="contr">Veillez saisir l'adresse</label>
                <label for="telph">Téléphone</label>
                <input type="text" name="telph" id="telph">
                <label for="" id="contrtelph" class="contr">Veillez saisir le numéro de téléphone</label><br>
                <label for="mailph">Email</label>
                <input type="email" name="emailph" id="mailph">
                <label for="" id="contrmailph" class="contr">Veillez saisir l'adresse email</label>
                <label for="profession">Profession</label>
                <input type="text" name="profession" id="profession">
                <label for="" id="contrprofession" class="contr">Veillez saisir la profession</label><br>
                <label for="loginph">Login</label>
                <input type="text" name="loginph" id="loginph">
                <label for="" id="contrloginph" class="contr">Veillez saisir le login</label>
                <label for="passwordph">Password</label>
                <input type="password" name="passwordph" id="passwordph">
                <label for="" id="contrpasswordph" class="contr">Veillez saisir le mot de pass</label> <br>
                <label for="soldeph" class="salaire">Salaire</label>
                <input type="text" name="salaire" class="salaire" id="soldeph">
                <label for="" id="contrsoldeph" class="contr">Veillez saisir le salaire</label>
                <p id="employeur" class="employeur"> Employeur
                    <select name="" id="">
                        <option value="">Entreprise</option>   
                    </select>
                </p>
            </fieldset>
        </main>

        <div class="boutton" id="boutton">
            <button type="submit" name="submit" class="ajout" onclick="return validate() "> Ajouter </button>
        </div>
    </form>

    <script src="{$url_base}/public/js/client.js"></script>
</body>

</html>