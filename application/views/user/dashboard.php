<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <section class="head">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="judul">
                <p>WE CREATE & DEVELOP BRAND WITH PURPOSES</p>
            </div>
            <div class="subjudul">
                <p>We create brand with purposes & clear vision
                specialized in create, develop & maintain reputable Brands
                Let’s grow with us.
                </p>
            </div>
            <div class="kotak">
                <div class="kiri"><p>Get to know us now...</p></div>
                <div class="kanan"><i class="fa-sharp fa-solid fa-chevron-down"></i></div>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active home1">
                    <img src="<?= base_url('assets/image/Homepage/Asset 13@300x-100.jpg') ?>" srcset="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item home2">
                    <img src="<?= base_url('assets/image/Homepage/Asset 10@300x-100.jpg') ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item home3">
                    <img src="<?= base_url('assets/image/Homepage/Asset 6@300x-100.jpg') ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            
        </div>

    </section>


    <section class="isi-1">
        <div class="container-judul">
            <div class="content-atas">WE BUILD BRAND</div>
            <div class="content-tengah">WITH LOVE</div>
            <div class="content-bawah">AND PURPOSES</div>
            <div class="container-subjudul">
                <p>Lorem Ipsum is simply dummy text of the 
                printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <div class="container-img">
            <div class="logo">
                <img src="<?= base_url('assets/image/Homepage/SBI Logo.png') ?>" alt="" srcset="">
            </div>
            <div class="bunga">
                <img src="<?= base_url('assets/image/Homepage/Asset 3.png') ?>" alt="" srcset="">
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container1">
            <div class="angkastatis">
                <p>3424</p>
            </div>
            <div class="text">
                Lorem Ipsum dolor sit amet
            </div>
        </div>

        <div class="container2">
            <div class="angkastatis">
                <p>10232</p>
            </div>
            <div class="text">
                Lorem Ipsum dolor sit amet
            </div>
        </div>

        <div class="container3">
            <div class="angkastatis">
                <p>43%</p>
            </div>
            <div class="text">
                Lorem Ipsum dolor sit amet
            </div>
        </div>

        <div class="container4">
            <div class="knowmore">
                <p>Know More About Us</p>
            </div>
            <div class="button1">
                <button type="button" class="btn btn-outline-light">Learn More</button>
            </div>
        </div>

        <div class="container5img">
            <img src="<?= base_url('assets/image/Homepage/Asset 4@300x-100 3.png') ?>" alt="" srcset="">
        </div>
    </section>


    <section class="slide-bwh" id="slide">
        <div><img src="<?= base_url('assets/image/Homepage/Asset 12@300x-100.jpg') ?>" alt=""></div>
        <div><img src="<?= base_url('assets/image/Homepage/Asset 11@300x-100.jpg') ?>" alt=""></div>
        <div><img src="<?= base_url('assets/image/Homepage/Asset 10@300x-100.jpg') ?>" alt=""></div>
        <div><img src="<?= base_url('assets/image/Homepage/Asset 9@300x-100.jpg') ?>" alt=""></div>
        <div><img src="<?= base_url('assets/image/Homepage/Asset 10@300x-100.jpg') ?>" alt=""></div>
    </section>




    <script>
    $(document).ready(function(){
        $('.slide-bwh').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
        });
        });
</script>
</body>
</html>