<?php
  include("db.php");

  $stmt = $pdo->query("SELECT * FROM users ORDER BY id ");
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Liste des utilisateurs</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
  <h1 class="text-3xl font-bold mb-6">Liste des utilisateurs</h1>
  
  <a href="ajouter.php" class="mb-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">+ Ajouter un utilisateur</a>

  <table class="min-w-full bg-white rounded shadow overflow-hidden">
    <thead class="bg-blue-600 text-white">
      <tr>
        <th class="py-3 px-6 text-left">ID</th>
        <th class="py-3 px-6 text-left">Nom</th>
        <th class="py-3 px-6 text-left">Email</th>
        <th class="py-3 px-6 text-left">Action</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach($users as $user):?>
      <tr class="border-b hover:bg-gray-50">
        <td class="py-4 px-6"><?= htmlspecialchars($user["id"]);?></td>
        <td class="py-4 px-6"><?= htmlspecialchars($user["nom"]);?></td>
        <td class="py-4 px-6"><?= htmlspecialchars($user["email"]);?></td>
          <td class="py-4 px-6 space-x-2">
            <a href="edit.php?id=<?= $user['id'] ?>" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Modifier</a>
            <a href="delete.php?id=<?= $user['id'] ?>" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');">Supprimer</a>         </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>
