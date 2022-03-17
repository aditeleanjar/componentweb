<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/535fb5b18e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }
        .jumbo-custom{
            background-color:#3f44d9;
            color: #fff;
        }
        .badge-custom-html{
            background-color: #f27405;
            color: #fff;
        }
        .badge-custom-bootstrap{
            background-color: #ab05f2;
            color: #fff;
        }
        .badge-custom-php{
            background-color: #0509f2;
            color: #fff;
        }
        .badge-custom-db{
            background-color: #454344;
            color: #fff;
        }
        .btn-custom{
            background-color:#1f19d1 ;
            color: #fff;
        }
        .text-custom{
            color: #ed058c;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="jumbotron jumbo-custom shadow-lg">
                    <h1 class="display-4">Hello, world!</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                   
                  </div>
            </div>
        </div>
        <div class="row mt-3">
            <?php for($i=1;$i<=12;$i++) : ?>
            <div class="col-md-6 mb-2">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="d-flex flex-row bd-highlight mb-3">
                            <div class="d-none  d-lg-block d-xl-block">
                                <div class="p-2 bd-highlight">
                                    <img src="img/2.jpg" class="figure-img img-fluid rounded" style="width: 300px;">
                                </div>
                            </div>
                            <div class="p-2 bd-highlight">
                                <span class="text-custom">Lorem Ipsum</span>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry....
                                </p>
                                <span class="badge badge-custom-html" data-toggle="tooltip" data-placement="top" title="HTML">
                                    <i class="fa-brands fa-html5"></i>
                                </span>
                                <span class="badge badge-custom-bootstrap" data-toggle="tooltip" data-placement="top" title="BOOTSTRAP"><i class="fa-brands fa-bootstrap"></i></span>
                                <span class="badge badge-custom-php" data-toggle="tooltip" data-placement="top" title="PHP"><i class="fa-brands fa-php"></i></span>
                                <span class="badge badge-custom-db" data-toggle="tooltip" data-placement="top" title="MYSQL"><i class="fas fa-database"></i></span>
                                
                               
                            </div>
                        </div>
                        <div class="float-right shadow">
                            <a href="#" class="btn btn-custom">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
          <?php endfor; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>
</html>