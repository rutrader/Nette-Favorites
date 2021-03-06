<?php

namespace Carrooi\Favorites\Model\Entities;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\Attributes\Identifier;
use Kdyby\Doctrine\Entities\BaseEntity;

/**
 *
 * @ORM\MappedSuperclass
 *
 * @author David Kudera
 */
abstract class FavoriteItem extends BaseEntity implements IFavoriteItemEntity
{


	use Identifier;


	/**
	 * @ORM\ManyToOne(targetEntity="Carrooi\Favorites\Model\Entities\IUserEntity")
	 * @ORM\JoinColumn(onDelete="cascade")
	 * @var \Carrooi\Favorites\Model\Entities\IUserEntity
	 */
	private $user;


	/**
	 * @return \Carrooi\Favorites\Model\Entities\IUserEntity
	 */
	public function getUser()
	{
		return $this->user;
	}


	/**
	 * @param \Carrooi\Favorites\Model\Entities\IUserEntity $user
	 * @return $this
	 */
	public function setUser(IUserEntity $user)
	{
		$this->user = $user;
		return $this;
	}

}
