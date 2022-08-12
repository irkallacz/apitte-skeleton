<?php declare(strict_types = 1);

namespace App\Domain\Api\Request;

use Symfony\Component\Validator\Constraints as Assert;
use Apitte\Core\Mapping\Request\BasicEntity;

final class Address extends BasicEntity
{

	/**
	 * @var string
	 *
	 * @Assert\NotBlank
	 */
	public $city;

	/**
	 * @var string
	 *
	 * @Assert\NotBlank
	 */
	public $street;

}
