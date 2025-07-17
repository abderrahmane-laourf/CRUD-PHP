<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Formulaire Utilisateur</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center min-h-screen p-6">
  <form method="POST" action="" class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-md">

    <h2 class="text-3xl font-extrabold mb-6 text-blue-800 text-center">Ajouter un utilisateur</h2>

    <label for="name" class="block text-gray-700 font-medium mb-2">Nom</label>
    <input type="text" id="name" name="name" placeholder="Entrez le nom"
           class="w-full mb-4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" />

    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
    <input type="email" id="email" name="email" placeholder="Entrez l'email"
           class="w-full mb-6 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" />

    <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 hover:shadow-lg transition">
      Soumettre
    </button>

    <a href="index.php"
       class="block mt-6 text-center text-blue-600 hover:underline hover:text-blue-800 transition">
      ← Retour à la page d'accueil
    </a>

  </form>
</body>
</html>
