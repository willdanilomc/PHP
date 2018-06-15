
<?php (($login) and ($senha)){

?>

<form action="verificacao.php" method="post">
    <input type="texto" name="login">
    <input type="text" name="senha">
    <button type="submit">entrar</button>
</form>

<?php
else{
    echo "voce não fez login";
}}}?>