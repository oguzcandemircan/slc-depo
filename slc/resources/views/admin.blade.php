<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SLC Anlık Chat Uygulaması</title>




    </head>
    <style>
body{
  background-color: #f9f9f9;
  font-size: 14px;
  font-family: arial;
  line-height:1.5;
}
.chat{

  width: 600px;
  height: 450px;
  background-color:#fff;
  padding: 20px;
  margin: auto;
  margin-top: 50px;
  border-radius: 20px;
  overflow: scroll;
  border-radius: 5px;
  border:solid 5px black;

}
.yazi{

  width: 300px;
  padding: 10px;
  background: #4080ff;
  color:#fff;
  border-radius: 5px;

}
.yazan{
  width: 300px;
  padding: 5px;
}
.tarih{

width: auto;
height: auto;
  color:#111;
  font-size: 12px;
}
.right{
   float:right;
   background: red!important;
}
.id_al
{
  border: solid 2px red;
  padding: 5px;
  border-radius: 5px;
}
.clear{
  clear: both;
}
.container{
  width: 600px;
  margin: auto;

}
.yazi_gonder_kutu{
  padding: 30px;
}
.txt_area{
  width: 300px;
}
</style>
    <body>
    <a href="http://192.168.1.202/slc/public/cikis" class="cikis">cikis</a>
<div class="chat">
<div id="yazdir">
  <?php


                  use App\User;
                 
                  $user    =new User();
                  $user_id =$user->id;

                foreach ($yazilar as $yazi)
                {
                  $id=$yazi->id;
                  if($id==$user_id)
                  {
                    echo "<div class='id_al' yaziid='".$yazi->yazi_id."' >";
                    echo "<div class='yazan right'>".$yazi->adi."</div>";
                    echo "<div class='yazi right'>".$yazi->yazi."</div>";
                    echo "<div class='tarih '>".$yazi->tarih."</div>";
                    echo "<div class='clear'></div>";
                    echo "</div>";
                  }
                  else {

                    echo "<div class='id_al' yaziid='".$yazi->yazi_id."' >";
                    echo "<div class='yazan'>".$yazi->adi."</div>";
                    echo "<div class='yazi'>".$yazi->yazi."</div>";
                    echo "<div class='tarih'>".$yazi->tarih."</div>";
                    echo "<div class='clear'></div>";
                    echo "</div>";




                }
              }//Foreach

                 ?>
</div>
</div>
<div class="container">
    <div class="yazi_gonder_kutu">
        <textarea type="text" id="yazi_kutu_al" name="yazi" class="txt_area" placeholder="Bir şeyler yazın" rows="10"></textarea>
        <button class="yazi_gonder" onclick="yazi_gonder()">GÖNDER</button>
    </div>
</div>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

 //getir();
    scroll();


});//document


 setInterval(function(){
  
    getir();

  }, 1000);

function getir()
{
  var id = $('.id_al:last').attr('yaziid');
 

  $.ajax({
  type: "GET",
  url: "http://192.168.1.202/slc/public/yazi_al",
  data:"id="+id,
  error:function(){  $("#yazdir").html("Bir hata algılandı."); }, //Hata alınırsa ekrana bastırılacak veri
  success: function(veri) {

       $("#yazdir").append(veri);
       if (veri!="") 
        {
          scroll()
        }

      }

  });//ajax



}//function

function yazi_gonder()
{
  var yazi= $('#yazi_kutu_al').val();
   $.ajax({
  type: "GET",
  url: "http://192.168.1.202/slc/public/yazi_gonder",
  data:"yazi="+yazi,
  error:function(){ $("#yazdir").html("Bir hata algılandı."); }, //Hata alınırsa ekrana bastırılacak veri
  success: function(veri) { $("#yazdir").append(veri);}

  });//ajax

}

function scroll()
{
  $(".chat").scrollTop($("#yazdir").height());
}


</script>

</html>
