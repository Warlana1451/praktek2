<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-skill{
            margin-right: 30px;
        }

        @media only screen and (max-width: 600px) {
            .form-skill {
                display: grid;
                grid-auto-columns: auto;
            }
        }
    </style>
</head>
<body>
<?php 
$ar_prodi = [
    "TI"=> "Teknik Informatika",
    "SI"=> "Sistem Informasi",
    "BD"=> "Bisnis Digital",
];

$ar_skill = [
    "HTML"=> 10,
    "CSS"=> 10,
    "JavaScript"=> 20,
    "RWD Bootstrap"=>20,
    "PHP"=> 30,
    "Python"=> 30,
    "Java"=> 50,
];

$ar_domisili = ["Jakarta","Bogor","Depok","Tanggerang","Bekasi"];

if(isset($_POST["submit"])){
    header("Location: hasil_form.php");
}
?>
<div class="container w-75 py-5">
    <h1 class="text-center mb-4">FORM DATA NILAI MAHASISWA</h1>
    <form action="hasil_form.php" method="post" id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="form-floating mb-3">
            <input class="form-control" name="nim" type="text" placeholder="NIM" required />
            <label for="nim">NIM</label>
            <div class="invalid-feedback">NIM is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="namaLengkap" type="text" placeholder="Nama Lengkap"/>
            <label for="namaLengkap">Nama Lengkap</label>
            <div class="invalid-feedback">Nama Lengkap is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin : </label>
            <div class="flex">
                <div>
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="lakiLaki" value="laki-laki"/>
                    <label class="form-check-label" for="lakiLaki">Laki-laki</label>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="perempuan"/>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" name="programStudi" aria-label="Program Studi">
                <?php foreach ($ar_prodi as $k => $v) { ?>
                <option value="<?php echo $v ?>"><?php echo $v; ?></option>
                <?php } ?>
            </select>
            <label for="programStudi">Program Studi</label>
        </div>
        <div class="mb-3">
            <label class="form-label">Skill Web Programming:</label>
            <div class="d-flex flex-rows">
                <?php foreach ($ar_skill as $k => $v) { ?>
                    <div class="form-skill">
                        <input type="checkbox" class="form-check-input" name="skills[<?php echo $k; ?>]" value="<?php echo $v; ?>" id="skill_<?php echo $k; ?>">
                        <label class="form-check-label" for="skill_<?php echo $k; ?>"><?php echo $k; ?></label>
                    </div>
                <?php } ?>
            </div>
        </div>  
        <div class="form-floating mb-3">
            <select class="form-select" name="tempatDomisili" aria-label="Tempat Domisili">
            <?php foreach ($ar_domisili as $domisili) { ?>
                <option value="<?php echo $domisili; ?>"><?php echo $domisili; ?></option>
            <?php } ?>
            </select>
            <label for="tempatDomisili">Tempat Domisili</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="email" type="email" placeholder="Email" />
            <label for="email">Email</label>
            <div class="invalid-feedback" data-sb-feedback="email:required">Email is required.</div>
            <div class="invalid-feedback" data-sb-feedback="email:email">Email Email is not valid.</div>
        </div>
        <div class="d-grid">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>