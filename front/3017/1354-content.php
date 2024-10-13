<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phan Long Khánh</title>
</head>

<body>

    <div class="hienchu">
        <h3 class="text-center text-success">What we offer</h3>
    </div>
    <div class="noichu">
        <h1 class="text-center text-primary">Get It Fixed Fast with MobiCare's</h1>
        <h1 class="text-center text-primary">Expert Technicians.</h1>
    </div>

    <br><br><br>




    <div class="boxbig">

        <div class="khung1">
            <div class="product-item1">
                <img src="public/image/hinhanh.png111" alt="hình ảnh" class="product-image">
                <div class="boxsmall">
                    <div class="thanhxanh"></div>
                    <h3 class="text-primary">Screen Repair</h3>
                    <div>Elit letius himenaeos curabitur dis leo primis tempus pharetra tortor</div>
                    <button class="learn-more">LEARN MORE</button>
                </div>
            </div>
        </div>


        <div class="product-item2">
            <img src="link-to-your-image.jpg" alt="hình ảnh" class="product-image">
            <div class="boxsmall">
                <div class="thanhxanh"></div>
                <h3 class="text-primary">Screen Repair</h3>
                <div>Elit letius himenaeos curabitur dis leo primis tempus pharetra tortor</div>
                <button class="learn-more">LEARN MORE</button>
            </div>
        </div>

        <div class="product-item3">
            <img src="link-to-your-image.jpg" alt="hình ảnh" class="product-image">
            <div class="boxsmall">
                <div class="thanhxanh"></div>
                <h3 class="text-primary">Screen Repair</h3>
                <div>Elit letius himenaeos curabitur dis leo primis tempus pharetra tortor</div>
                <button class="learn-more">LEARN MORE</button>
            </div>
        </div>

    </div>

    <div class="boxbig">

        <div class="product-item4">
            <img src="link-to-your-image.jpg" alt="hình ảnh" class="product-image">
            <div class="boxsmall">
                <div class="thanhxanh"></div>
                <h3 class="text-primary">Screen Repair</h3>
                <div>Elit letius himenaeos curabitur dis leo primis tempus pharetra tortor</div>
                <button class="learn-more">LEARN MORE</button>
            </div>
        </div>

        <div class="product-item5">
            <img src="link-to-your-image.jpg" alt="hình ảnh" class="product-image">
            <div class="boxsmall">
                <div class="thanhxanh"></div>
                <h3 class="text-primary">Screen Repair</h3>
                <div>Elit letius himenaeos curabitur dis leo primis tempus pharetra tortor</div>
                <button class="learn-more">LEARN MORE</button>
            </div>
        </div>

        <div class="product-item6">
            <img src="link-to-your-image.jpg" alt="hình ảnh" class="product-image">
            <div class="boxsmall">
                <div class="thanhxanh"></div>
                <h3 class="text-primary">Screen Repair</h3>
                <div>Elit letius himenaeos curabitur dis leo primis tempus pharetra tortor</div>
                <button class="learn-more">LEARN MORE</button>
            </div>
        </div>

    </div>




</body>

</html>