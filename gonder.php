 <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

		$gittiMesaji = " ";  

    if(isset($_POST['submit'])){
        $isimsoyisim			=$_POST['isimsoyisim'];
        $telefon				=$_POST['telefon'];
        $email					=$_POST['email'];
        $dogumtarihi			=$_POST['dogumtarihi'];
        $tckimlik				=$_POST['tckimlik'];
        $yabanci				=$_POST['yabanci'];
        $dogumyeri				=$_POST['dogumyeri'];
        $askerlik				=$_POST['askerlik'];
        $ehliyet				=$_POST['ehliyet'];
        $medeni					=$_POST['medeni'];
        $evlenmetarih			=$_POST['evlenmetarih'];
        $esbilgileri			=$_POST['esbilgileri'];
        $cocuk					=$_POST['cocuk'];
        $ikamet					=$_POST['ikamet'];
        $sabika					=$_POST['sabika'];
        $temas					=$_POST['temas'];
        $okul1					=$_POST['okul1'];
        $okul1sehir1			=$_POST['okul1sehir1'];
        $okul1mezuniyettarih1	=$_POST['okul1mezuniyettarih1'];
        $okul2					=$_POST['okul2'];
        $okul2sehir2			=$_POST['okul2sehir2'];
        $okul2mezuniyettarih2	=$_POST['okul2mezuniyettarih2'];
        $okul3					=$_POST['okul3'];
        $okul3sehir3			=$_POST['okul3sehir3'];
        $okul3mezuniyettarih3	=$_POST['okul3mezuniyettarih3'];
        $okul4					=$_POST['okul4'];
        $okul4sehir4			=$_POST['okul4sehir4'];
        $okul4mezuniyettarih4	=$_POST['okul4mezuniyettarih4'];
        $okul5					=$_POST['okul5'];
        $okul5sehir5			=$_POST['okul5sehir5'];
        $okul5mezuniyettarih5	=$_POST['okul5mezuniyettarih5'];
        $okul6					=$_POST['okul6'];
        $okul6sehir6			=$_POST['okul6sehir6'];
        $okul6mezuniyettarih6	=$_POST['okul6mezuniyettarih6'];
        $ingokuma				=$_POST['ingokuma'];
        $ingyazma				=$_POST['ingyazma'];
        $ingkonusma				=$_POST['ingkonusma'];
        $inganlama				=$_POST['inganlama'];
        $ingokuma				=$_POST['arokuma'];
        $ingyazma				=$_POST['aryazma'];
        $ingkonusma				=$_POST['arkonusma'];
        $inganlama				=$_POST['aranlama'];
        $ingokuma				=$_POST['farokuma'];
        $ingyazma				=$_POST['faryazma'];
        $ingkonusma				=$_POST['farkonusma'];
        $inganlama				=$_POST['faranlama'];
        $ingokuma				=$_POST['dil1okuma'];
        $ingyazma				=$_POST['dil1yazma'];
        $ingkonusma				=$_POST['dil1konusma'];
        $inganlama				=$_POST['dil1anlama'];
        $ingokuma				=$_POST['dil2okuma'];
        $ingyazma				=$_POST['dil2yazma'];
        $ingkonusma				=$_POST['dil2konusma'];
        $inganlama				=$_POST['dil2anlama'];
        $program1				=$_POST['program1'];
        $program2				=$_POST['program2'];
        $program3				=$_POST['program3'];
        $program4				=$_POST['program4'];
        $firma1					=$_POST['firma1'];
        $firma1gorev			=$_POST['firma1gorev'];
        $firma1telefon			=$_POST['firma1telefon'];
        $firma1yonetici			=$_POST['firma1yonetici'];
        $firma1isegiris			=$_POST['firma1isegiris'];
        $firma1cikis			=$_POST['firma1cikis'];
        $firma1ucret			=$_POST['firma1ucret'];
        $firma1neden			=$_POST['firma1neden'];
        $firma2					=$_POST['firma2'];
        $firma2gorev			=$_POST['firma2gorev'];
        $firma2telefon			=$_POST['firma2telefon'];
        $firma2yonetici			=$_POST['firma2yonetici'];
        $firma2isegiris			=$_POST['firma2isegiris'];
        $firma2cikis			=$_POST['firma2cikis'];
        $firma2ucret			=$_POST['firma2ucret'];
        $firma2neden			=$_POST['firma2neden'];
        $firma3					=$_POST['firma3'];
        $firma3gorev			=$_POST['firma3gorev'];
        $firma3telefon			=$_POST['firma3telefon'];
        $firma3yonetici			=$_POST['firma3yonetici'];
        $firma3isegiris			=$_POST['firma3isegiris'];
        $firma3cikis			=$_POST['firma3cikis'];
        $firma3ucret			=$_POST['firma3ucret'];
        $firma3neden			=$_POST['firma3neden'];
        $firma4					=$_POST['firma4'];
        $firma4gorev			=$_POST['firma4gorev'];
        $firma4telefon			=$_POST['firma4telefon'];
        $firma4yonetici			=$_POST['firma4yonetici'];
        $firma4isegiris			=$_POST['firma4isegiris'];
        $firma4cikis			=$_POST['firma4cikis'];
        $firma4ucret			=$_POST['firma4ucret'];
        $firma4neden			=$_POST['firma4neden'];
        $firma5					=$_POST['firma5'];
        $firma5gorev			=$_POST['firma5gorev'];
        $firma5telefon			=$_POST['firma5telefon'];
        $firma5yonetici			=$_POST['firma5yonetici'];
        $firma5isegiris			=$_POST['firma5isegiris'];
        $firma5cikis			=$_POST['firma5cikis'];
        $firma5ucret			=$_POST['firma5ucret'];
        $firma5neden			=$_POST['firma5neden'];
          
        $mail = new PHPMailer();
		
        $mail->isSMTP();
        $mail->Host = 'smtp.yandex.com.tr';
          
        $mail->SMTPAuth = true;
		$mail->Port = 587;
		$mail->Username = '********';
        $mail->Password = 'g*******'; 
        $mail->CharSet  = 'utf-8';
        $mail->From = ('s*******');
        $mail->FromName = ('*********');
        $mail->AddAddress ($email);
        $mail->AddCC ('w*********');
        $mail->IsHTML(true);
		  
		$mail->Subject = ('Basvuru - ' .$isimsoyisim);
          
        // HTML Mesaj başlangıç
          
        $mail->Body = "
        <html>
            <body>
                <table style='width:90%' align='center';>
					<tbody>
				<tr>
								<td>
								<p><strong>isim soyisim</strong></p>
								</td>
								<td><strong>email</strong></td>
								<td><strong>telefon</strong></td>
				</tr>
				<tr>
								<td>$isimsoyisim</td>
								<td>$email</td>
								<td>$telefon</td>
				</tr>
				<tr>
								<td>doğum tarihi</td>
								<td>tc kimlik</td>
								<td>yabancı ise ülke</td>
				</tr>
				<tr>
								<td>$dogumtarihi</td>
								<td>$tckimlik</td>
								<td>$yabanci</td>
				</tr>
				<tr>
								<td>yabancı dil</td>
								<td>tc kimlik</td>
								<td>yabancı ise ülke</td>
				</tr>
				<tr>
								<td>$yabancidil</td>
								<td></td>
								<td></td>
				</tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Mesaj bitti
          
              
        if(!$mail->Send()) {
            echo "Hata: ".$mail->ErrorInfo;
    }
        else {
        $gittiMesaji = "<br><p class='bg-primary text-center h5 pt-2 pb-2'>Sayın $isimsoyisim, 
mesajınız gönderildi...</p>";
    }
  
    }
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Lütfen Bekleyin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
  <style>
body {background-color:#0C1549; color:#fff;}
#nav1 {
  border: 0px solid;
  padding: 10px;
  box-shadow: 5px 10px 8px rgba(255, 255, 255, 0.50);
}

.form-control {
    background-color: #dae7fc;
}
</style>

</head>
<body>

<div class="container text-center">

<div id="nav1" class="alert alert-primary mt-2 d-md-none" role="alert" style="background:#F9B200;">
  <a href="https://saffanglobal.com"><img class="p-2" src="saffan-logo.png" style="height:40px;"></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="https://saffanglobal.com" class="btn btn-light" role="button" aria-pressed="true"><img src="anasayfa.svg" height="20" width="20"></a> <a href="mailto:ik@saffanglobal.com?Subject=İş%20Başvurusu" class="btn btn-light" role="button" aria-pressed="true"><img src="mail.svg" height="20" width="20"></a>
</div>

<div id="nav1" class="alert alert-primary mt-2 d-none d-md-block" role="alert" style="background:#F9B200;">
  <a href="https://saffanglobal.com"><img class="p-2" src="saffan-logo.png"></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="https://saffanglobal.com" class="btn btn-light" role="button" aria-pressed="true"><img src="anasayfa.svg" height="20" width="20"></a> <a href="mailto:ik@saffanglobal.com?Subject=İş%20Başvurusu" class="btn btn-light" role="button" aria-pressed="true"><img src="mail.svg" height="20" width="20"></a>
</div>

   </div>
   
<div class="container">

    <h3 class="text-center">İş Başvurunuz Kaydedildi.</h3>
    <h4 class="text-center">Ana sayfaya yönlendiriliyorsunuz. Lütfen bekleyin!</h4>
<?php echo "$gittiMesaji"; ?>

<table style='width:90%' align='center';>
		<tbody>

    </tbody>
</table>

</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
