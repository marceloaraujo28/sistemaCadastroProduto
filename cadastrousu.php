<?php

session_start();
?>

<?php
include("topSite.html");
?>

<!--  Fim do Menu   -->

<div class="cx-login">
        <h1>Cadastro</h1>
        <form method="post" action="cadusu.php">
                <input type="text" name="username" class="inputuser" placeholder="Digite o Usuário">
                <input type="password" name="password" class="inputuser" placeholder="Digite a Senha">
                <input type="password" name="reppassword" class="inputuser" placeholder="Repita sua senha">
                <input type="text" name="email" class="inputuser" placeholder="Digite o email">
                <input type="submit" class="inputsub" value="Criar">
        </form>
    </div> 
    <?php    
                if(isset($_SESSION['MsgCad'])){
                    echo "<div class='alert'>";
                    echo $_SESSION['MsgCad'];
                    unset($_SESSION['MsgCad']);
                    echo "</div>";

                }
    ?>

    
</body>
</html>
