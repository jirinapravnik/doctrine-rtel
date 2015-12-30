<?php

namespace App\Presenters;

use Kdyby\Doctrine\EntityManager;


class HomepagePresenter extends BasePresenter
{

	/**
	 * @inject
	 * @var EntityManager
	 */
	public $em;
	
	public function renderDefault()
	{
		$this->em->getClassMetadata(\Entities\ITag::class);
		$this->template->anyVariable = 'any value';
	}

}
