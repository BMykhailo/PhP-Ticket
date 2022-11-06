# Guichet du cinéma et théatre
Le but de cet exercice est de créer un générateur de ticket d'entrée en PHP pour un cinéma. Cette solution sera utilisée par au guichet lors de l'achat des places par un client, afin de pouvoir générer le ticket sur une page web qu'il pourra ensuite imprimer.

Pour chaque type de billet, vous allez créer une page index présentant un formulaire envoyant les données avec le verbe POST sur l'action /ticket & /ticket.php

Donc dans nos deux cas : 
 - index-cinema.php qui appel ticket-cinema.php
 - index-theatre.php qui appel ticket-theatre.php

 
Le formulaire index-theatre devra permettre de saisir les informations suivantes:
  - La date
  - La place choisie
  - Le tarif (enfant, adulte)
  - La pièce choisie

le ticket-theatre devra donc afficher ces information ainsi que : 
  - Un ID du ticket (générer aléatoirement)
  - L'heure de début
  - L'heure de l'entracte
 
Pour le formulaire index-cinema devra permettre de saisir les informations suivantes:
    - La date (date)
    - La place (text)
    - Tarif
    - Film (select avec liste de film Halloween)
    - L'age de la personne
    - L'heure

le ticket-cinéma devra donc afficher ces information ainsi que : 
    - Un ID du ticket (générer aléatoirement)
    - Salle liée aux film
    - L'age requis est correct ()

 Lors de la réception des informations, vous devrez créer un objet ticket à partir d'une classe ticket. Pour cela, créez une class mère Ticket et deux class filles TicketCinema et TicketTheatre. Vous pouvez utiliser un ou plusieurs   fichiers pour y écrire vos classes. En respectant les contraites suivantes:

- Contenir toutes les propriétés nécessaires pour stocker les informations d'un ticket  provenant du formulaire ainsi qu'un numéro unique
- Dans le constructeur, créer la valeur de la propriété numéro unqiue à partir de la date sous la forme: mois - annee - 2 chiffre aléatoire 
- Idéalement, les propriétés devront être protected, vous devrez créer des getter et des setter (ou utiliser les méthodes magiques __get et __set)
- Contenir une méthode permettant d'afficher le ticket avec toutes ses informations en HTML
 

Dans le fichier ticket.php, récupérez les données envoyées par le formulaire et utilisez les pour créer un nouvel objet TicketCinema ou Ticket Theatre. Affichez ensuite le ticket sur la page. N'oubliez pas d'ajouter un peu de CSS pour améliorer le design.