# Projet Site CV

## Installation
  
Cloner le dépôt Git  

```git clone https://github.com/jonimofo/projet_site_cv.git```  
  
Lancer l'installation du projet
  
```make install```
  
Si votre utilisateur APACHE par défaut n'est pas 'www-data'
  
```make install APACHE_USER=http```
    
Lancer le serveur : 
  
```make server```


## Fonctionnement
Les utilisateurs sont déjà inscrits sur le site 
  
  ``` user: benjamin   mdp: pass   role: SUPER_ADMIN```  
  
  ```user: bertrand   mdp: pass   role: USER```  
  
  ```user:manon   mdp: pass   role:USER```
  
  Les utilisateurs peuvent poster des commentaires sur le blog (s'ils sont identifiés)
  
  
  
L'admin peut, via le panel d'administration (bouton Espace Admin)
 - créer, modifier, supprimer un utilisateur
 - créer, modifier, supprimer un article, une compétence, une image, un commentaire, etc... 
 - modérer les commentaires en attente de validation


## TO DO

Il me reste encore des choses à faire/implémenter dans le futur :
 - ajouter module d'inscription au site (ici les users sont déjà créés par le SUPER_ADMIN)
 - permettre aux utilisateurs d'uploader une photo de profil
 - ajouter de vraies réalisations (même si vu que je suis orienté Systèmes et Réseaux c'est un peu plus compliqué)
