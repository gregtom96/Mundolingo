<?php include_once('variables.php'); ?>

<?php
    if(isset($_POST['email']) && isset($_POST['password'])) //si les 2 champs ont été remplis
    {
        foreach($users as $user)
        {
            if($user['email']===$_POST['email'] && $user['password']===$_POST['password'])
            {
                $loggedUser = [
                    'email' => $user['email'],
                ];
            }
            else 
            {
                $errorMessage = sprintf('The informations sent do not allow you to be identified : (%s/%s)',
                    $_POST['email'],
                    $_POST['password']
                );
            }
        }
    }
?>

<!-- Si l'utilisateur existe, on affiche le reste de la page -->
<?php if(isset($loggedUser)): ?>
    <p> Hi <?php echo $loggedUser['email']; ?> 
    and welcome on your session ! </p>

<!-- Si l'utilisateur n'existe pas -->
<?php else: ?>
    <!-- On redirige vers la page de login -->
    <meta http-equiv="refresh" content="0; url=../index.php" />
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teach U By Rocio</title>
        <link href="../style/reservation.css" rel="stylesheet">
		<script src="../scripts/functions.js" defer></script>
		<script src="../scripts/main.js" defer></script>
    </head>

    <body>
        <h1>Teach U by Rocio</h1>
        <?php include('nav.php'); ?>
        <main>
            <h2>Make your reservation</h2>
            <section>
                <form method="get" action="">
                    <p>
                        <label for="teacher">Choose your teacher</label>
                        <select name="teacher" id="teacher" required>
                            <option value="Rocio">Rocio</option>
                            <option value="Carolina">Carolina</option>
                            <option value="Gisele">Gisele</option>
                        </select>
                    </p>
                    <p>
                        <label for="date">Choose a schedule for your class</label>
                        <input type="date" id="date" name="date" required>
                    </p>
                    <p>
                        <label for="time">At what time ?</label>
                        <input type="time" id="time" name="time" required>
                    </p>
                    <p>
                        <button>Reserve your class</button>
                    </p>
                </form>
            </section>
        </main>
    </body>
</html>