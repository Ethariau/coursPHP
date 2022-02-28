<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Notre premier cours de PHP">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="icon" href="./assets/img/icone/icon.png">
  <script src="./assets/js/app.js" defer></script>
  <title>Cours PHP</title>
</head>

<body>
  <div class="boxShadow"></div>
  <h1>Cours PHP</h1>

  <section class="partieCours">
    <h2>Cours</h2>
    <div class="flexCours">
      <article>
        <h3>fonction Echo</h3>
        <p>
          <?php

          echo "echo affiche l'objet html qui le suit <br> Exemple : <strong>echo 'bonjour'</strong> affiche bonjour";
          // affiche le texte dans une balise p
          ?>
        </p>
      </article>
      <article>
        <h3>concaténation</h3>
        <p>
          on utilise "." pour concaténer deux portion de texte
          <?php
          $message = "bonjour" . "" . "Adrien";
          echo $message
          ?>
        </p>
      </article>
      <article>
        <h3>Opérateur arithmétique</h3>
        <img src="./assets/img/opérateurArithmetique.png" alt="">
      </article>
      <article>
        <h3>Opérateur affectations/combinés</h3>
        <img src="./assets/img/opérateurAffectation.png" alt="">
      </article>
      <article>
        <h3>Opérateur Structure de controle</h3>
        <img src="./assets/img/structureDeControle.png" alt="">
      </article>
      <article>
        <h3>Fonction var_dump</h3>
        <p>permet de sortir des information concernant la variable concerné <br> Exemple : var_dump $x</p>
      </article>
      <article>
        <h3>Opérateur Logique</h3>
        <img src="./assets/img/operateurLogique.png" alt="">
      </article>
    </div>
    <a href="./assets/docs/phpVariable.pdf" target="blank"><button>cours sur les variables (pdf)</button></a>
    <a href="./assets/docs/phpStructureDeControle.pdf" target="blank"><button>cours sur les structures (pdf)</button></a>
  </section>


  <h2>Exercice</h2>
  <!-- <section class="exercice">
    <h3>Exercice 1</h3>
    <p>
      <?php
      $nom = "Bonjour, je suis Clément Plaize de Beaupuy";
      $age = "j'ai 25 ans.";
      $presentation = $nom . " et " . $age;
      echo $presentation;
      ?>
    </p>
  </section>
  <section class="exercice">
    <h3>Exercice 4</h3>
    <p>
      <?php
      $x = 2;
      $y = 3;
      $z = 4;
      echo '$x stocke ' . $x . ', $y stocke ' . $y . ', $z stocke ' . $z . '<br>';
      $a = $x + 1;
      $b = $x + $y;
      $c = $x - $y;
      echo '$a stocke ' . $a . ', $c stocke ' . $b . ', $c stocke ' . $c . '<br>';
      $x = $x * $y;
      echo '$x stocke désormais : ' . $x . '<br>';
      $z = $x / $y;
      echo '$z stocke désormais : ' . $z . '<br>';
      $m = 5 % 3;
      echo '$le reste de la division euclidienne de 5 par 3 est : ' . $m . '<br>';
      $p = $z ** 4;
      echo 'la variable $p stocke le résultat de $z puissance 4 : ' . $p;
      ?>
    </p>
  </section> -->

  <section class="exercice">
    <div class="gridExercice">
      <article>
        <h3>Exercice 1</h3>
        <p>
          Parmi les variables suivantes, lesquelles ont un nom valide : $a, $_a, $a_a, $AAA, $a!, $1a et
          $a1 ?
        </p>
        <button class="repButton">Voir la réponse</button>
        <p class="reponse">
          $a, $_a, $a_a, $a1
        </p>
      </article>
      <article>
        <h3>Exercice 2</h3>
        <p>
          Modifier le code ci-dessous pour calculer la moyenne des notes.
          PHP <br>
          "php $note_maths = 15; <br>
          $note_francais = 12; <br>
          $note_histoire_geo = 9; <br>
          $moyenne = 0; <br>
          echo 'La moyenne est de ' . $moyenne . ' / 20.';"
        </p>
        <button class="repButton">Voir la réponse</button>
        <p class="reponse">
          <?php $note_maths = 15;
          $note_francais = 12;
          $note_histoire_geo = 9;
          $moyenne = $note_maths + $note_francais + $note_histoire_geo;
          $moyenne = $moyenne / 3;
          echo 'La moyenne est de ' . $moyenne . ' / 20.'; ?>
        </p>
      </article>
      <article>
        <h3>Exercice 3</h3>
        <p>
          Calculer le prix TTC du produit.
          PHP <br>
          $prix_ht = 50; <br>
          $tva = 20; <br>
          $prix_ttc = 0; <br>
          echo 'Le prix TTC du produit est de ' . $prix_ttc . ' €.'; ?>
        </p>
        <button class="repButton">Voir la réponse</button>
        <p class="reponse">
          <?php $prix_ht = 50;
          $tva = 20;
          $prix_ttc = $prix_ht + $tva * $prix_ht / 100;
          echo 'Le prix TTC du produit est de ' . $prix_ttc . ' €.'; ?>

        </p>
      </article>
      <article>
        <h3>Exercice 4</h3>
        <p>
          Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction
          var_dump(), faire en sorte que le type de la variable $test soit string et que la valeur
          soit bien de 42.
        </p>
        <button class="repButton">Voir la réponse</button>
        <p class="reponse">
          <?php
          $test = "42";
          var_dump($test)
          ?>
        </p>
      </article>
      <article>
        <h3>Exercice 5</h3>
        <p>
          Déclarer une variable $budget qui contient la somme de 1 553,89 €. Déclarer une
          variable $achats qui contient la somme de 1 554,76 €. Afficher si le budget permet
          de payer les achats.
        </p>
        <button class="repButton">Voir la réponse</button>
        <p class="reponse">
          <?php
          $budget = 1553.89;
          $achats = 1554.76;
          if ($achats <= $budget) {
            echo "le budget suffit";
          } else {
            echo "le budget ne suffit pas";
          }
          ?>
        </p>
      </article>
      <article>
        <h3>Exercice 6</h3>
        <p>
          Déclarer une variable $age qui contient la valeur de type integer de votre choix.
          Réaliser une condition pour afficher si la personne est mineure ou majeure.
        </p>
        <button class="repButton">Voir la réponse</button>
        <p class="reponse">
          <?php
          $age = 16;
          if ($age >= 18) {
            echo "vous êtes majeur";
          } else {
            echo "vous êtes mineur";
          }
          ?>
        </p>
      </article>
      <article>
        <h3>Exercice 7</h3>
        <p>
          Déclarer une variable $heure qui contient la valeur de type integer de votre choix
          comprise entre 0 et 24. Créer une condition qui affiche un message si l'heure est le
          matin, l'après-midi ou la nuit
        </p>
        <button class="repButton">Voir la réponse</button>
        <p class="reponse">
          <?php
          $heure = 9;
          echo $heure . "h -> ";
          if ($heure <= 6 or $heure > 19) {
            echo "nuit";
          } else if ($heure > 6 and $heure <= 12) {
            echo "matin";
          } else if ($heure > 12 and $heure <= 19) {
            echo "après-midi";
          }
          ?>
        </p>
      </article>
      <article>
        <h3>Exercice 8</h3>
        <p>
          Soit deux variables (inscrit et age) : <br>
          - si inscrit et 18 ans ou plus : "majeur" <br>
          - si inscrit et mineur : "restreint" <br>
          - si pas inscrit : "interdit" <br>
        </p>
        <button class="repButton">Voir la réponse</button>
        <p class="reponse">
          <?php
          $inscrit = true;
          $age = 18;
          if ($inscrit === true) {
            if ($age >= 18) {
              echo "accès autorisé <br>";
            }else{
              echo "identifié mais mineur, accès restreint <br>";
            }
          }else{
            echo "accès interdit <br>";
          }
          echo $inscrit = true ? ($age >=18 ? 'accès autorisé': 'accès restreint') : 'accès interdit';
          ?>
        </p>
      </article>
    </div>
  </section>

</body>

</html>