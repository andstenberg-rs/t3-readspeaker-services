<?php

namespace Readspeaker\ReadspeakerServices\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Page\PageRenderer; 


class ReadspeakerServicesController extends ActionController 
{

	/**
	 * Fires when the page integrates with webReader.
	 * 
	 * @return Void
	 */
	public function webreaderAction() {
		return $this->responseFactory->createResponse()->withStatus(200,'webReader integrated')->withBody($this->streamFactory->createStream($this->view->render()));;
	}


}
