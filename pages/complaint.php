<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2b81570bc8.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="imgContainer">
            <img src="../assets/log.jpg"/>
        </div>
        <div class="itemsContainer">
            <ul>
                <li><a href="acceuil.html" class="items" ><i class="fa-solid fa-house" style="color: rgb(23, 23, 96);"></i></a></li>
                <li><a href="demande.html" class="items"><i class="fa-solid fa-file-circle-plus" style="color: rgb(23, 23, 96);"></i></a></li>
                <li><a href="login.php" class="items"><i class="fa-solid fa-user-tie" style="color: rgb(23, 23, 96);"></i></a></li>
                <li><a href="complaint.php" class="items"><i class="fa-solid fa-triangle-exclamation" style="color: rgb(23, 23, 96);"></i></a></li>
            </ul>
        </div>
   </nav>
   <section class="complaintSec">
        <div class="complaintHolder">
            <form action="../php/complaintSend.php" method="POST">
                <div class="object">
                    <input type="email" placeholder="E-Mail.." name='mail' id='mail'/>
                </div>
                <div class="object">
                    <input type="text" placeholder="Object..." name='object' id='object'>
                </div>
                <div class="description">
                    <textarea placeholder="Describe your problem..." name='desc' id='desc'></textarea>
                </div>
                <button disabled name="subBtn" id='subBtn' type='submit'>Send Complaint</button>
            </form>
        </div>
    </section>
    <script src='../js/complaint.js'></script>
</body>
</html>