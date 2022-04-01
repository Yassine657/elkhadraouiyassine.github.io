<?php 
    $msg=isset($_GET['msg'])?$_GET['msg']:"";
    $num=isset($_GET['num'])?$_GET['num']:"";
    $nom=isset($_GET['nom'])?$_GET['nom']:"";
    $ville=isset($_GET['ville'])?$_GET['ville']:"";
    $dtn=isset($_GET['dtn'])?$_GET['dtn']:"";
    $sexe=isset($_GET['sexe'])?$_GET['sexe']:"";
    $sp=isset($_GET['sp'])?$_GET['sp']:"";
    $dp=isset($_GET['dp'])?$_GET['dp']:"";
    $btn=isset($_GET['btn'])?$_GET['btn']:"Ajouter";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset >
        <legend>Inscription</legend>
        <form action="a.php" method="POST">
            <table align="center">
                <tr><th>Num</th><td><input type="text" value="<?php echo $num ;?>" name="num" readonly></td></tr>
                <tr><th>Nom&Prenom:</th><td><input type="text" value="<?php echo $nom ;?>" name="nom" ></td></tr>
                <tr><th>ville</th><td><select name="ville" value="<?php echo $ville ;?>" >
                    <?php 
                        if($ville!=""){
                            if(strpos($ville,"es")==false){ ?>
                                <option value="fes">fes</option>
                            <?php }else { ?>
                                <option value="fes" selected>fes</option>
                            <?php }
                            if(strpos($ville,"abat")==false){ ?>
                                <option value="rabat">rabat</option>
                            <?php }else { ?>
                                <option value="rabat" selected>rabat</option>
                            <?php }
                            if(strpos($ville,"asa")==false){ ?>
                                <option value="casa">casa</option>
                            <?php }else { ?>
                                <option value="casa" selected>casa</option>
                            <?php }
                            }else{
                            ?>
                                <option value="fes">fes</option>
                                <option value="rabat">rabat</option>
                                <option value="casa">casa</option>
                            <?php } 
                            ?>
                </select></td></tr>
                <tr><th>Date de Naissance</th><td><input value="<?php echo $dtn ;?>" type="date" name="dtn" ></td></tr>
                <tr><th>Sexe</th><td>
                    <?php
                        if($sexe!=""){
                            if(strpos($sexe,"emme")==false){ ?>
                                <input type="radio" name="sexe" value="femme" >F |
                            <?php }else {?>
                                <input type="radio" checked name="sexe" value="femme" >F |
                            <?php }
                            if(strpos($sexe,"omme")==false){ ?>
                                <input type="radio" name="sexe" value="Homme" >M
                            <?php }else {?>
                                <input type="radio" name="sexe" checked value="Homme" >M
                            <?php }

                            }else{
                                ?>
                <input type="radio" name="sexe" value="femme" >F |
                <input type="radio" name="sexe" value="Homme" >M
                          <?php  } ?>                       
                </td></tr>
                <tr><th>Sport Preferes</th><td>
                
                <?php 
            if($sp!=""){
                if(strpos($sp,"ootball")==false){?> 
                    <input type="checkbox" name="sp[]" value="Football" >Football |
                    <?php }else {?>
                        <input type="checkbox" name="sp[]" checked value="Football" >Football |
                    <?php }
                if(strpos($sp,"asketball")==false){?> 
                    <input type="checkbox" name="sp[]" value="Basketball" >Basketball
                    <?php }else {?>
                        <input type="checkbox" name="sp[]" checked value="Basketball" >Basketball 
                    <?php }
                if(strpos($sp,"enis")==false){?> 
                    |<input type="checkbox" name="sp[]" value="Tenis" >Tenis 
                    <?php }else {?>
                        |<input type="checkbox" name="sp[]" checked value="Tenis" >Tenis 
                    <?php }
            }else{  
                ?>
                <input type="checkbox" name="sp[]" value="Football" >Football |
                <input type="checkbox" name="sp[]" value="Basketball" >Basketball 
                |<input type="checkbox" name="sp[]" value="Tenis" >Tenis
        <?php } ?>
                </td></tr>
                <tr><th>Diplomes</th><td>
                    <select name="dp[]" multiple size="5">
                    <?php 
                        if($dp!=""){
                            if(strpos($dp,"a")==false){ ?>
                                <option value="Qa">Q</option>
                            <?php }else { ?>
                                <option value="Qa" selected>Q</option>
                            <?php }
                            if(strpos($dp,"e")==false){ ?>
                                <option value="Te">T</option>
                            <?php }else { ?>
                                <option value="Te" selected>T</option>
                            <?php }
                            if(strpos($dp,"S")==false){ ?>
                                <option value="TS">TS</option>
                            <?php }else { ?>
                                <option value="TS" selected>TS</option>
                            <?php }
                            if(strpos($dp,"ac")==false){ ?>
                                <option value="Bac">Bac</option>
                            <?php }else { ?>
                                <option value="Bac" selected>Bac</option>
                            <?php }
                            if(strpos($dp,"aster")==false){ ?>
                                <option value="Master">Master</option>
                            <?php }else { ?>
                                <option value="Master" selected>Master</option>
                            <?php }
                            
                            }else{
                            ?>
                                <option value="Qa">Q</option>
                                <option value="Te">T</option>
                                <option value="TS">TS</option>
                                <option value="Bac">Bac</option>
                                <option value="Master">Master</option>
                            <?php } 
                            ?>
                    </select>
                </td></tr>
                <tr><th></th><th><input type="submit" value="<?php echo $btn; ?>" name="btn" ><input type="reset" value="Annuler"></th></tr>
        </table>
        </form>
    </fieldset>
    <div style="color: green; text-align: center;font-size: 30px;">
        <?php echo "$msg"; ?>
    </div>
    <div>
        
        <table align="center" border="1px" width='50%'>
            <tr><th>Num</th><th>Nom&prenom</th><th>ville</th><th>dateNaissance</th><th>sexe</th><th>sports Preferes</th><th>Diplomes</th><th>Operations</th></tr>
            <?php 
            $con=mysqli_connect('localhost','root','','ecoles');
            $res=mysqli_query($con,'select * from insc');
            while ($li=mysqli_fetch_array($res))
             echo "<tr><th>$li[0]</th><th>$li[1]</th><th>$li[2]</th><th>$li[3]</th><th>$li[4]</th><th>$li[5]</th><th>$li[6]</th><th><a href='a.php?op=0&id=$li[0]'>
             Charger |  </a><a href='a.php?op=1&id=$li[0]'>Supprimer</a></th></tr>";
            mysqli_close($con);
            
            ?>
        </table>


    </div>
</body>
</html>