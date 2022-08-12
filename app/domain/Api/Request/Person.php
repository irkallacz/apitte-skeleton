<?php declare(strict_types = 1);

namespace App\Domain\Api\Request;

use Symfony\Component\Validator\Constraints as Assert;
use Apitte\Core\Mapping\Request\BasicEntity;

final class Person extends BasicEntity
{

    /**
	 * @var string
	 *
     * @Assert\NotBlank
     */
    public $name;

    /**
     * @var string
     *
     * @Assert\NotBlank
     */
    public $surname;

	/**
	 * @var Address
	 * @Assert\NotBlank
	 * @Assert\Valid
	 * @Assert\Type("App\Domain\Api\Request\Address")
	 */
	public $address;

}
