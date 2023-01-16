<?php

    if(isset($_POST['submit']))
    {
        /* 
        print_r($_POST['data_transf_cust']);
        print_r($_POST['doc_encam']);
        print_r($_POST['un_prod_sigla']);
        print_r($_POST['un_prod_nome']);
        print_r($_POST['cx_num_ant']);
        print_r($_POST['cx_num_cust']);
        print_r($_POST['cod_clas_doc']);
        print_r($_POST['data_lim']);
        print_r($_POST['desc_docs']);
        print_r($_POST['prazo_guarda']);
        print_r($_POST['destino']);
        print_r($_POST['un_arq']);
        print_r($_POST['conjunto']);
        print_r($_POST['estante']);
        print_r($_POST['prateleira']);   
        */

        include_once('config.php');
        
        $data_transf_cust = $_POST['data_transf_cust'];
        $doc_encam = $_POST['doc_encam'];
        $un_prod_sigla = $_POST['un_prod_sigla'];
        $un_prod_nome = $_POST['un_prod_nome'];
        $cx_num_ant = $_POST['cx_num_ant'];
        $cx_num_cust = $_POST['cx_num_cust'];
        $cod_clas_doc = $_POST['cod_clas_doc'];
        $data_lim = $_POST['data_lim'];
        $desc_docs = $_POST['desc_docs'];
        $prazo_guarda = $_POST['prazo_guarda'];
        $destino = $_POST['destino'];
        $un_arq = $_POST['un_arq'];
        $conjunto = $_POST['conjunto'];
        $estante = $_POST['estante'];
        $prateleira = $_POST['prateleira'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro(data_transf_cust,doc_encam,un_prod_sigla,un_prod_nome,cx_num_ant,cx_num_cust,cod_clas_doc,data_lim,desc_docs,prazo_guarda,destino,un_arq,conjunto,estante,prateleira) 
        VALUES ('$data_transf_cust','$doc_encam','$un_prod_sigla','$un_prod_nome','$cx_num_ant','$cx_num_cust','$cod_clas_doc','$data_lim','$desc_docs','$prazo_guarda','$destino','$un_arq','$conjunto','$estante','$prateleira')");

    }

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Controle de Arquivos</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
            
        .box {
            
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -30%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 15px;
            width: 40%;
            color: white;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 3px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            font-size: 20px;
        }

        #loc {
            border: 3px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            font-size: 15px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_transf_cust {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><b>SICONTRAR</b></legend>
                <br>
                <label for="data_transf_cust">Data de transferência ao arquivo de custódia</label>
                <input type="date" name="data_transf_cust" id="data_transf_cust" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="doc_encam" id="doc_encam" class="inputUser" required>
                    <label for="doc_encam" class="labelInput">Documento de encaminhamento</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="un_prod_sigla" id="un_prod_sigla" class="inputUser" required>
                    <label for="un_prod_sigla" class="labelInput">Unidade produtora - Sigla</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="un_prod_nome" id="un_prod_nome" class="inputUser" required>
                    <label for="un_prod_nome" class="labelInput">Unidade produtora - Nome</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="cx_num_ant" id="cx_num_ant" class="inputUser" required>
                    <label for="cx_num_ant" class="labelInput">Caixa - Número anterior</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="cx_num_cust" id="cx_num_cust" class="inputUser" required>
                    <label for="cx_num_cust" class="labelInput">Caixa - Número custódia</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="cod_clas_doc" id="cod_clas_doc" class="inputUser" required>
                    <label for="cod_clas_doc" class="labelInput">Código classificação documental</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="data_lim" id="data_lim" class="inputUser" required>
                    <label for="data_lim" class="labelInput">Datas-limite</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="desc_docs" id="desc_docs" class="inputUser" required>
                    <label for="desc_docs" class="labelInput">Descrição dos documentos</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="prazo_guarda" id="prazo_guarda" class="inputUser" required>
                    <label for="prazo_guarda" class="labelInput">Prazo de Guarda</label>
                </div>
                <p>Destinação:</p>
                <input type="radio" id="eliminar" name="destino" value="eliminar" required>
                <label for="eliminar">EL - Eliminar</label>
                <br>
                <input type="radio" id="permanente" name="destino" value="permanente" required>
                <label for="permanente">PE - Permanente</label>
                <br><br>
                <div>
                    <fieldset>
                        <legend id="loc"><b>Localização</b></legend><br>
                        <div class="inputBox">
                            <input type="text" name="un_arq" id="un_arq" class="inputUser" required>
                            <label for="un_arq" class="labelInput">Unidade de arquivo</label>
                        </div><br><br>
                        <div class="inputBox">
                            <input type="text" name="conjunto" id="conjunto" class="inputUser" required>
                            <label for="conjunto" class="labelInput">Conjunto</label>
                        </div><br><br>
                        <div class="inputBox">
                            <input type="text" name="estante" id="estante" class="inputUser" required>
                            <label for="estante" class="labelInput">Estante</label>
                        </div><br><br>
                        <div class="inputBox">
                            <input type="text" name="prateleira" id="prateleira" class="inputUser" required>
                            <label for="prateleira" class="labelInput">Prateleira</label>
                        </div>
                    </fieldset>
                </div><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>


    </div>
</body>

</html>