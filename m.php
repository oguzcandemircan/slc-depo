<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Powerman | Müşteri Detayı</title>

    <!-- Bootstrap -->
    <link href="assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/base/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <?php
        include 'dbClass.php';
        $db = new database();
        if($_SESSION["usertype"] != 1 && $_SESSION["usertype"] != 2)    {
            ?><script> window.location.href = "login.php"; </script> <?php
        }
        else{
    ?>
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <?php include './part/logo.php'; ?>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <?php include './part/sidebar.php'; ?>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <?php include './part/topnavigation.php'; ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3><i class="fa fa-user-plus"></i> Müşteri Detayı</h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="x_content">
                                        <br><?php
                                            $musteri = $db->escape($_GET['musteri']);
                                            if( is_numeric($musteri) ){
                                                $sonuc = $db->query("SELECT * FROM `musteri` WHERE `id`=".$musteri);
                                            }
                                            else{
                                                $sonuc = $db->query("SELECT * FROM `musteri` WHERE `unvan`='".$musteri."'");
                                            }
                                            if( $sonuc->num_rows>0 ){
                                                $row = $sonuc->fetch_assoc();
                                                $ulkekontrol = $db->select( "ulkeler" , $row["ulke"]);
                                                if( $ulkekontrol != NULL );
                                                    $ulke = $ulkekontrol;
                                                $ilkontrol = $db->select( "iller" , $row["il"]);
                                                if( $ilkontrol != NULL )
                                                    $il = $ilkontrol;
                                                $ilcekontrol = $db->select( "ilceler" , $row["ilce"]);
                                                if( $ilcekontrol != NULL )
                                                    $ilce = $ilcekontrol;
                                            
                                            
                                        ?>
                                        <form class="form-validation form-horizontal form-label-left" action="musteriguncelle.php" method="get">
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="title">Ünvan</span></label>
                                                <div class="col-sm-6">
                                                    <div class="input-icon right">
                                                        <h2><?php echo $row['unvan'];?>&nbsp;</h2>
                                                        <i class="fa"></i>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">Yetkili</label>
                                                <div class="col-sm-6">
                                                    <h2><?php echo $row['yetkili'];?>&nbsp;</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="phone">Telefon</label>
                                                <div class="col-sm-6">
                                                    <div class="input-icon right">
                                                        <h2><?php echo $row['telefon'];?>&nbsp;<?php echo " (".$row['telefonsahibi'].")";?></h2>
                                                        <i class="fa"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">Faks</label>
                                                <div class="col-sm-6">
                                                    <h2><?php echo $row['faks'];?>&nbsp;</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">Email Adresi</label>
                                                <div class="col-sm-6">
                                                    <h2><?php echo $row['mail'];?>&nbsp;<?php echo " (".$row['emailsahibi'].")";?></h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">Web Adresi</label>
                                                <div class="col-sm-6">
                                                    <h2><?php echo $row['web'];?>&nbsp;</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">Fatura Adresi</label>
                                                <div class="col-sm-6">
                                                    <h2><?php echo $row['fatura'];?>&nbsp;</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">Sevk Adresi</label>
                                                <div class="col-sm-6">
                                                    <h2><?php echo $row['adres'];?>&nbsp;</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="country">Ülke</label>
                                                <div class="col-sm-6">
                                                    <h2><?php echo $ulke['isim'];?>&nbsp;</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="il">İl</label>
                                                <div class="col-sm-6">
                                                    <h2><?php echo $il['isim'];?>&nbsp;</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="ilce">İlçe</label>
                                                <div class="col-sm-6">
                                                    <h2> <?php echo $ilce['isim'];?>&nbsp;</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">Vergi Dairesi</label>
                                                <div class="col-sm-6">
                                                    <h2><?php echo $row['vergidairesi'];?>&nbsp;</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">Vergi No</label>
                                                <div class="col-sm-6">
                                                    <h2><?php echo $row['vergino'];?>&nbsp;</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">    
                                                <label class="control-label col-sm-2">Not</label>
                                                <div class="col-sm-6">
                                                    <h2><?php echo $row['nota];?>&nbsp;</h2>
                                                </div>
                                            </div>
                                            <input type="hidden" name="musteri" value=<?php echo $row['id'];?> />
                                            <button type="submit" class="btn btn-success">Güncelle</button>
                                            <a href="musterikontrol.php" class="btn btn-warning "/>Geri</a>
                                            <?php if($_SESSION['usertype']==1){?>
                                                <a href="musterisil.php?musteri=<?php echo $row['id'];?>" class="btn btn-danger"/>Sil</a>
                                            <?php } ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
                else{
                    echo "aradığınız kriter uygun değildir, lütfen 3 karakter girerek tekrar deneyiniz ;)";
                   
                }
            ?>
            <!-- /page content -->
            
            <!-- footer content -->
            <?php include './part/footer.php'; ?>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/plugins/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/plugins/nprogress/nprogress.js"></script>
    <!-- Validation -->
    <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
    <!-- Select2 -->
    <script src="assets/plugins/select2/dist/js/select2.full.min.js"></script>
    <!-- Input Mask -->
    <script src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/base/js/custom.min.js"></script>

    <script>
        function getilce(val) {
        $.ajax({
            type: "POST",
            url: "get_ilce.php",
            data:'il='+val,
            success: function(data){
                $("#ilce").html(data);
            }
        });
    }
        $(document).ready(function() {
            $("#phone").inputmask({
                "mask": "(999) 999-9999" 
            });
            $(".selectbox").select2({
                placeholder: "Select a state",
                allowClear: true
            });

        });

    </script>
<?php } ?>
</body>

</html>