<!DOCTYPE html>

		<?php include ("cabecalho.php");?>


					<h1> Bem vindo ao Controle de Tonner!</h1><br>


					<h2>Olá <input type="user" name="user"> o que você gostaria de fazer?</h2>

                    <select name="acao" id="acao" onChange="redirectPage(this.value)">
                        <option value="">Selecionar</option>
                        <option value="cad">Cadastro</option>
                        <option value="troca">Troca</option>
                        <option value="reset">Reset</option>
                    </select>

<script>
    function redirectPage(v) {
    document.location.href = 'cadastro.php?param='+v;
    document.location.href = 'troca.php?param='+v;
    document.location.href = 'reset.php?param='+v;      
}
</script>
	

        <?php include("rodape.php");?>	