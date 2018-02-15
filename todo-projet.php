<?php
    session_start();
    require_once 'header.php';
    if(is_connected()== false){
        session_destroy();
        redirect('connect.php');
    }

    ?>

<div class="ui container">
<h1>Le projet GeoWorld</h1>
    <div class="ui one column grid">
        <div class="column">
            <div class="ui raised segment">
                <a class="ui red ribbon label">Présentation</a>
                <p>L'application est destinée à des professeurs d'histoire et de géographie.</p>
                <p>Elle doit permettre aux professeurs, comme aux élèves, de consulter des données géopolitiques et
                    économiques de la planète. Ces données ont été communiquées par l'institut Official Statistics of
                    Finland (2006).
                </p>
                <p>Étant donné l'âge de ces données, il faudra mettre en place un (ou plusieurs) moyen(s) de les mettre
                    à jour.</p>
                <p>Les acteurs et leurs intérêts :</p>
                <ul>
                    <li><b>Enseignant</b> : souhaite sensibiliser ses élèves à des données géoplitiques et économiques
                        de la
                        planète
                    </li>
                    <li><b>Elève</b> : aimerait disposer d'un outil qui réponde à ses interrogations ainsi que prendre
                        plaisir à consulter les
                        informations présentées
                    </li>
                    <li><b>Administrateur</b> : disposer d'une interface d'administration de l'application (gestion des
                        utilisateurs, leurs droits)
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui two column grid">
        <div class="column">
            <div class="ui raised segment">
                <a class="ui blue ribbon label">Diag. Cas d'Utilisation</a>
                <img class="ui image" src="images/useCaseWorld.png" aria-label="Diag. Use Case">
                <p></p>

            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <a class="ui teal right ribbon label">Schéma Relationnel</a>
                <img class="ui image" src="images/worldSR.png">
                <p></p>
                <p>Télécharger ici : <a href="doc/world-database.zip">Schéma de la base de données + data</a></p>
            </div>
        </div>
    </div>

    <div class="ui two column grid">
        <div class="column">
            <div class="ui raised segment">
                <a class="ui blue ribbon label">Objectifs généraux de réalisation</a>
                <ul>
                    <li>Proposer une interface de consultation agréable, ergonomique (vue des données par continents,
                        pays, capitales, langues parlées, et autres idées...)
                    </li>
                    <li>Permettre à des collaborateurs de mettre à jour des données</li>
                    <li>Un proposition pour les plus avancés:
                        <p>Permettre à l'enseignant de mettre au point des requêtes d'interrogation
                            personnalisées (SQL SELECT)</li>
                    </p>
                    <ol>
                        <li>Les requêtes pourront être sauvegardées et nommées</li>
                        <li>Les requêtes pourront avoir une portée publique ou privée</li>
                    </ol>
                    </li>
                </ul>
            </div>
        </div>
        <div class="column">
            <div class="ui raised segment">
                <a class="ui red right ribbon label">Premiers travaux imposés</a>
                <ol>
                    <li>Télécharger les scripts SQL de la base de données de démarrage (format mysql)</li>
                    <li>Créer une base de données, et initialiser cette dernière à l'aide des 2 scripts en question</li>
                    <li>Adapter le script <code>connect-db.php</code> en conséquence</li>
                    <li>Poursuivre la programmation de <code>index.php</code> afin de présenter à l'utilisateur la liste
                        des pays
                        du continent asiatique.
                    </li>
                    <li>Ajouter une entrée dans la barre de menu afin de permettre à l'utilisateur de sélectionner un continent (et d'en afficher les pays).
                        Pour cela, vous utiliserez un menu <b><code>Dropdown</code></b>, après avoir consulté
                        ses spécifications ici : <a href="https://semantic-ui.com/modules/dropdown.html">https://semantic-ui.com/modules/dropdown.html</a> </li>
                </ol>
                <p>À l'issue de ce travail, vous serez prêt à vous engager plus en avant dans ce projet.</p>
                <p>N'hésitez pas à explorer <a href="https://semantic-ui.com/introduction/getting-started.html">https://semantic-ui.com/</a>, vous y découvrirez
                    les <b><code>Elements</code></b>, <b><code>Collections</code></b>, <b><code>Views</code></b> et <b><code>Modules</code></b> prêts à l'emploi, et en démonstration.</p>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
