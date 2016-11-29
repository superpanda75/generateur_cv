
<ul class="nav nav-tabs">
    <li role="presentation"><a href="javascript:void(0)" onclick="openTab('p_info')" aria-controls="p_info" role="tab" data-toggle="tab">Mes informations</a></li>
    <li role="presentation"><a href="javascript:void(0)" onclick="openTab('competences')" aria-controls="competences" role="tab" data-toggle="tab">Mes competences</a></li>
    <li role="presentation"><a href="javascript:void(0)" onclick="openTab('formations')" aria-controls="formations" role="tab" data-toggle="tab">Mes formations</a></li>
    <li role="presentation"><a href="javascript:void(0)" onclick="openTab('experiences')" aria-controls="experiences" role="tab" data-toggle="tab">Mes experiences</a></li>
</ul>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="p_info">

        <div class="row">
            <div class="col-md-3"></div> <!--permet de centrer le formulaire au milieu-->
            <div class="col-md-6">
                <form>
                    <h2>Mes infos personnelles</h2><br/>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="votre nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" placeholder="votre prénom">
                    </div>
                    <div class="form-group">
                        <label for="age">votre âge</label>
                        <input class="form-control" type="number" placeholder="42" id="age">
                    </div>
                    <br/>
                    <hr/>
                    <br/>

                    <h2>Coordonnées</h2><br/>
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" placeholder="jane.doe@example.com" id="email">
                        </div>
                        <div class="form-group">
                            <label for="telephone">Telephone</label>
                            <input class="form-control" type="tel" placeholder="06 xx xx xx xx" id="telephone">
                        </div>
                    </form>

                    <div class="form-group row">
                        <label for="adresse" class="col-xs-2 col-form-label">Adresse</label>
                        <div class="col-xs-10">
                            <input class="form-control" type="text" placeholder="20, rue de la Horde" id="adresse">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ville" class="col-xs-2 col-form-label">Ville</label>
                        <div class="col-xs-10">
                            <input class="form-control" type="text" placeholder="Orgrimmar" id="ville">
                        </div>
                    </div>

                    <form class="form-inline">

                        <div class="form-group formulaire">
                            <label for="cp">Code Postal</label>
                            <input class="form-control" type="number" placeholder="75001" id="cp">
                        </div>
                        <div class="form-group formulaire">
                            <label for="n_rue">n° rue</label>
                            <input class="form-control" type="number" placeholder="42" id="n_rue">
                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>



    <div role="tabpanel" class="tab-pane" id="competences">
        <div class="row">
            <div class="col-md-3"></div> <!--permet de centrer le formulaire au milieu-->
            <div class="col-md-6">
                <form>
                    <h2>Mes compétences</h2><br/>
                    <div class="form-group">
                        <label for="exampleInputName2">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="votre nom">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName2">Prénom</label>
                        <input type="text" class="form-control" id="prenom" placeholder="votre prénom">
                    </div>
                    <br/>
                </form>
            </div>
        </div>
    </div>



    <div role="tabpanel" class="tab-pane" id="formations">
        <div class="row">
            <div class="col-md-3"></div> <!--permet de centrer le formulaire au milieu-->
            <div class="col-md-6">
                <form>
                    <h2>Mes infos personnelles</h2><br/>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="votre nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" placeholder="votre prénom">
                    </div>
                    <div class="form-group">
                        <label for="age">votre âge</label>
                        <input class="form-control" type="number" placeholder="42" id="age">
                    </div>
                </form>
            </div>
        </div>
    </div>



<div role="tabpanel" class="tab-pane" id="experiences">
    <div class="row">
        <div class="col-md-3"></div> <!--permet de centrer le formulaire au milieu-->
        <div class="col-md-6">
            <form>
                <h2>Mes infos personnelles</h2><br/>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="votre nom">
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" id="prenom" placeholder="votre prénom">
                </div>
            </form>
        </div>
    </div>
    </div>


</div>