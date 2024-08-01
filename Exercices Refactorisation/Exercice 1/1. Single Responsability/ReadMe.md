# EXPLICATIONS

- Dans l'exemple ci-dessous, nous pouvons identifier que la classe **Sale** qui ne devrait
travailler avec les montants de vente, calcule également le solde du compte du client.
- C'est **MAUVAIS**, car le calcul du solde concerne le compte et sa comptabilité doit rester
dans la classe **Compte** ou dans un service chargé du calcul du solde. Comme mis en œuvre ci-dessous,
la classe aurait **deux raisons** de changer:
    
    1) Les règles de vente ont-elles changé ou non ?
    2) Il y a eu un changement dans le calcul du solde du compte.

Cela va à l'encontre du principe du **principe de responsabilité unique** qui stipule que:

## :warning: **Une classe ne doit avoir qu'une seule raison de changer.**


<details>
<summary><b style="color:orange">Hint Button</b></summary>

Pour respecter **le Principe de Responsabilité Unique**, tu pourrais déplacer les méthodes dans les bonnes classes. 

Ainsi chaque classe aurait une seule responsabilité : **Sale** gérerait la vente et **Account** gérerait le solde du compte.

</details>