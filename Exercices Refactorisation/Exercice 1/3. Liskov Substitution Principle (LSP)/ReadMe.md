### EXPLICATIONS

Voici la classe GraphicEditor qui possède une methode **resize** afin de d'agrandir la forme qu'on lui envoi 

Si la méthode **resize** reçoit un **Rectangle**, elle le redimensionnera comme prévu, mais si elle reçoit un **Carré**, quels que soient les paramètres utilisés, le redimensionnement sera toujours pour un carré malgrè que l'on souhaite quadruplé sa largeur et doublé sa hauteur.

Ce **bug** se produit, car la classe dérivée **Square** ne respecte pas la règle de la classe de base **Rectangle** de faire varier
largeur et hauteur indépendamment. 

Autrement dit, la classe **Square** remplace en modifiant les methodes de la classe parent qui manipule les attributs **largeur** ​​et **hauteur**.

La violation du **Principe de Substitution de Liskov** se produit ici, car dans la méthode **resize** il n'est pas possible de remplacer un objet de la classe dérivée par un autre
sans enfreindre la règle, car l'affectation de largeur et de hauteur avait modifié la règle dans la classe **Carré**. 

**:warning: Le Carré est un Rectangle, mais pas tout les Rectangles sont des Carrés.**