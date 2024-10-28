<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $comentarios = htmlspecialchars($_POST['comentarios']);
    $corMaisGostou = htmlspecialchars($_POST['cores']);
    
    $novidades = isset($_POST['novidades']) ? true : false;

    
    echo "<h2>Dados Recebidos:</h2>";
    echo "Seu nome é: " . $nome . "<br>";
    echo "Seu provedor de email é: " . $email . "<br>";

    if ($corMaisGostou === 'Preto') {
        echo "<script>
                alert('O preto no geral representa tristeza, solidão, medo e isolamento. Caso você não esteja bem e precisando de ajuda, acesse o site: https://cvv.org.br/');
              </script>";
    }


    if ($novidades) {
        echo "Enviaremos para você semanalmente todas as novidades.<br>";
    }

    $palavraSite = ['gostei', 'legal', 'bom', 'interessante', 'feliz'];

    foreach ($palavraSite as $palavra) {
        if (stripos($comentarios, $palavra) !== false) {
            echo "Ficamos felizes que você deixou observações positivas sobre nosso site.<br>";
            break; 
        }
    }

}
?>
