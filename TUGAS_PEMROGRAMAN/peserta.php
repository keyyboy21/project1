<?php
include 'config.php';

$query = "SELECT * FROM peserta ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Peserta Turnamen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="container mt-5">
    <h2 class="mb-4">Daftar Peserta Turnamen Mobile Legends</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Tim</th>
                <th>Ketua Tim</th>
                <th>No. HP</th>
                <th>Email</th>
                <th>Anggota 1</th>
                <th>Anggota 2</th>
                <th>Anggota 3</th>
                <th>Anggota 4</th>
            </tr>
        </thead>
        <tbody>
            <?php
      $no = 1;
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $no++ . "</td>";
          echo "<td>" . htmlspecialchars($row['nama_tim']) . "</td>";
          echo "<td>" . htmlspecialchars($row['ketua_tim']) . "</td>";
          echo "<td>" . htmlspecialchars($row['no_hp']) . "</td>";
          echo "<td>" . htmlspecialchars($row['email']) . "</td>";
          echo "<td>" . htmlspecialchars($row['anggota1']) . "</td>";
          echo "<td>" . htmlspecialchars($row['anggota2']) . "</td>";
          echo "<td>" . htmlspecialchars($row['anggota3']) . "</td>";
          echo "<td>" . htmlspecialchars($row['anggota4']) . "</td>";
          echo "</tr>";
      }
      ?>
        </tbody>
    </table>
</body>

</html>