# Activité type 2.1
Proposer une "single page application"

## PHP APP
Cette activité a pour objectif de développer une "single page application" en utilisant PHP.

* Concevoir une base de données
   * Le schéma entité association couvre les règles de gestion sur les données
   * Le schéma respecte le formalisme du modèle entité association
   * Les règles de nommage sont conformes aux normes qualité de l'entreprise
   * Le schéma physique de la base de données est normalisé
   * La base de données est optimisée en termes de contrainte et d’indexation
* Mettre en place une base de données
   * La base de données est conforme au schéma physique
   * Les règles de nommage sont conformes aux normes qualité de l'entreprise
   * L'intégrité des données est assurée
   * La base de données est opérationnelle avec les droits d'accès prévus
   * La base de données de test peut être restaurée en cas d'incident
* Développer des composants dans le langage d’une base de données
   * Les traitements relatifs aux manipulations des données répondent aux fonctionnalités décrites dans le dossier de spécifications
   * Les cas d'exception sont pris en compte
   * L'intégrité des données est maintenue
   * Les conflits d'accès aux données sont gérés
* Utiliser l’anglais dans son activité professionnelle en informatique
   * La documentation technique en anglais est comprise sans contre-sens
   * L’outil logiciel en anglais est utilisé de façon fiable et autonome
   * La communication écrite en anglais est rédigée de façon adaptée à l’interlocuteur et sans faute nuisant à la fiabilité de l’échange
   * La communication technique orale en anglais est réalisée de façon simple sur des sujets professionnels, en face à face ou au téléphone

### Etude de cas
Interfacer une API. L'objectif est de proposer une single page APP. PHP est responsable d'extraire les informations concernant la "single page" ainsi que les sous pages de l'application pour proposer un affichage HTML prêt à être exploité en JavaScript.

#### Conception
En utilisant le diagramme d'entité, de classe et de déploiement: concevoir la base de données et le composant générant la "single page application".

#### L'APP
L'APP est un composite de plusieurs composants, le composite MVC doit être utilisé avec le pattern observer et les entitiés doivent utiliser le pattern active record pattern. Son interface publique doit être testable avec le framework de test "phpunit". Une documentation doit être générée avec "phpdoc".

#### Distribution
Une commande d'installation doit être proposée pour pouvoir installer l'APP. La langue doit être l'anglais pour tous les documents utilisés. L'APP peut être distribué avec github ou packagist mais elle doit être en production.

### Inspiration
* [shields](https://shields.io/)
* [packagist](https://packagist.org/)

## Cas Pratique
Ce cas pratique est proposé dans le cadre de l'obtention du titre de Concepteur Développeur Informatique. Le déclencheur de ce cas est la 21ème heure de cours sur la thématique PHP Base de données
