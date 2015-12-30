<?php

use Entities\ITag;

/**
 * PhotoHeader
 *
 * @author Jiří Nápravník (jirinapravnik.cz), Enbros.cz
 */

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
abstract class BaseTag implements ITag
{
	use \Kdyby\Doctrine\Entities\MagicAccessors;
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	protected $id;

	/**
	 * @ORM\Column(type = "string", unique = TRUE)
	 */
	protected $name;
}
