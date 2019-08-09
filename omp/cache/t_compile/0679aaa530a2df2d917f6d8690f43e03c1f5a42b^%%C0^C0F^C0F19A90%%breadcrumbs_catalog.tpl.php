<?php /* Smarty version 2.6.25-dev, created on 2018-05-07 14:10:15
         compiled from frontend/components/breadcrumbs_catalog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/components/breadcrumbs_catalog.tpl', 18, false),array('function', 'url', 'frontend/components/breadcrumbs_catalog.tpl', 21, false),array('modifier', 'escape', 'frontend/components/breadcrumbs_catalog.tpl', 35, false),)), $this); ?>

<nav class="cmp_breadcrumbs cmp_breadcrumbs_catalog" role="navigation" aria-label="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.breadcrumbLabel"), $this);?>
">
	<ol>
		<li>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index','router' => @ROUTE_PAGE), $this);?>
">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.homepageNavigationLabel"), $this);?>

			</a>
			<span class="separator"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.breadcrumbSeparator"), $this);?>
</span>
		</li>
		<li>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog'), $this);?>
">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.catalog"), $this);?>

			</a>
			<span class="separator"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.breadcrumbSeparator"), $this);?>
</span>
		</li>
		<?php if ($this->_tpl_vars['parent']): ?>
			<li>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => $this->_tpl_vars['type'],'path' => $this->_tpl_vars['parent']->getPath()), $this);?>
">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['parent']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

				</a>
				<span class="separator"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.breadcrumbSeparator"), $this);?>
</span>
			</li>
		<?php endif; ?>
		<li class="current">
			<h1>
				<?php if ($this->_tpl_vars['currentTitleKey']): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['currentTitleKey']), $this);?>

				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['currentTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

				<?php endif; ?>
			</h1>
		</li>
	</ol>
</nav>