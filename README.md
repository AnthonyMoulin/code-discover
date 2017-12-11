# Activit� type 2.1
Proposer une "single page application"

## PHP APP
Cette activit� a pour objectif de d�velopper une "single page application" en utilisant PHP.

* Concevoir une base de donn�es
   * Le sch�ma entit� association couvre les r�gles de gestion sur les donn�es
   * Le sch�ma respecte le formalisme du mod�le entit� association
   * Les r�gles de nommage sont conformes aux normes qualit� de l'entreprise
   * Le sch�ma physique de la base de donn�es est normalis�
   * La base de donn�es est optimis�e en termes de contrainte et d�indexation
* Mettre en place une base de donn�es
   * La base de donn�es est conforme au sch�ma physique
   * Les r�gles de nommage sont conformes aux normes qualit� de l'entreprise
   * L'int�grit� des donn�es est assur�e
   * La base de donn�es est op�rationnelle avec les droits d'acc�s pr�vus
   * La base de donn�es de test peut �tre restaur�e en cas d'incident
* D�velopper des composants dans le langage d�une base de donn�es
   * Les traitements relatifs aux manipulations des donn�es r�pondent aux fonctionnalit�s d�crites dans le dossier de sp�cifications
   * Les cas d'exception sont pris en compte
   * L'int�grit� des donn�es est maintenue
   * Les conflits d'acc�s aux donn�es sont g�r�s
* Utiliser l�anglais dans son activit� professionnelle en informatique
   * La documentation technique en anglais est comprise sans contre-sens
   * L�outil logiciel en anglais est utilis� de fa�on fiable et autonome
   * La communication �crite en anglais est r�dig�e de fa�on adapt�e � l�interlocuteur et sans faute nuisant � la fiabilit� de l��change
   * La communication technique orale en anglais est r�alis�e de fa�on simple sur des sujets professionnels, en face � face ou au t�l�phone

### Etude de cas
Interfacer une API. L'objectif est de proposer une single page APP. PHP est responsable d'extraire les informations concernant la "single page" ainsi que les sous pages de l'application pour proposer un affichage HTML pr�t � �tre exploit� en JavaScript.

#### Conception
En utilisant le diagramme d'entit�, de classe et de d�ploiement: concevoir la base de donn�es et le composant g�n�rant la "single page application".

#### L'APP
L'APP est un composite de plusieurs composants, le composite MVC doit �tre utilis� avec le pattern observer et les entiti�s doivent utiliser le pattern active record pattern. Son interface publique doit �tre testable avec le framework de test "phpunit". Une documentation doit �tre g�n�r�e avec "phpdoc".

#### Distribution
Une commande d'installation doit �tre propos�e pour pouvoir installer l'APP. La langue doit �tre l'anglais pour tous les documents utilis�s. L'APP peut �tre distribu� avec github ou packagist mais elle doit �tre en production.

### Inspiration
* [shields](https://shields.io/)
* [packagist](https://packagist.org/)

## Cas Pratique
Ce cas pratique est propos� dans le cadre de l'obtention du titre de Concepteur D�veloppeur Informatique. Le d�clencheur de ce cas est la 21�me heure de cours sur la th�matique PHP Base de donn�es
