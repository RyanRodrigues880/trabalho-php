<?php

class AntiXSS {
    public static $err = "XSS detectado.";

    /*
     * @function   : setEncoding
     * @return     : String
     * @parameters : str: Content you want to change the character encoding
     *               newEncoding: Character encoding you want set
     * @description: Convert the character encoding of the string
     *               to newEncoding from currentEncoding. currentEncoding
     *               detecting by function so you only need give str and
     *               newEncoding to the setEncoding function.
     */
    public static function setEncoding($str, $newEncoding) {
        $encodingList = mb_list_encodings();
        $currentEncoding = mb_detect_encoding($str, $encodingList);
        $changeEncoding = mb_convert_encoding($str, $newEncoding, $currentEncoding);

        return $changeEncoding;
    }

    /*
     * @function   : blacklistFilter
     * @return     : String
     * @parameters : str: Content you want to filter with blacklist
     * @description: Filter the content by blacklist method. Library use
     *               RSnake's XSS attack vectors. To add new attack vectors
     *               I'm continue to research.
     */
    public static function blacklistFilter($str) {
        if (preg_match("/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t(.*)>(.*)/i", $str) > 0) {
            return $str;
        } else {
            return self::$err;
        }
    }

    /*
     * @function   : whitelistFilter
     * @return     : String
     * @parameters : str: Content you want to filter with blacklist
     *               whiteFilterPattern: Some patterns for filter the
     *               data types.
     * @description: Filter the content by whitelist method. To add
     *               new data types, I'm continue to research.
     */
    public static function whitelistFilter($str, $whiteFilterPattern) {

        switch ($whiteFilterPattern) {
            case "string":
                $pattern = "([a-zA-Z]+)";
            break;
            case "number":
                $pattern = "([0-9]+)";
            break;
            case "everything":
                $pattern = "(.*)";
            break;
            default:
                $pattern = "([0-9a-zA-Z]+)";
            break;
        }

        if(preg_match("/^$pattern $/i", $str) > 0) {
            return $str;
        } else {
            return self::$err;
        }
    }

    /*
     * @function   : setFilter
     * @return     : String
     * @parameters : str: Content you want to filter with blacklist
     *               filterMethod: Library have 3 method.
     *                  -Black Method
     *                  -White Method
     *                  -Gray Method
     *               filterPattern: Some patterns for filter the
     *               data types. (You can only use with whitelist filter)
     *               noHTMLTag: Use PHP's strip_tags function to
     *               remove HTML tags from content.
     * @description: Filter the content by method.
     */
    public static function setFilter($str, $filterMethod, $filterPattern = NULL, $noHTMLTag = NULL) {

        if (urldecode($str) > 0) {
            $str = urldecode($str);
        }

        if ($noHTMLTag == 1) {
            $str = strip_tags($str);
        }

        $str = strtolower($str);
        $str = addslashes($str);
    $str = htmlspecialchars(trim($str));

        switch($filterMethod) {
            case "black":
                $str = self::blacklistFilter($str);
            break;
            case "white":
                $str = self::whitelistFilter($str, $filterPattern);
            break;
            default:
            break;
        }

        return $str;
    }
}
?>
<?php

ini_set('display_errors', 0 );

error_reporting(0);



session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))

{

  unset($_SESSION['login']);

  unset($_SESSION['senha']);

  header('location: ../index.html');

  }



require 'banco.php';



$id = null;

if (!empty($_GET['id'])) {

    $id = $_REQUEST['id'];

}



if (null == $id) {

    header("Location: index.php");

}



if (!empty($_POST)) {



    $nomeErro = null;

    $emailErro = null;

    $telefoneErro = null;

    $dataErro = null;

    $qtdErro = null;



    $nome = $_POST['nome'];

    $email = $_POST['email'];

    $telefone = $_POST['telefone'];

    $data = $_POST['data'];

    $qtd = $_POST['quantidade'];



    //Validação

    $validacao = true;

    if (empty($nome)) {

        $nomeErro = 'Por favor digite o nome.';

        $validacao = false;

    }



    if (empty($email)) {

        $emailErro = 'Por favor digite o email!';

        $validacao = false;

    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $emailErro = 'Por favor digite um email válido!';

        $validacao = false;

    }

    

    if (empty($telefone)) {

        $telefoneErro = 'Por favor digite seu TEL/CEL.';

        $validacao = false;

    }



    if (empty($data)) {

        $dataErro = date("m.d.y",$timestamp);

        $validacao = false;

    }

    

    if (empty($qtd)) {

        $qtdErro = 'Por favor digite a quantidade de pessoas.';

        $validacao = false;

    }



    // update data

    if ($validacao) {

        $pdo = Banco::conectar();

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE reservas SET nome = ?, email = ?, telefone = ?, data = ?, quantidade = ? WHERE id = ?";

        $q = $pdo->prepare($sql);

        $q->execute(array($nome, $email, $telefone, $data, $qtd, $id));

        Banco::desconectar();

        header("Location: index.php");

    }

} else {

    $pdo = Banco::conectar();

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM reservas where id = ?";

    $q = $pdo->prepare($sql);

    $q->execute(array($id));

    $data = $q->fetch(PDO::FETCH_ASSOC);

    $nome = $data['nome'];

    $email = $data['email'];

    $telefone = $data['telefone'];

    $data = $data['data'];

    $qtd = $data['quantidade'];

    Banco::desconectar();

}

?>



<!DOCTYPE html>

<html lang="pt-br">



<head>

    <meta charset="utf-8">

	<link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="vendor/select2/select2.min.css">

    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

    <title>Atualizar a Reserva</title>

</head>



<body>

<div class="container">



    <div class="span10 offset1">

        <div class="card">

            <div class="card-header">

                <h3 class="well"> Atualizar a Reserva - ID: <?php echo $id ?></h3>

            </div>

            <div class="card-body">

                <form class="form-horizontal" action="update.php?id=<?php echo $id ?>" method="post">



                    <div class="control-group <?php echo !empty($nomeErro) ? 'error' : ''; ?>">

                        <label class="control-label">Nome</label>

                        <div class="controls">

                            <input name="nome" class="form-control" size="50" type="text" placeholder="Nome"

                                   value="<?php echo !empty($nome) ? $nome : ''; ?>">

                            <?php if (!empty($nomeErro)): ?>

                                <span class="text-danger"><?php echo $nomeErro; ?></span>

                            <?php endif; ?>

                        </div>

                    </div>



                    <div class="control-group <?php echo !empty($emailErro) ? 'error' : ''; ?>">

                        <label class="control-label">Email</label>

                        <div class="controls">

                            <input name="email" class="form-control" size="40" type="text" placeholder="Email"

                                   value="<?php echo !empty($email) ? $email : ''; ?>">

                            <?php if (!empty($emailErro)): ?>

                                <span class="text-danger"><?php echo $emailErro; ?></span>

                            <?php endif; ?>

                        </div>

                    </div>



                    <div class="control-group <?php echo !empty($telefoneErro) ? 'error' : ''; ?>">

                        <label class="control-label">Telefone</label>

                        <div class="controls">

                            <input name="telefone" class="form-control" size="30" type="text" placeholder="Telefone"

                                   value="<?php echo !empty($telefone) ? $telefone : ''; ?>">

                            <?php if (!empty($telefoneErro)): ?>

                                <span class="text-danger"><?php echo $telefoneErro; ?></span>

                            <?php endif; ?>

                        </div>

                    </div>



                    <div class="control-group <?php echo !empty($dataErro) ? 'error' : ''; ?>">

                        <label class="control-label">Data da Reserva</label>

                        <div class="controls">

                            <input name="data" class="form-control" size="40" type="text" placeholder="Data"

                                   value="<?php echo !empty($data) ? $data : ''; ?>">

                            <?php if (!empty($dataErro)): ?>

                                <span class="text-danger"><?php echo $dataErro; ?></span>

                            <?php endif; ?>

                        </div>

                    </div>



                    <div class="control-group <?php echo !empty($qtdErro) ? 'error' : ''; ?>">

                        <label class="control-label">Quantidade de Pessoas</label>

                        <div class="controls">

                            <input name="quantidade" class="form-control" size="30" type="number" placeholder="Quantidade de Pessoas" min="1" max="5"

                                   value="<?php echo !empty($qtd) ? $qtd : ''; ?>">

                            <?php if (!empty($qtdErro)): ?>

                                <span class="text-danger"><?php echo $qtdErro; ?></span>

                            <?php endif; ?>

                        </div>

                    </div>



                    <br/>

                    <div class="form-actions">

                        <button type="submit" class="btn btn-warning">Atualizar</button>

                        <a href="index.php" type="btn" class="btn btn-default">Voltar</a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="

        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"

        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"

        crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->

<script src="assets/js/bootstrap.min.js"></script>

</body>



</html>
