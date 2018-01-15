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
  
  ``` user: benjamin mdp: pass role:SUPER_ADMIN```  
  
  ```user:bertrand mdp: pass role:USER```  
  
  ```user:manon mdp: pass role:USER```
  
  Les utilisateurs peuvent poster des commentaires sur le blog (s'ils sont identifiés)
  
  
  
L'admin peut, via le panel d'administration (bouton Espace Admin)
 - créer, modifier, supprimer un utilisateur
 - créer, modifier, supprimer un article, une compétence, une image, un commentaire, etc... 



## TO DO
