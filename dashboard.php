<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom.css">


</head>
<body>



    <div class="container" >
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Hello Your Name</div>
                        <h1 class="text-primary">Lorem Ipsum</>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="card-title">You Statistic</div>
                        <h1 class="text-primary">4</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List Data</h4>
                        
                            <div class="owl-carousel">
                                <div class="item"> <img src="img/1.jpg" alt="image" style="height: 170px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                <div class="item"> <img src="img/1.jpg" alt="image" style="height: 170px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                <div class="item"> <img src="img/1.jpg" alt="image" style="height: 170px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                <div class="item"> <img src="img/2.jpg" alt="image" style="height: 170px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                <div class="item"> <img src="img/3.jpg" alt="image" style="height: 170px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                <div class="item"> <img src="img/4.jpg" alt="image" style="height: 170px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                <div class="item"> <img src="img/5.jpg" alt="image" style="height: 170px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                <div class="item"> <img src="img/6.jpg" alt="image" style="height: 170px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                <div class="item"> <img src="img/7.jpg" alt="image" style="height: 170px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                <div class="item"> <img src="img/8.jpg" alt="image" style="height: 170px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                <div class="item"> <img src="img/9.jpg" alt="image" style="height: 170px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Banner</th>
                            <th>Title</th>
                            <th>Modul</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=1;$i<=5;$i++): ?>
                            <tr>
                                <td>
                                    <div class="text-center">
                                    <img src="img/2.jpg" class="img-fluid" alt="image" style="height: 50px;" />
                                    </div>
                                </td>
                                <td>Google Certificate Exam</td>
                                <td>200</td>
                                <td>
                                    <button class="btn btn-block btn-dark">view</button>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>

       
    </div>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<script>
    $(document).ready(function() {

        $(".owl-carousel").owlCarousel({
            autoPlay: 3000,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3],
            center: true,
            nav:true,
            loop:true,
            responsive: {
                600: 
                {
                    items: 4
                }
            }
        });
    });
</script>
</body>
</html>