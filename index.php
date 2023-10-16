<!doctype html>
<html>
    
<?php
    include_once 'db/config/koneksi.php';
    include_once "db/config/territory.php";
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wilayah Indonesia 2023 | TeraByte</title>
    <meta name="description" content="Wilayah Indonesia 2023" />
    <meta name="keywords" content="Wilayah, Indonesia, Territory, 2023 , IT, Consultan IT, Consultan, website" />
    <meta name="author" content="terabyte" />

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="favicon_tb.ico"> -->
    <link rel="shortcut icon" href="favicon_tb.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="favicon_tb.ico">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Wilayah Indonesia 2023 | TeraByte" /> <!-- website name -->
    <meta property="og:site" content="https://terabytee.my.id/" /> <!-- website link -->
    <meta property="og:title" content="TeraByte | Wilayah Indonesia"/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Wilayah Indonesia 2023" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="https://terabytee.my.id/images/icon_tb_circle.png" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="https://terabytee.my.id/" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="https://terabytee.my.id/images/icon_tb_circle.png"> <!-- to have large image post format in Twitter -->



	<link rel="stylesheet" href="assets/css/select2.min.css">
	<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css"> -->

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/css/gh-pages.sass">
	<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<header class="navbar navbar-default" role="navigation">
		<div class="container">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url()?>">Wilayah Indonesia</a>
                    </div>
                    
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?=base_url()?>">2023</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="https://github.com/tubagusaom/territory_id" target="_blank">
                                    <i class="fa fa-github"></i> GitHub
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
		</div>
	</header>

    <div class="container my-4" style="height: 3000px;">
        <div class="starter-template">
            <!-- <h1>Bootstrap starter template</h1> -->

            <div class="form-group">
                <label for="provinsi" class="control-label">Provinsi</label>
                <select id="provinsi" class="form-control select2-provinsi">
                    <option></option>
                    <optgroup label="Provinsi">
                        <?php
                            $sql_a="SELECT provinsi.id,provinsi.nama from provinsi ORDER BY provinsi.nama ASC";
                            $query_a=mysqli_query($koneksi,$sql_a);
                            while($dataa=mysqli_fetch_array($query_a))
                            {
                                echo "<option value='$dataa[0]'>$dataa[1]</option>";
                            };
                        ?>
                    </optgroup>
                </select>
            </div>

            <div id="div-kabupaten" class="form-group">
                <label for="kabupaten" class="control-label">Kabupaten</label>
                <select id="kabupaten" class="form-control select2-kabupaten">
                    <option></option>
                    <optgroup id="opt-kab" label="Kabupaten"></optgroup>
                </select>
            </div>

            <div id="div-kecamatan" class="form-group">
                <label for="kecamatan" class="control-label">Kecamatan</label>
                <select id="kecamatan" class="form-control select2-kecamatan">
                    <option></option>
                    <optgroup id="opt-kec" label="Kecamatan"></optgroup>
                </select>
            </div>

            <div id="div-kelurahan" class="form-group">
                <label for="kelurahan" class="control-label">Kelurahan</label>
                <select id="kelurahan" class="form-control select2-kelurahan">
                    <option></option>
                    <optgroup id="opt-kel" label="Kelurahan"></optgroup>
                </select>
            </div>

        </div>
    </div>

    <footer class="bg-inverse text-center text-lg-start fixed-bottom">
        <div class="text-center m-5">
            Copyright © <a style="text-decoration: none;" href="https://terabytee.my.id" target="_blank">terabytee</a>
            <script>
                var CurrentYear = new Date().getFullYear()
                document.write(CurrentYear)
            </script>
        </div>
    </footer>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.js"></script>

	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/anchor.min.js"></script>
	<script>

        

		// anchors.options.placement = 'left';
		// anchors.add('.container h1, .container h2, .container h3, .container h4, .container h5');
        
		$.fn.select2.defaults.set("theme", "bootstrap");

		var placeholderA = "Pilih Provinsi";
        $("#provinsi").select2({
			placeholder: placeholderA,
			width: null,
			containerCssClass: ':all:'
		});

        var placeholderB = "Pilih Kabupaten";
        $("#kabupaten").select2({
			placeholder: placeholderB,
			width: null,
			containerCssClass: ':all:'
		});

        var placeholderC = "Pilih Kecamatan";
        $("#kecamatan").select2({
			placeholder: placeholderC,
			width: null,
			containerCssClass: ':all:'
		});

        var placeholderD = "Pilih Kelurahan";
        $("#kelurahan").select2({
			placeholder: placeholderD,
			width: null,
			containerCssClass: ':all:'
		});

        var baseUrl = "<?= base_url(); ?>";

        $("#div-kabupaten").hide();
        $("#div-kecamatan").hide();
        $("#div-kelurahan").hide();

        // alert(baseUrl);

        $('#provinsi').change(function () {
            $('#div-kabupaten').show();
            var id = $(this).val();
            var basepost = baseUrl+'db/config/selected.php';

            $.ajax({
                url: basepost,
                type: "POST",
                data: {
                    id: id,
                    name: '1'
                },
                success: function(hasil) {
                    $('#opt-kab').html(hasil);
                }
            });
            return false;
        });

        $('#kabupaten').change(function () {
            $('#div-kecamatan').show();
            var id = $(this).val();

            // alert(id);

            var basepost = baseUrl+'db/config/selected.php';

            $.ajax({
                url: basepost,
                type: "POST",
                data: {
                    id: id,
                    name: '2'
                },
                success: function(hasil) {
                    $('#opt-kec').html(hasil);
                }
            });
            return false;
        });

        $('#kecamatan').change(function () {
            $('#div-kelurahan').show();
            var id = $(this).val();

            // alert(id);

            var basepost = baseUrl+'db/config/selected.php';

            // alert(id);

            $.ajax({
                url: basepost,
                type: "POST",
                data: {
                    id: id,
                    name: '3'
                },
                dataType: 'json',
                success: function(hasilk) {
                    $('#opt-kel').html(hasilk);
                }
            });
            return false;
        });
        
	</script>
</body>

</html>