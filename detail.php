<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        #video-custom {
            border-radius: 10px;
        }

        #custom-detail-info {
            margin-top: -70px;
            width: 95%;
            margin-left: auto;
            margin-right: auto;
            font-weight: bold;
            font-size: 14px;

        }

        #custom-card-info {
            background: #0a0a0a;
            border-color: #0a0a0a;


        }

        #custom-btn {
            background: #df09e3;
            border-color: #df09e3;
        }

        #custom-btn:hover {
            background-color: #c85fc9;
            font-weight: bold;
        }



        .custom-font {
            color: #fff;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #0a0a0a;
        }

        .custom-jumbo {
            background: #374ced;
            border-color: #374ced;
            border-radius: 20px;
        }

        .custom-pills {
            color: #0a0a0a;
        }

        a:hover {
            color: #0a0a0a;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="jumbotron custom-jumbo">
                    <h1 class="text-center custom-font">PHP untuk pemula - PROJECT TODOLIST</h1>
                    <div class="embed-responsive embed-responsive-21by9 shadow" id="video-custom">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ScMzIvxBSi4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center" id="custom-detail-info">
            <div class="col-md-12">
                <div class="card" id="custom-card-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="text-white">Dibuat oleh : Administrator</span>
                            </div>
                            <div class="col-md-3">
                                <span class="text-white">Tipe Kelas : Gratis</span>
                            </div>
                            <div class="col-md-3">
                                <span class="text-white">Jumlah Modul : 13</span>
                            </div>
                            <div class="col-md-3">
                                <span class="text-white">Rp 0.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-md-9">
                <!-- Nav pills -->
                <ul class="nav nav-pills ">
                    <li class="nav-item">
                        <a class="nav-link active custom-pills" data-toggle="pill" href="#desc">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-pills" data-toggle="pill" href="#kontent">Kontent Kursus</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link custom-pills" data-toggle="pill" href="#syarat">Persyaratan Kelas</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content mt-2">
                    <div class="tab-pane container active" id="desc">
                        <span>Membuat aplikasi TODOLIST dengan menggunakan PHP Native Database MYSQL .</span>
                    </div>
                    <div class="tab-pane container fade" id="kontent">
                        <ul class="list-group">
                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                <li class="list-group-item">list <?php echo $i ?></li>
                            <?php endfor; ?>
                        </ul>

                    </div>
                    <div class="tab-pane container fade" id="syarat">
                        <ul class="list-group">
                            <li class="list-group-item">
                                Koneksi Internet
                            </li>
                            <li class="list-group-item">
                                Pernah belajar basic HTML
                            </li>
                            <li class="list-group-item">
                                Pernah belajar basic PHP
                            </li>
                            <li class="list-group-item">
                                Dapat Menggunakan Komputer / Laptop dan Browser
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-secondary btn-block shadow" id="custom-btn">Gabung Kelas</button>
            </div>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>