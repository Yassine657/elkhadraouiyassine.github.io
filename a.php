<?php 
$b=isset($_POST['btn'])?$_POST['btn']:"";
    if($b==""){
        //Get
        $id=$_GET['id'];
        $op=$_GET['op'];
        if($op==0){
            //charger
            $con=mysqli_connect("localhost","root","","ecoles") or die ("ca");
            $res=mysqli_query($con,"SELECT * from insc where num=$id") or die ("yass");
            $r=mysqli_fetch_array($res);
            mysqli_close($con);
            header("location:index.php?btn=Modifier&num=$r[0]&nom=$r[1]&ville=$r[2]&dtn=$r[3]&sexe=$r[4]&sp=$r[5]&dp=$r[6]");
        }else{
            //supprimer
            $con= mysqli_connect("localhost","root","","ecoles") or die("prb1");
            $res= mysqli_query($con,"DELETE  from insc where num=$id") or die("c1");
            mysqli_close($con);
            header("location:index.php");
        }


    }else{
        //post
            $msg="";
            $nom=$_POST['nom'];
            $ville=$_POST['ville'];
            $dtn=$_POST['dtn'];
            $sexe=$_POST['sexe'];
            $tabsp=$_POST['sp'];
            $num=$_POST['num'];
            $lg="";
            foreach($tabsp as $l)
                $lg.=$l."  |  ";
            $tapdeplomes=$_POST['dp'];
            $dp="";
            foreach($tapdeplomes as $a)
                $dp.=$a."  |  ";
        if($b=="Ajouter"){
            //ajouter
            $con=mysqli_connect("localhost","root","","ecoles") or die("cc");
            $res=mysqli_query($con,"insert into insc values(null,'$nom','$ville','$dtn','$sexe','$lg','$dp')");
            if($res==-1)
                $msg='Ajouter avec succes';
            mysqli_close($con);
            header("location:index.php?msg=$msg");
        }else if ($b=="Modifier"){
            //modification
            $con= mysqli_connect("localhost","root","","ecoles") or die("bbb") ;
            $res=mysqli_query($con,"UPDATE insc SET nom='$nom', ville='$ville',dtn='$dtn',sexe='$sexe',sport='$lg',diplomes='$dp' where num=$num") or die("jjjajj") ;
            mysqli_close($con);
            header("location:index.php?salut");
        }



    }


?>