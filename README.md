# Projet
Projet - Environnement de développement II

https://www.projetenviro.epizy.com/index.html

Page web fonctionnelle et sécuritaire avec protection de mot de passe et reliée à ue base de données.

La page web prend des rendez-vous qu'elle envoie dans une base de données. Pour ce faire l'usager doit se connecter. Le mot de passe est par la suite haché et salé et contient plus de 15 caractères. Toutes les informations transmises via les inputs passent par mysqli_real_escape_string pour éviter les injections sql.

La page est sécurisée avec un certificat SSL.

Il y a un message d'erreur retourné pour toutes les entrées si elles ne satisfont pas aux critères. Ces messages sont globaux et non spécifiques.


Genevieve Mainville 2021-10-22
Projet terminé.
