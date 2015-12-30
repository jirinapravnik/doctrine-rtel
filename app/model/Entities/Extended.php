<?php

/**
 * PhotoHeader
 *
 * @author Jiří Nápravník (jirinapravnik.cz), Enbros.cz
 */

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Extended extends BaseTag
{
	/**
	 * @ORM\Column(type = "boolean")
	 */
	protected $extended;
}
