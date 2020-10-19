<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            position: fixed;
            top: 0;
            z-index: 1;
            width: 100%;
            background-color: #f1f1f1;
        }

        .header h2 {
            text-align: center;
        }

        .progress-container {
            width: 100%;
            height: 8px;
            background: #ccc;
        }

        .progress-bar {
            height: 8px;
            background: #4caf50;
            width: 0%;
        }

        .content {
            padding: 100px 0;
            margin: 50px auto 0 auto;
            width: 80%;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
        }

        .button2:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body>

    <div class="header">
        <h2>Peribahasa</h2>
        <button type="button" class="button button2" onclick="hide('list')" id="tampil" name="tampil">Tampilkan</button>
        <br>
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>

    <div class="content" id="list" style="display: none;">

        <?php
        $temp = true;
        for ($i = 1; $i < count($data1); $i += 2) {
            $value = (bool)rand(0, 1);
            # code...'
            if ($value) {
                $temp = false;
                echo "<h3>Peribahasa hari ini:</h3>";
                echo $data1[$i][0] . "<br>";
                echo $data1[$i + 1][0];
                echo "<hr>";
            }
        }
        if ($temp) {
            echo "<center><h2>Maaf belum ada peribahasa untuk sekarang  </h2></center>";
        }
        ?>
    </div>

    <script>
        // When the user scrolls the page, execute myFunction 
        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        }

        var is_hide = false;

        function hide(id) {
            if (is_hide == false) {
                document.getElementById(id).style.display = 'block';
                is_hide = true;
            } else {
                document.getElementById(id).style.display = 'none';
                is_hide = false;
            }
        }
    </script>

</body>

</html>