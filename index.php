<?php
if($_COOKIE)
$login_cookie = $_COOKIE['login'];
if(isset($login_cookie)){
    echo"bem-vindo, $login_cookie <br>";
    echo "essas informacaes  <font color='red'>PODEM</font> ser acessadas por voce";
}else{
    echo"bem-vindo, convidado <br>";
    echo"essas informacao <font color='red>nao podem</font> ser acessadas por voce";
    echo"<br><a href='login.html'>faca login</a> para ler o conteudo";
}
?>