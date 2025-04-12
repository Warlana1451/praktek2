<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <?php 
        // Definisikan array skor untuk setiap skill
        $skills = $_POST['skills'];
        $skill_pilihan = key($skills);

        function skor_skill($skills) {
            $total_skor = 0;
            // Mengakses array global
            foreach ($skills as $skill) {
                $total_skor += $skill;
            }
            // Mengembalikan total skor
            return $total_skor;
        }

        function kategori_skill($skor) {
            if ($skor == 0) {
                return "Tidak Memadai"; // Kategori untuk skor 0
            } elseif ($skor >= 0 && $skor <= 40) {
                return "Kurang"; // Kategori untuk skor 0-40
            } elseif ($skor > 40 && $skor <= 60) {
                return "Cukup"; // Kategori untuk skor 41-60
            } elseif ($skor > 60 && $skor <= 100) {
                return "Baik"; // Kategori untuk skor 60-100
            } elseif ($skor > 100 && $skor <= 150) {
                return "Sangat Baik"; // Kategori untuk skor 100-150
            } else {
                return "Tidak valid"; // Kategori untuk skor tidak valid
            }
        }

        // Menghitung total skor
        $total_skor = skor_skill($skills);
        $kategori = kategori_skill($total_skor);
        ?>

        <div class="mb-3">
            <a href="form.php" class="btn btn-primary">Kembali</a>
        </div>

        <h1 class="text-center mb-4">Hasil Input Data Mahasiswa</h1>
    
        <div class="list-group">
            <p class="list-group-item"><strong>NIM:</strong> <?php echo htmlspecialchars($_POST['nim']); ?></p>
            <p class="list-group-item"><strong>Nama Lengkap:</strong> <?php echo htmlspecialchars($_POST['namaLengkap']); ?></p>
            <p class="list-group-item"><strong>Jenis Kelamin:</strong> <?php echo htmlspecialchars($_POST['jenisKelamin']); ?></p>
            <p class="list-group-item"><strong>Program Studi:</strong> <?php echo htmlspecialchars($_POST['programStudi']); ?></p>
            <p class="list-group-item"><strong>Skill:</strong> 
                <?php 
                echo implode(", ", array_keys($skills)); // Menampilkan skill yang dipilih
                ?>
            </p>
            <p class="list-group-item"><strong>Skor Skill:</strong> <?php echo $total_skor; ?></p>
            <p class="list-group-item"><strong>Kategori Skill:</strong> <?php echo $kategori; ?></p>
            <p class="list-group-item"><strong>Domisili:</strong> <?php echo htmlspecialchars($_POST['tempatDomisili']); ?></p>
            <p class="list-group-item"><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
        </div>
    </div>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>