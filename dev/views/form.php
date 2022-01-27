<section class="section">
    <div class="container">
        <div class="steps" id="stepsDemo">
        <div class="step-item is-active is-success">
            <div class="step-marker">1</div>
            <div class="step-details">
            <p class="step-title">Déclaration</p>
            </div>
        </div>
        <div class="step-item">
            <div class="step-marker">2</div>
            <div class="step-details">
            <p class="step-title">Ordre de réparation</p>
            </div>
        </div>
        <div class="step-item">
            <div class="step-marker">3</div>
            <div class="step-details">
            <p class="step-title">Notification de cession de créance</p>
            </div>
        </div>
        <div class="step-item">
            <div class="step-marker">4</div>
            <div class="step-details">
            <p class="step-title">Finish</p>
            </div>
        </div>
        <div class="steps-content">
            <div class="step-content has-text-centered is-active"> 

            <div class="box">

                <h2 class="is-size-3 has-text-left py-4">ASSURÉ(E)</h2>

                <div class="field">
                    <label class="label has-text-left">Nom/Prénom ou Société</label>
                    <div class="control">
                        <input class="input" name="nom" id="nom" type="text" placeholder="John DOE" autofocus data-validate="require">
                    </div>
                </div>

                <div class="field">
                    <label class="label has-text-left">Adresse</label>
                    <div class="control">
                        <input class="input" name="adresse" id="adresse" type="text" autofocus data-validate="require">
                    </div>
                </div>
            
            </div>


            <div class="box">

                <h2 class="is-size-3 has-text-left py-4">ASSURANCE</h2>

                <div class="field">
                    <label class="label has-text-left">Compagnie</label>
                    <div class="control">
                        <input class="input" name="compagnie" id="compagnie" type="text" autofocus data-validate="require">
                    </div>
                </div>

                <div class="field">
                    <label class="label has-text-left">Cabinet, Agence</label>
                    <div class="control">
                        <input class="input" name="cabinet-agence" id="cabinet-agence" type="text" autofocus data-validate="require">
                    </div>
                </div>

                <div class="field">
                    <label class="label has-text-left">N° de contrat ou de sociétaire</label>
                    <div class="control">
                        <input class="input" name="n-contrat" id="n-contrat" type="text" autofocus data-validate="require">
                    </div>
                </div>

                <div class="field">
                    <label class="label has-text-left">N° d'immatriculation</label>
                    <div class="control">
                        <input class="input" name="n-immat" id="n-immat" type="text" autofocus data-validate="require">
                    </div>
                </div>

                <div class="field">
                    <label class="label has-text-left">Marque du véhicule</label>
                    <div class="control">
                        <input class="input" name="marque" id="marque" type="text" autofocus data-validate="require">
                    </div>
                </div>

                <div class="field">
                    <label class="label has-text-left">Type</label>
                    <div class="control">
                        <input class="input" name="type" id="type" type="text" autofocus data-validate="require">
                    </div>
                </div>
            </div>

            <div class="box">

                <h2 class="is-size-3 has-text-left py-4">CIRCONSTANCE DU SINISTRE</h2>

                <div class="field">
                    <label class="label has-text-left">Lieu</label>
                    <div class="control">
                        <input class="input" name="lieu" id="lieu" type="text" autofocus data-validate="require">
                    </div>
                </div>

                <div class="field">
                    <label class="label has-text-left">Date</label>
                    <div class="control">
                        <input class="input" name="date" id="date" type="text" autofocus data-validate="require">
                    </div>
                </div>

                <div class="field">
                    <label class="label has-text-left">Circonstances</label>
                    <div class="control has-text-left">
                        <label class="checkbox pr-6">
                            <input type="radio" name="circonstances">
                            Projection de gravillons
                        </label>
                        <input type="radio" name="circonstances" value=""> Autres, à préciser <input type="text" name="autres_circonstances" />
                    </div>
                </div>
            </div>

            <div class="box">

                <h2 class="is-size-3 has-text-left py-4">DÉGATS APPARENTS</h2>

                <div class="columns">
                    <div class="column is-2">
                        <div class="field has-text-left">
                            <label class="checkbox">
                            Pare-brise
                            </label>
                            <input type="checkbox">
                        </div>
                    </div>
                    <div class="column">
                        <div class="field has-text-left">
                            <label class="radio pr-3">
                            Verre teinté
                            </label>
                            OUI <input type="radio" name="verre-teinte" class="mr-4">
                            NON <input type="radio" name="verre-teinte">
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column is-2">
                        <div class="field has-text-left">
                            <label class="checkbox">
                            Glace latérale
                            </label>
                            <input type="checkbox">
                        </div>
                    </div>
                    <div class="column">
                        <div class="field has-text-left">
                            <label class="radio pr-3">
                            Verre teinté
                            </label>
                            OUI <input type="radio" name="glace-laterale" class="mr-4">
                            NON <input type="radio" name="glace-laterale">
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column is-2">
                        <div class="field has-text-left">
                            <label class="checkbox">
                            Lunette arrière
                            </label>
                            <input type="checkbox">
                        </div>
                    </div>
                    <div class="column">
                        <div class="field has-text-left">
                            <label class="radio pr-3">
                            Verre teinté
                            </label>
                            OUI <input type="radio" name="lunette-arriere" class="mr-4">
                            NON <input type="radio" name="lunette-arriere">
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column is-2">
                        <div class="field has-text-left">
                            <label class="checkbox">
                            Optique avant
                            </label>
                            <input type="checkbox">
                        </div>
                    </div>
                    <div class="column">
                        <div class="field has-text-left">
                            <label class="radio pr-3">
                            Verre teinté
                            </label>
                            OUI <input type="radio" name="optique-avant" class="mr-4">
                            NON <input type="radio" name="optique-avant">
                        </div>
                    </div>
                </div>
            </div>

            <div class="field-group has-text-left">
                <div class="field is-inline-block">
                    <label class="label has-text-left">Fait à</label>
                    <div class="control">
                        <input class="input" name="fait-a" id="fait-a" type="text" autofocus data-validate="require">
                    </div>
                </div>

                <div class="field is-inline-block">
                    <label class="label has-text-left">Le</label>
                    <div class="control">
                        <input class="input" name="date-le" id="date-le" type="text" autofocus data-validate="require">
                    </div>
                </div>
            </div>

                <div class="has-text-left">
                
                    <label class="" for="">Signature:</label>
                    <br/>
                    <div id="signature" ></div>
                    <br/>
                    <button id="clear">Reset</button>
                    <textarea id="sigpad" name="signature_image" style="display: none"></textarea>
                </div>
            </div>
            <div class="step-content has-text-centered">

                <div class="box">

                    <h2 class="is-size-3 has-text-left py-4">Chapitre I - Cession de créance</h2>
                    
                    <h3 class="is-size-5 has-text-left py-4 has-text-weight-bold">Entre :</h3>
                    <img src="/assets/img/cachet.png" alt="">

                    <h3 class="is-size-5 has-text-left py-4 has-text-weight-bold">Et :</h3>

                    <div class="field">
                        <label class="label has-text-left">Nom/Prénom ou Société</label>
                        <div class="control">
                            <input class="input" name="nom" id="nom" type="text" placeholder="John DOE" autofocus data-validate="require">
                        </div>
                    </div>
                    <p class="has-text-left">Dûment habilité à la signature de cette convention</p>
                    <div class="field pt-4">
                        <label class="label has-text-left">Adresse</label>
                        <div class="control">
                            <input class="input" name="adresse" id="adresse" type="text" autofocus data-validate="require">
                        </div>
                    </div>
                    <p class="has-text-left">Se déclare expressément habilité(é) à réparer le véhicule et souscripteur d'un contrat d'assurance et bénéficiare de la garantie.</p>
                    
                    <h3 class="is-size-5 has-text-left py-4 has-text-weight-bold">Véhicule à réparer :</h3>
                    <div class="field">
                        <label class="label has-text-left">Marque du véhicule</label>
                        <div class="control">
                            <input class="input" name="marque" id="marque" type="text" autofocus data-validate="require">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label has-text-left">Type</label>
                        <div class="control">
                            <input class="input" name="type" id="type" type="text" autofocus data-validate="require">
                        </div>
                    </div>
                    
                    <div class="field">
                        <label class="label has-text-left">N° d'immatriculation</label>
                        <div class="control">
                            <input class="input" name="n-immat" id="n-immat" type="text" autofocus data-validate="require">
                        </div>
                    </div>

                </div>
            </div>
            <div class="step-content has-text-centered">
                <div class="box">
                    <h2 class="is-size-3 has-text-left py-4">Chapitre II - Notification de cession de créance</h2>

                    <div class="field">
                        <label class="label has-text-left">Nom/Prénom ou Société</label>
                        <div class="control">
                            <input class="input" name="nom" id="nom" type="text" placeholder="John DOE" autofocus data-validate="require">
                        </div>
                    </div>
                    <div class="field pt-4">
                        <label class="label has-text-left">Adresse</label>
                        <div class="control">
                            <input class="input" name="adresse" id="adresse" type="text" autofocus data-validate="require">
                        </div>
                    </div>

                    <h3 class="is-size-5 has-text-left py-4 has-text-weight-bold">Déclare à (société d'assurance) :</h3>

                    <img src="/assets/img/cachet.png" alt="">
                    
                    <div class="field">
                        <label class="label has-text-left">Références sinistre (ou du bris de glace)</label>
                        <div class="control">
                            <input class="input" name="reference-sinistre" id="reference-sinistre" type="text" autofocus data-validate="require">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label has-text-left">Date du bris de glace</label>
                        <div class="control">
                            <input class="input" name="date" id="date" type="text" autofocus data-validate="require">
                        </div>
                    </div>
                    
                    <div class="field">
                        <label class="label has-text-left">Contrat n°</label>
                        <div class="control">
                            <input class="input" name="n-contrat" id="n-contrat" type="text" autofocus data-validate="require">
                        </div>
                    </div>

                    <h3 class="is-size-5 has-text-left py-4 has-text-weight-bold">Véhicule assuré</h3>

                    <div class="field">
                        <label class="label has-text-left">Marque du véhicule</label>
                        <div class="control">
                            <input class="input" name="marque" id="marque" type="text" autofocus data-validate="require">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label has-text-left">Type</label>
                        <div class="control">
                            <input class="input" name="type" id="type" type="text" autofocus data-validate="require">
                        </div>
                    </div>
                    
                    <div class="field">
                        <label class="label has-text-left">N° d'immatriculation</label>
                        <div class="control">
                            <input class="input" name="n-immat" id="n-immat" type="text" autofocus data-validate="require">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label has-text-left">Année de mise en circulation</label>
                        <div class="control">
                            <input class="input" name="annee-circulation" id="annee-circulation" type="text" autofocus data-validate="require">
                        </div>
                    </div>
                    <p class="has-text-left">Avoir cédé ce jour au réparateur ci-dessous désigné en vertu de l'accord de réparation dont la copie est annexée à la présente</p>
                    <img src="/assets/img/cachet.png" alt="">
                    <p class="has-text-left">L'ensemble de ses droits, actions et accessoires résultants de son contrat d'assurances quant à la prise en charge des dommages causés à son vehicule et de procéder à son règlement direct conformément au montant de la facture ci-jointe.</p>
                    <p>Cette cession est notifiée par lettre recommandée avec accusé de réception conformément aux dispositions de l'article 1324 du Code civil.</p>
                    

                </div>
            </div>
            <div class="step-content has-text-centered">
            <h1 class="title is-4">Your account is now created!</h1>
            </div>
        </div>
        <div class="steps-actions">
            <div class="steps-action">
            <a href="#" data-nav="previous" class="button is-light">Précédent</a>
            </div>
            <div class="steps-action">
            <a href="#" data-nav="next" class="button is-light">Suivant</a>
            </div>
        </div>
        </div>
    </div>
</section>

<script type="text/javascript">

bulmaSteps.attach();

var signature = $('#signature').signature({syncField: '#sigpad', syncFormat: 'PNG'});
$('#clear').click(function(e) {
    e.preventDefault();
    signature.signature('clear');
    $("#sigpad").val('');
});

$("#Submit").click(function(){
    url = "/app/scripts/signature.php";
    sigpad= $("#sigpad").val();
    $('#res').html('loading....');
    $.ajax({
        type : 'POST',
        url : url,
        data : {signature_image: sigpad},
        success: function(result){
            $('#res').html('Signature Uploaded successfully');
        },
    });
});

function take_snapshot() {
    Webcam.snap( function(data_uri) {
        $(".image-tag").val(data_uri);
        document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
    } );
}

</script>