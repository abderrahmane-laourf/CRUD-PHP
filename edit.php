<?php
    include('db.php');

    // 1 => check id on url 
    $id = $_GET["id"];
    if(!$id){
        die("❌ ID non spécifié.");
    }

    // recupiration des donnee
    $stmt = $pdo -> prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute([':id'=>$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$user){
        die("errue probleme de recupurer l utilisateure");
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $nom = $_POST["name"] ?? '';
      $email = $_POST["email"] ?? '';


        $stmt = $pdo -> prepare("UPDATE users SET nom = :nom,email = :email WHERE id = :id");
    $stmt->execute([':nom'=>$nom,
    ':email'=>$email,
    ':id' =>$id
    ]);
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modifier Utilisateur</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-6">
  <form method="POST" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Modifier un utilisateur</h2>

    <label for="name" class="block text-gray-700 font-semibold mb-2">Nom</label>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($user["nom"]) ?>"
           class="w-full mb-4 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />

    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($user["email"]) ?>"
           class="w-full mb-6 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />

    <button type="submit"
            class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-yellow-600 transition">
      Enregistrer les modifications
    </button>

    <a href="index.php" class="block text-center mt-4 text-blue-600 hover:underline">⬅ Retour à la liste</a>
  </form>
</body>
</html>

