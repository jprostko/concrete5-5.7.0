<?php
namespace Concrete\Core\Page\Type\Composer\Control\CorePageProperty;
use Loader;
use Page;
class NameCorePageProperty extends CorePageProperty {
	
	protected $ptComposerControlRequiredByDefault = true;

	public function __construct() {
		$this->setCorePagePropertyHandle('name');
		$this->setPageTypeComposerControlName(t('Page Name'));
		$this->setPageTypeComposerControlIconSRC(ASSETS_URL . '/attributes/text/icon.png');
	}

	public function publishToPage(Page $c, $data, $controls) {
        $slug = array_filter($controls, function($item) {
            if ($item instanceof UrlSlugCorePageProperty) {
                return true;
            }
            return false;
        });
		$this->addPageTypeComposerControlRequestValue('cName', $data['name']);
        if (!count($slug)) {
            $txt = new \URLify();
            $this->addPageTypeComposerControlRequestValue('cHandle', $txt->filter($data['name']));
        }
		parent::publishToPage($c, $data, $controls);
	}

	public function validate() {
		$e = Loader::helper('validation/error');
		if (!$this->getPageTypeComposerControlDraftValue()) {
			$e->add(t('You must specify a page name.'));
			return $e;
		}
	}

	public function getRequestValue() {
		$data = parent::getRequestValue();
		$data['name'] = Loader::helper('security')->sanitizeString($data['name']);
		return $data;
	}

	public function getPageTypeComposerControlDraftValue() {
		if (is_object($this->page)) {
			$c = $this->page;
			return $c->getCollectionName();
		}
	}
	

}