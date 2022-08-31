<?php
include "../db/conn.php";
session_start();
?>
<html>

<head>
    <title>Color Blindness Test</title>
    <link href="../assets/css/startbaru.css" rel="stylesheet" type="text/css">
 </head>

<body>
    <!-- <h1><?php echo $_SESSION['user']?></h1> -->
    <div class="title"><img src="../assets/img/bbb.png" width="240" height="80" style="float;left;"></div>
    <?php
    //start execute quiz
    
        if(isset($_POST['click'])){
            $_SESSION['clicks'] += 1 ;
            $c = $_SESSION['clicks'];

            if(isset($_POST['userans'])) { 
                $user = $_SESSION['user']; // mengambil nilai nama user yg dimasukkan dari bio.php
                $userselected = $_POST['userans']; //untuk mengambil jawaban user yg dipilih
                $soal = $c-1;// menadapartkan id sebelumnya
                $queryans = "SELECT * FROM `images`where id='$soal'"; //query untuk mengambil jawaban benar dari db per soal
                $resultanswer = mysqli_query($conn,$queryans); //eksekusi berdasarkan query queryans
                $numanswer = mysqli_num_rows($resultanswer); //mengambil 1 baris data berdasarkan hasil resultanswer
                $rowanswer = mysqli_fetch_array($resultanswer,MYSQLI_ASSOC); //
                $answer = $rowanswer['jawaban']; //kunci

                $query = "INSERT INTO hasil (nama,tgl_tes,userans,answer) VALUES
                ('$user',now(),'$userselected','$answer')"; // insert ke table hasil untuk menyimpan jawaban yg nanti akan di proses setelah soal selesai
                $create = mysqli_query($conn,$query); // eksekusi query
            }
        }else{
            $c = $_SESSION['clicks']=1;
        }
    ?>
    <center><form action="" method="post">
        <table>
            <?php if(isset($c)) {   
                $fetchqry = "SELECT * FROM `images` where id='$c'"; 
    $result=mysqli_query($conn,$fetchqry);
    $num=mysqli_num_rows($result);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
          ?>
            <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 11){ ?>
            <tr>
                <td>
                    <h3><br>
                        <img src="../assets/img/<?php echo $row['image'];?>" height="300" weight="300">
                    </h3>
                </td>
            </tr>

            <tr>
                <td><label class="container">
     <input required type="radio" checked="checked" name="userans" value="<?php echo $row['jawab_a'];?>">&nbsp;
                    <?php echo $row['jawab_a']; ?>
     <span class="checkmark"></span>
    </label>
   <tr>
                <td>
     <label class="container">
     <input required type="radio" checked="checked" name="userans" value="<?php echo $row['jawab_b'];?>">&nbsp;
                    <?php echo $row['jawab_b'];?>
     <span class="checkmark"></span>
    </label>
            </tr>
            <tr>
                <td>
     <label class="container">
     <input required type="radio" checked="checked" name="userans" value="<?php echo $row['jawab_c'];?>">&nbsp;
                    <?php echo $row['jawab_c']; ?>
     <span class="checkmark"></span>
                </label>
            </tr>
            <tr>
                <td>
     <label class="container">
     <input required type="radio" checked="checked" name="userans" value="<?php echo $row['jawab_d'];?>">&nbsp;
                    <?php echo $row['jawab_d']; ?>
     <span class="checkmark"></span>
    </label>
    </td>
            </tr>
            <tr>
                <td><button class="button3" name="click">Next</button></td>
            </tr>
            <?php } ?>
        </table>
    </form></center>
    <?php
    if($_SESSION['clicks']>10){

        $user = $_SESSION['user']; // mengambil nilai nama user yg dimasukkan dari bio.php
        $userselected = $_POST['userans']; //untuk mengambil jawaban user yg dipilih
        $soal = $c;
        $queryans = "SELECT * FROM `images`where id='$soal'"; //query untuk mengambil jawaban benar dari db per soal
        $resultanswer = mysqli_query($conn,$queryans);
        $numanswer = mysqli_num_rows($resultanswer);
        $rowanswer = mysqli_fetch_array($resultanswer,MYSQLI_ASSOC);
        $answer = $rowanswer['jawaban'];

        $query = "INSERT INTO hasil (nama,tgl_tes,userans,answer) VALUES
        ('$user',now(),$userselected,$answer)"; // insert ke table hasil untuk menyimpan jawaban yg nanti akan di proses setelah soal selesai
        $create = mysqli_query($conn,$query); // eksekusi query


    $queryhasil = "SELECT `answer`, `userans`FROM hasil WHERE nama='$user' AND tgl_tes=CURDATE()";
    $hasilfetch = mysqli_query($conn,$queryhasil);
    while ($row3 = mysqli_fetch_array($hasilfetch, MYSQLI_ASSOC)) { //looping data hasilfetch (hasil jawaban)
        if($row3['answer']==$row3['userans']){
            $_SESSION['score'] += 1 ;
        }
    }

?>
            <center>
            <img src="../assets/img/kamuhebat.png" width="300" height="300" style="float;left;">
            <br>
            <h2>Result <?php echo $user?></h2>
            <span>The Correct Answer is &nbsp;
            <?php echo $no = $_SESSION['score']; 
            session_unset(); ?></span><br>
            <span>Your Score:&nbsp
            <?php echo $no*10; ?></span>
            
            <br><a href="http://localhost/buta-warna/index.php"><button name="Home"  class="home" value="home">Back to Home</button></a>
            <a href="javascript:window.print()"><button name="print" class="print" value="print">Print This Page</button></a>

            <a href="download-pdf.php"><p>Download PDF</p></a>

            <div id="share-sossial-buttons">
                <p><h2>Share Your Great Score!!</h2>
                <!-- Untuk Email -->
                <a href="mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://dumetschool.com">
                    <img src="../assets/img/sosmed/mail.png" weigth="55" height="55" alt="Email" />
                </a>
                <!-- Untuk Facebook -->
                <a href="http://www.facebook.com/sharer.php?u=https://dumetschool.com">
                    <img img src="../assets/img/sosmed/fb.png" weigth="55" height="55" alt="Facebook" />
                </a>
                <!-- Untuk Google+ -->
                <a href="https://plus.google.com/share?url=https://dumetschool.com">
                    <img img src="../assets/img/sosmed/g+.png" weigth="55" height="55" alt="Google" />
                </a>
                <!-- Untuk Twitter -->
                <a href="https://twitter.com/share?url=https://dumetschool.com&text=Simple%20Share%20Buttons&hashtags=simplesharebuttons" >
                    <img img src="../assets/img/sosmed/tw.png" weigth="55" height="55"alt="Twitter" />
                </a>
            </div>
            </center>

        <?php } ?>
</body>

</html>