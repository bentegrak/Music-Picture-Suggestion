<?php
        
            if($_POST){
                
                $ad = $_POST['ad'];
                $yas = $_POST['yas'];
                $cins = $_POST['cins'];
                $secim = $_POST['secim'];

                setcookie("KullanıcıAd",$ad,time()+(60*60*24*30),"/");
                setcookie("kullanıcıyas",$yas,time()+(60*60*24*30),"/");

                echo "\n Adı: $ad\n Yaşı: $yas\n Cinsiyeti: $cins\n ";
            

            }

?>