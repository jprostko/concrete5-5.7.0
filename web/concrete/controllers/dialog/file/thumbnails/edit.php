<?
namespace Concrete\Controller\Dialog\File\Thumbnails;
use \Concrete\Controller\Backend\UserInterface\File as BackendInterfaceFileController;
use \Concrete\Core\File\EditResponse as FileEditResponse;
use Concrete\Core\File\Type\Type;

class Edit extends BackendInterfaceFileController {

	protected $viewPath = '/dialogs/file/thumbnails/edit';

	protected function canAccess() {
        $type = $this->file->getTypeObject();
		return $this->permissions->canEditFile() && $type->getGenericType() == Type::T_IMAGE;
	}

	public function view() {

	}

	public function update_thumbnail() {
		if ($this->validateAction()) {
			$fp = new Permissions($this->file);
			if ($fp->canEditFileProperties()) {
				$fv = $this->file->getVersionToModify();

				$sr = new FileEditResponse();
				$sr->setFile($this->file);
				$sr->setMessage(t('File updated successfully.'));
				$sr->setAdditionalDataAttribute('value', $value);
				$sr->outputJSON();


			} else {
				throw new Exception(t('Access Denied.'));
			}
		} else {
			throw new Exception(t('Access Denied.'));
		}
	}

}

