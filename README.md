# Versioning-project---Tali---Cedric---Maxime

Premier projet du cours de versioning en SSH

- Organiser les branchs (et présenter cette organisation dans le readme)
- Définir le projet (et répartir les tâches)
- Définir le format des commit (dans le readme)
  - gitflow
  - Dire pourquoi le système choisis est adapté

# Les commandes git

- git log --oneline --decorate --graph --all
- git add \* (ou <filename>)
- git commit -m "<message>"
- git push
- git pull

## Gestion des fichiers

- git diff : voir les différentes modifications en cours
- git status : voir l'état des commit (en attente)
- git rm <filename> : supprime un fichier (effectif après le commit)
- git rm --cached "<filename>" : supprime les indexations d'un fichier
- git log : permet de visualiser l'historique des commits

## Les tags

- git git tag -a <tagname> -m "<message du tag>" : permet de créer un tag annoté
- git push origin <tagname> : push la modification du tag (--tags pour tous les push)
- git tag -d <tagname> ou git push origin --delete <tagname> (pour push directement et delete en même temps)

## Les branchs

- git branch : affiche liste des branchs ou en créer une si on lui ajoute un nom
- git checkout <branch> : changer de branch
- git checkout -b <branch> / git switch -c <branch>: créer une nouvelle branch et switch dessus
- git merge (utiliser sur la branch sur laquelle on souhaite ramener le merge)

# Infos complémentaires

- Syntaxe de version : majeur.mineur.patch (ex 3.2.0)
