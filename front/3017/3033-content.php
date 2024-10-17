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
    <title>3033</title>
</head>

<body>

    <div class="type-3033">
        <div class="Nav">
            <div class="homepage"><a href="">HOME</a></div>
            <div class="FAQ"><a href="">FAQS SINGLE</a></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-box">
                        <div class="accordion-box">
                            <div class="accordion accordion-block">
                                <input type="checkbox" id="toggle1" class="toggle">
                                <label class="accord-btn" for="toggle1">
                                    <div class="khungdep">
                                        <h5 class="chu">Will my repair cause data loss on my device? </h5>
                                        <div class="trucxoay">
                                            <h3 class="muiten">➨</h3>
                                        </div>
                                    </div>
                                </label>
                                <div class="accord-content">
                                    <p class="content-text">We give a Guarantee for a Period of 5 years and promise to
                                        rectify any fault arising
                                        out of faulty
                                        workmanship at our cost. However, the guarantee does not hold good for
                                        mishandling
                                        and breakable...</p>
                                </div>
                            </div>
                            <div class="accordion accordion-block">
                                <input type="checkbox" id="toggle2" class="toggle">
                                <label class="accord-btn" for="toggle2">
                                    <div class="khungdep">
                                        <h5 class="chu">Will my repair cause data loss on my device? </h5>
                                        <div class="trucxoay">
                                            <h3 class="muiten">➨</h3>
                                        </div>
                                    </div>
                                </label>
                                <div class="accord-content">
                                    <p class="content-text">We give a Guarantee for a Period of 5 years and promise to
                                        rectify any fault arising
                                        out of faulty
                                        workmanship at our cost. However, the guarantee does not hold good for
                                        mishandling
                                        and breakable...</p>
                                </div>
                            </div>
                            <div class="accordion accordion-block">
                                <input type="checkbox" id="toggle3" class="toggle">
                                <label class="accord-btn" for="toggle3">
                                    <div class="khungdep">
                                        <h5 class="chu">Will my repair cause data loss on my device? </h5>
                                        <div class="trucxoay">
                                            <h3 class="muiten">➨</h3>
                                        </div>
                                    </div>
                                </label>
                                <div class="accord-content">
                                    <p class="content-text">We give a Guarantee for a Period of 5 years and promise to
                                        rectify any fault arising
                                        out of faulty
                                        workmanship at our cost. However, the guarantee does not hold good for
                                        mishandling
                                        and breakable...</p>
                                </div>
                            </div>
                            <div class="accordion accordion-block">
                                <input type="checkbox" id="toggle4" class="toggle">
                                <label class="accord-btn" for="toggle4">
                                    <div class="khungdep">
                                        <h5 class="chu">Will my repair cause data loss on my device? </h5>
                                        <div class="trucxoay">
                                            <h3 class="muiten">➨</h3>
                                        </div>
                                    </div>
                                </label>
                                <div class="accord-content">
                                    <p class="content-text">We give a Guarantee for a Period of 5 years and promise to
                                        rectify any fault arising
                                        out of faulty
                                        workmanship at our cost. However, the guarantee does not hold good for
                                        mishandling
                                        and breakable...</p>
                                </div>
                            </div>
                            <div class="accordion accordion-block">
                                <input type="checkbox" id="toggle5" class="toggle">
                                <label class="accord-btn" for="toggle5">
                                    <div class="khungdep">
                                        <h5 class="chu">Will my repair cause data loss on my device? </h5>
                                        <div class="trucxoay">
                                            <h3 class="muiten">➨</h3>
                                        </div>
                                    </div>
                                </label>
                                <div class="accord-content">
                                    <p class="content-text">We give a Guarantee for a Period of 5 years and promise to
                                        rectify any fault arising
                                        out of faulty
                                        workmanship at our cost. However, the guarantee does not hold good for
                                        mishandling
                                        and breakable...</p>
                                </div>
                            </div>
                            <div class="accordion accordion-block">
                                <input type="checkbox" id="toggle6" class="toggle">
                                <label class="accord-btn" for="toggle6">
                                    <div class="khungdep">
                                        <h5 class="chu">Will my repair cause data loss on my device? </h5>
                                        <div class="trucxoay">
                                            <h3 class="muiten">➨</h3>
                                        </div>
                                    </div>
                                </label>
                                <div class="accord-content">
                                    <p class="content-text">We give a Guarantee for a Period of 5 years and promise to
                                        rectify any fault arising
                                        out of faulty
                                        workmanship at our cost. However, the guarantee does not hold good for
                                        mishandling
                                        and breakable...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Ask col-lg-6">
                    <div class="Ask1">
                        <h1>Ask Your Questions</h1>
                        <input class="text" type="Text" placeholder="Name*">
                        <input class="email" type="Text" placeholder="Email*">
                        <input class="subject" type="Text" placeholder="Subject*">
                        <textarea class="textarea" name="textarea-452" cols="4"
                            placeholder="Your Questions..."></textarea>
                        <input type="submit" value="Submit Now" class="submit1">
                        <div class="hienchu">One or more fields have an error. Please check and try again.</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>






















































































<script>
    const toggles = document.querySelectorAll('.toggle');
    toggles.forEach(toggle => {
        toggle.addEventListener('change', function () {
            toggles.forEach(t => {
                if (t !== this) {
                    t.checked = false;
                }
            });
        });
    });
</script>