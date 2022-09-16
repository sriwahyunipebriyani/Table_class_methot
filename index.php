<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="60% " height="600px" border="1">
        <tr height="100px">
            <td width="100%">
                <a href = "index.php?id=1">Profile</a>
                <a  href= "index.php?id=2">Absen</a>
                <a  href= "index.php?id=3">Nilai</a>
            </td>
        </tr>
        <tr>
            <td>
          
            <?php if(isset($_GET['id'])){
                 switch($_GET['id']){
                    case 1:
                     include('Profile.php');
                     break;
                     case 2:
                     include('Absensi.php');
                     break;
                     case 3:
                         include('Nilai.php');
                         break;

            }
        }
            ?>
            
            </td>
        </tr>
        
    </table>

</body>
</html>