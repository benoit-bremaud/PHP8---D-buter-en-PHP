-- Requete telle qu'elle apparait 
SELECT * FROM `users` WHERE `username` = '$username' AND `pass` = '$password';

-- Requete quand on remplace les variables par leurs valeurs respectives
SELECT * FROM `users` WHERE `username` = 'admin'; --' AND `pass` = '$password'

-- On voit que le fait d'écrire (admin'; --) à la place de ($username) les deux -- font passer le reste du texte de la requete en COMMENTAIRE
-- De ce fait, la requete devient :

SELECT * FROM `users` WHERE `username` = 'admin'; -- AND `pass` = '$password'

-- Du coup l'intégralité des informations de l'utilisateur 'admin' se voient affichées à l'écran !!