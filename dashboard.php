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



    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic carousel</h4>
                            
                                <div class="owl-carousel">
                                    <div class="item"> <img src="img/1.jpg" alt="image" style="height: 200px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                    <div class="item"> <img src="img/2.jpg" alt="image" style="height: 200px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                    <div class="item"> <img src="img/3.jpg" alt="image" style="height: 200px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                    <div class="item"> <img src="img/4.jpg" alt="image" style="height: 200px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                    <div class="item"> <img src="img/5.jpg" alt="image" style="height: 200px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                    <div class="item"> <img src="img/6.jpg" alt="image" style="height: 200px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                    <div class="item"> <img src="img/7.jpg" alt="image" style="height: 200px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                    <div class="item"> <img src="img/8.jpg" alt="image" style="height: 200px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                    <div class="item"> <img src="img/9.jpg" alt="image" style="height: 200px;" /> <span class="text-seondary">lorem ipsum dolor sit amet</span> </div>
                                </div>
                        </div>
                    </div>
                </div>
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