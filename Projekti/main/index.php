<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <?php
    include("../styles/styles.php");
    ?>
    <link rel="stylesheet" href="style.css?as">
    <link rel="stylesheet" href="sliderstyle.css">
</head>

<body>
    <header>
        <?php
        include("../header/header.php");
        ?>
    </header>
    <main>
        <div class="center">

            <div class="inside">
                <form class="reservation-form" action="../car_models/models.php" name="car-select-form" id="car-select">
                    <!-- Car select start -->
                    <div class="select-car">
                        <select name="car-select" id="car-select">
                            <option value="">Select your car type</option>
                            <option value="golf6">Audi A7</option>
                            <option value="golf6">Mercedes S550</option>
                            <option value="golf6">Audi A4</option>
                            <option value="golf6">VW Golf 7</option>
                            <option value="golf6">BMW M5</option>
                            <option value="golf6">Mercedes C300</option>
                            <option value="golf6">Audi Q8</option>
                            <option value="golf6">VW Golf 6</option>
                        </select>
                        <span><a href="../car_models/models.php">View all models</a></span>
                    </div>
                    <!-- Car select end -->


                    <div class="pu-location">
                        <div class="pick-up" id="iput-res"><img src="../icons/reservation_tab/logo2.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
                            <span>Pick-up </span>

                            <input type="text" id="pu-place" placeholder="Enter city or airport: ">


                        </div>

                        <div class="drop-off"><img src="../icons/reservation_tab/logo2.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
                            <span id="input-res">Drop-off</span>

                            <input type="text" id="do-place" placeholder="Enter city or airport: ">

                        </div>
                    </div>

                    <div class="date-reservation">
                        <div class="pu-date">
                            <img src="../icons/reservation_tab/calendar.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
                            <span>Pick-up </span>
                            <input type="date">
                        </div>
                        <div class="pu-time" id="time-res">
                            <input type="time" class="pick-up-time">
                        </div>
                    </div>
                    <div class="date-reservation">
                        <div class="do-date">
                            <img src="../icons/reservation_tab/calendar.png" alt="pick-up" height="20px" class="pick-up-logo" class="pick-up-logo">
                            <span>Drop-off</span>
                            <input type="date">
                        </div>
                        <div class="do-time" id="time-res">
                            <input type="time" class="drop-off-time">
                        </div>
                    </div>

                    <div class="reservation-button">
                        <input type="submit" id="submit" onclick="myfunction()" class="submit" value="CONTINUE CAR RESERVATION">
                    </div>
            </div>

            </form>

            <div class="cover-img">
                <span class="slider-back"><img src=" icons/arrow-left.png" alt="Left Arrow"></span>
                <div class="slider-imgs">
                    <img src="../imgs/models/audi_a7_white.png" class="slider-img" alt="Audi A7">
                    <img src="../imgs/models/audi_a4_2019_navy.png" class="slider-img hidden" alt="Audi A4">
                    <img src="../imgs/models/audi_q8_white.png" class="slider-img hidden" alt="Audi Q8">
                    <img src="../imgs/models/bmw_m5_white.png" class="slider-img hidden" alt="BMW M5">
                    <img src="../imgs/models/golf_6_dark_grey.png" class="slider-img hidden" alt="Golf 6">
                    <img src="../imgs/models/golf_7_white.png" class="slider-img hidden" alt="Golf 7">
                    <img src="../imgs/models/mercedes_c300_gray.png" class="slider-img hidden" alt="Mercedes C300">
                    <img src="../imgs/models/mercedes_s550_black.png" class="slider-img hidden" alt="Mercedes S550">
                </div>
                <span class="slider-next"><img src="icons/arrow-right.png" alt="Right Arrow"></span>
            </div>
        </div>
    </main>
    <footer>
        <?php
        include("../footer/footer.php");
        ?>
    </footer>
    <script src="main.js?a"></script>
    <script src="slider.js?a"></script>
</body>

</html>