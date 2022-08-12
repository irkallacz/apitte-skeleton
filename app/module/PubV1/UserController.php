<?php declare(strict_types = 1);

namespace App\Module\PubV1;

use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\RequestBody;
use Apitte\Core\Http\ApiRequest;
use Apitte\Core\Http\ApiResponse;
use App\Domain\Api\Request\Person;
use Nette\Http\IResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * @Path("/user")
 */
class UserController extends BasePubV1Controller
{

	/**
	 * @Path("/create")
	 * @Method("POST")
	 * @RequestBody(entity="App\Domain\Api\Request\Person")
	 */
	public function create(ApiRequest $request, ApiResponse $response): ResponseInterface
	{
		/** @var Person $entity */
		$entity = $request->getEntity();

		return $response->withStatus(IResponse::S201_CREATED)
				->writeJsonBody((array) $entity);
	}

}
