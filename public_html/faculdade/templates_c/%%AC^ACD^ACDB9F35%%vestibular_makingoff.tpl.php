<?php /* Smarty version 2.6.26, created on 2012-01-31 23:08:01
         compiled from vestibular_makingoff.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" href="<?php echo $this->_tpl_vars['basePATH']; ?>
/_css/prettyPhoto.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['basePATH']; ?>
/_js/jquery.prettyPhoto.js">
</script>
<link type="text/css" href="<?php echo $this->_tpl_vars['basePATH']; ?>
/_css/jquery.jcarousel.css" rel="stylesheet" />
<link type="text/css" href="<?php echo $this->_tpl_vars['basePATH']; ?>
/_css/_img/tango/skin.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['basePATH']; ?>
/_js/jquery.jcarousel.pack.js">
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".galeria").jcarousel({
            scroll: 4,
            visible: 5
        });
        $(".galeria img").click(function(){
            var source = $(this).attr('rel');
            $('#big_makingoff').attr('src',source);
        });
    });
</script>
<div class="box">
    <ul class="jcarousel-skin-tango galeria">
        <?php $_from = $this->_tpl_vars['fotos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['foto']):
?>
        <li>
            <img style="cursor: pointer;" rel="http://faculdade.<?php echo $this->_tpl_vars['dominio']; ?>
/_img/makingoff/<?php echo $this->_tpl_vars['foto']; ?>
" src="http://faculdade.<?php echo $this->_tpl_vars['dominio']; ?>
/_img/makingoff/thumbs/<?php echo $this->_tpl_vars['foto']; ?>
" />
        </li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
    <p class="instrucoes">
        * Clique nas imagens para ampliar!
    </p>
    <div style="text-align: center">
        <img src="http://faculdade.<?php echo $this->_tpl_vars['dominio']; ?>
/_img/makingoff/<?php echo $this->_tpl_vars['fotos']['1']; ?>
" id="big_makingoff" />
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>