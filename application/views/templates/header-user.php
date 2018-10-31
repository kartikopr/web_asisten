<head>
    <meta charset="utf-8">
    <meta name="viewport">
    <title>

    </title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>


<body>
    <div class="container">
        <div id="header">
            <nav class="navbar navbar-default">

            </nav>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo site_url('asisten/v_home');?>">Penerimaan Asisten</a>
                    </div>
                    <div class="navbar-header">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo site_url('asisten/v_hasil_perhitungan')?>">Hasil Perhitungan</a></li>
                            <li><a href="<?php echo site_url('asisten/v_ranking')?>">Ranking</a></li>

                        </ul>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <li><a href="<?php echo site_url('asisten/logout')?>">Logout</a></li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>