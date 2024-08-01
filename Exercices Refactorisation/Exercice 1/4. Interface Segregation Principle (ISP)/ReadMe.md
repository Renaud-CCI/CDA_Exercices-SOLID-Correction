### EXPLICATIONS


Nous possèdons une classe **Bicycle** qui malheureusement doit obligatoirement implémenter les méthodes **turnOn** et **fuel**, car l'interface **Vehicle** est trop générique.

Lorsque nous implémentons une interface, **toutes ses méthodes devraient être utiles pour la classe en question.**

Si une méthode inutile est implémentée
(ou vous implémentez la mauvaise interface,ou l'interface est trop générique) 

**Elles doivent être séparés, ou divisées en interfaces plus spécifiques.**

