<?php /* Smarty version 2.6.26, created on 2012-01-27 15:52:29
         compiled from ../../templates/cnecvirtual_lembrar-senha.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['basePATH']; ?>
/_js/jquery.validate.min.js">
</script>
<script type="text/javascript">
 $(document).ready(function(){
        var obrigatorio = "Campo obrigatório!";
          $("#lembrarSenha").validate({
            rules: {
                matricula: {
                    required: true
                }                
            },
            messages: {
                matricula: {
                    required: obrigatorio
                }
            }
        });
    });
</script>
<div class="box">
    <div class="titulo">
        <h2>Cnecvirtual</h2>
    </div>
    <?php if ($this->_tpl_vars['alert_msg']): ?>
    <p class="error"><?php echo $this->_tpl_vars['alert_msg']; ?>
</p>
    <?php else: ?>
    <h3>Gerar senha nova!</h3>
    <form method="POST" id="lembrarSenha">
        <p><label for="matricula">Matrícula:</label></p>
        <p><input type="text" name="matricula" id="matricula" class="inpute gde" /></p>
        <p><label for="email">Email:</label></p>
        <p><input type="text" name="email" id="email" class="inpute gde" /></p>
        <p>
            <button type="submit">
                Enviar
            </button>
        </p>
    </form>
    <?php endif; ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>