<?php

namespace Carrooi\Favorites\Model\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 * @author David Kudera
 */
trait TFavorites
{


	/**
	 * @var \Doctrine\Common\Collections\ArrayCollection
	 */
	private $favorites;


	private function initFavorites()
	{
		if (!$this->favorites) {
			$this->favorites = new ArrayCollection;
		}
	}


	/**
	 * @param \Carrooi\Favorites\Model\Entities\IFavoriteItemEntity $favorite
	 * @return $this
	 */
	public function addFavorite(IFavoriteItemEntity $favorite)
	{
		$this->initFavorites();
		$this->favorites->add($favorite);

		return $this;
	}


	/**
	 * @param \Carrooi\Favorites\Model\Entities\IFavoriteItemEntity $favorite
	 * @return $this
	 */
	public function removeFavorite(IFavoriteItemEntity $favorite)
	{
		$this->initFavorites();
		$this->favorites->removeElement($favorite);

		return $this;
	}


	/**
	 * @return \Carrooi\Favorites\Model\Entities\IFavoriteItemEntity[]
	 */
	public function getFavorites()
	{
		$this->initFavorites();

		return $this->favorites->toArray();
	}

}
