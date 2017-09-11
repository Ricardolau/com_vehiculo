<?php
// No permitir acceso directo al archivo
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.formvalidator');
JHtml::_('behavior.keepalive');
JFactory::getDocument()->addScriptDeclaration("
		Joomla.submitbutton = function(task)
		{
			if (task == 'vehiculotipo.cancel' || document.formvalidator.isValid(document.getElementById('vehiculotipo-form')))
			{
				Joomla.submitform(task, document.getElementById('vehiculotipo-form'));
			}
		};
");

?>
<form action="<?php echo JRoute::_('index.php?option=com_vehiculo&layout=edit&id='.(int) $this->item->id); ?>"
      method="post" name="adminForm" id="vehiculotipo-form" class="form-validate">
        <fieldset class="adminform">
                <legend><?php echo JText::_( 'Detalles de la tipo de vehiculo' ); ?></legend>
                <ul class="adminformlist">
<?php foreach($this->form->getFieldset() as $field): ?>
                        <li><?php echo $field->label;echo $field->input;?></li>
<?php endforeach; ?>
                </ul>
        </fieldset>
        <div>
                <input type="hidden" name="task" value="marca.edit" />
                <?php echo JHtml::_('form.token'); ?>
        </div>
</form>
