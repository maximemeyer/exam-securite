Lancer wampServer

Récupérer les fichiers du github.

2 partie :

  Faille XSS : premier lien avec faille XSS, deuxième lien sans la faille. Rentrer "<script>alert()</script>" dans un champs l'alerte se déclenche.
  Faille injection SQL : Entrer 1=1" or true; -- dans le champs mot de passe, retourne "Hello 'pseudo'" quand la connexion fonctionne sinon retourne "Accès refusé"
