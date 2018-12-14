@extends('equipement.template')

@section('contenu')
    <table class="table table-striped">
        <thead>
        <tr class="alert-success">
            <td>Catégorie</td>
            <td>Référence</td>
            <td>Taille</td>
            <td>Prix adulte</td>
            <td>Prix enfant</td>
        </tr>
        </thead>

        {{--<?php--}}

        {{--//Connexion bdd--}}

        {{--//Requete--}}
        {{--$resultat = $cnx->query("Select * from equipement, categorie");--}}
        {{--$resultat->setFetchMode(PDO::FETCH_OBJ);--}}

        {{--//Lecture premiere ligne--}}
        {{--$ligne = $resultat->fetch();--}}

        {{--//tant qu'il y a des ligne a lire--}}
        {{--while($ligne) { ?>--}}
            {{--<p><tr>--}}
            {{--<td><?php echo ($ligne->libelle); ?></td>--}}
            {{--<td><?php echo ($ligne->idInterne); ?></td>--}}
            {{--<td><?php echo ($ligne->idInterne); ?></td>--}}
            {{--<td><?php echo ($ligne->taille); ?></td>--}}
            {{--<td><?php echo ($ligne->prixAdulte); ?></td>--}}
            {{--<td><?php echo ($ligne->prixEnfant); ?></td>--}}
            {{--</tr></p>--}}
        {{--<?php--}}
        {{--//lecture ligne suivante--}}
        {{--$ligne = $resultat->fetch();--}}
        {{--}--}}
        {{--$resultat->closeCursor();--}}
        {{--?>--}}
    </table>
