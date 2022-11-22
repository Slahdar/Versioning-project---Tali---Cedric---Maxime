# Versioning-project---Tali---Cedric---Maxime

# Les commandes git

- git add \* (ou <filename>)
- git commit -m "<message>"
- git push
- git pull

## Gestion des fichiers

- git diff : voir les différentes modifications en cours
- git status : voir l'état des commit (en attente)
- git rm < filename > : supprime un fichier (effectif après le commit)
- git rm --cached < filename > : supprime les indexations d'un fichier
- git log : permet de visualiser l'historique des commits

## Gestion du git

- git rebase < branch > : va chercher l'ancêtre commun entre la branch spécifié et la HEAD et venir appliquer tous les commits de HEAD (à partir de ce point) à branch

## Les tags

- git git tag -a < tagname > -m "< message du tag >" : permet de créer un tag annoté
- git push origin < tagname > : push la modification du tag (--tags pour tous les push)
- git tag -d < tagname > ou git push origin --delete < tagname > (pour push directement et delete en même temps)

## Les branchs

- git branch : affiche liste des branchs ou en créer une si on lui ajoute un nom
- git checkout < branch > : changer de branch
- git checkout -b < branch > / git switch -c < branch >: créer une nouvelle branch et switch dessus
- git merge (utiliser sur la branch sur laquelle on souhaite ramener le merge)
- git branch -d (-D pour forcer delete) < branch > : supprime branch

## Infos du git

- git ls-remote : liste des références (distantes), une référence désigne des éléments du dépôt distant (branch, tag, évènements...)
- git log --oneline --decorate --graph --all
- git fetch < remote > (ou < remote > < branch >) : Fetche toutes les branches du dépôt. Télécharge également tous les commits et fichiers nécessaires depuis l'autre dépôt.

# Infos complémentaires

- Syntaxe de version : majeur.mineur.patch (ex 3.2.0)
