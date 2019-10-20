<?php
require "bitcoin_widget_get.php";

$currencies = getBitcoinPrices();
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
    <title>Bitcoin Widget</title>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    
    <script src="scripts/script.js" type="text/javascript"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col" style="position:relative">
                <div role="alert" aria-live="assertive" id="div_toast" aria-atomic="true" class="toast" data-autohide="true" >
                    <div class="toast-header">
                        <strong class="mr-auto">Currency info saved</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body" id="toast-body"></div>
                </div>

                <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                            $j = 0;
                            foreach($currencies as $key){
                                //echo $j;
                                if($j == 0){
                                    echo '<li data-target="#carouselCaptions" data-slide-to="'.$j.'" class="active"></li>';
                                }else{
                                    echo '<li data-target="#carouselCaptions" data-slide-to="'.$j.'"></li>';
                                }
                                $j++;
                            }
                        ?>
                    </ol>
                    <div class="carousel-inner">
                    <?php
                    $i = 0;
                    foreach($currencies as $currency){

                        $code = $currency['code'];
                        $symbol = $currency['symbol'];
                        $rate = $currency['rate'];
                        $description = $currency['description'];
                        $rate_float = $currency['rate_float'];

                        if($i == 0){
                            echo '<div class="carousel-item active">';
                        }else{
                            echo '<div class="carousel-item">';
                        }
                                echo '<span class="code" style="display:none">'.$code.'</span>';
                                echo '<span class="symbol" style="display:none">'.$symbol.'</span>';
                                echo '<span class="rate" style="display:none">'.$rate.'</span>';
                                echo '<span class="description" style="display:none">'.$description.'</span>';
                                echo '<span class="rate_float" style="display:none">'.$rate_float.'</span>';
                                echo '<img src="img/'.$code.'.jpg" class="d-block w-100" alt="'.$description.'">';
                                echo '<div class="carousel-caption">';
                                echo '    <h5>BTC/'. $code . " " .$symbol . $rate_float .'</h5>';
                                echo '    <p>'.$description.'</p> ';
                                echo '</div> ';
                            echo '</div> ';
                        
                        $i++;
                    }
                    ?>

                    </div>
                    <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col text-center">
                <button type="button" id="button_save">Save</button>
            </div>
        </div>
</body>

</html>