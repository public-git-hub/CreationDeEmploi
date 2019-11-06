<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--    <link rel="stylesheet" href="css/bootstrap-grid.css">-->
    <!--    <link rel="stylesheet" href="css/bootstrap-reboot.css">-->
    <!--    <script src="js/bootstrap.bundle.js"></script>-->
    <script src="js/bootstrap.js"></script>
    <style>
        label {
            color: white;
        }
        .form-control {
            outline-color: white;
            outline-style: none;
            -moz-outline-style: none;
            -webkit-outline-style: none;
            -o-outline-style: none;
            resize: none;
        }

        .submit {
            width:250px;
            text-align: center;
            border-style: solid;
            border-color: white;
            border-width: 1px;
            color: white;
            margin-left: -160px;
            border-radius: 0px;

        }
        .submit:hover {
            color: white;
            background: rgba(255,255,255,0.3);
        }

        .jumbotron {
            background: linear-gradient(45deg, rgb(100, 40, 145) 0%, rgb(0, 0, 0) 100%);
            background: -moz-linear-gradient(45deg, rgb(100, 40, 145) 0%, rgb(0, 0, 0) 100%);
            background: -webkit-linear-gradient(45deg, rgb(100, 40, 145) 0%, rgb(0, 0, 0) 100%);
            background: -o-linear-gradient(45deg, rgb(100, 40, 145) 0%, rgb(0, 0, 0) 100%);
            align-content: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <div style="margin-left: 150px;" class="form-group text-center">
            <form action="" method="post">
                <div class="form-group row">
                    <div class="col-sm-5">
                        <label for="domaine"> L’intitulé du poste et Domaine Du Travail</label>
                        <textarea  style="outline-color: black;" class="form-control" id="domaine" name="domaine"></textarea>
                    </div>
                    <div class="col-sm-5">
                        <label for="postEtMissions"> decrire le post en mentionnant les missions</label>
                        <textarea class="form-control" id="postEtMissions" name="postEtMissions"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-5">
                        <label for="contrainte"> les contraintes</label>
                        <textarea class="form-control" id="contrainte" name="contrainte"></textarea>
                    </div>
                    <div class="col-sm-5">
                        <label for="descriptionDeLeEntriprise"> decrire votre entreprise </label>
                        <textarea class="form-control" id="descriptionDeLeEntriprise"
                                  name="descriptionDeLeEntriprise"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-5">
                        <label for="typeDeContrat"> qu'elle contrat vous proposer ? </label>
                        <select class="custom-select" id="typeDeContrat" name="typeDeContrat">
                            <option>CDD</option>
                            <option>CDI</option>
                            <option>autre contrat</option>
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <label for="tempsDeOccupation"> temps d'occupation </label>
                        <select class="custom-select" id="tempsDeOccupation" name="tempsDeOccupation">
                            <option>temps complet</option>
                            <option>temps partiel</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-5">
                        <label for="dureeParSemaine">dureé par semaine</label>
                        <input class="form-control" id="dureeParSemaine" name="dureeParSemaine" type="number" max="24"
                               min="1" placeholder="nombre d'heures">
                    </div>
                    <div class="col-sm-5">
                        <label for="lieu">lieu du poste</label>
                        <input class="form-control" id="lieu" name="lieu" type="" placeholder="lieu">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-5">
                        <label for="fourchetteSalariale">fourchette salariale</label>
                        <input class="form-control" id="fourchetteSalariale" name="fourchetteSalariale" type="number"
                               placeholder="salaire">
                    </div>
                    <div class="col-sm-5">
                        <label for="profileRecherche"> quel profile a recharcher ? </label>
                        <input class="form-control" id="profileRecherché" type="text" name="profileRecherché">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-sm-4" >
                        <button class="btn submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
