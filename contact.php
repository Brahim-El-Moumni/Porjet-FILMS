<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container-fluid">
    <h1 style="text-align:center;">CONTACT</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="form" style="margin-top:100px;">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="msg">Message</label>
                    <textarea name="msg" class="form-control"></textarea>
                    <small class="text-muted">Si vous avez des questions sur les films présentés, n'hésitez pas à nous contacter.</small>
                </div>
                <button class="btn btn-success">ENVOYER</button>

            </div>
        </div>
        
        <div class="col-lg-6">
            <div id="map" style="width:100%; height:400px;"></div>
        </div>
        
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnY8VBo9lH_dg7mXafR2QHneuGMCZ6ZP8&callback=initMap&v=weekly" defer></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script>let map;
        function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 34.134117, lng: -118.321495 },
            zoom: 14
        
        });
        let var_marker = new google.maps.Marker({
            position: map["center"],
            map: map,
            title: "Los Angeles"
        })
    }
    window.initMap = initMap;</script>
</body>
</html>