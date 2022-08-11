<?php declare(strict_types = 1);

namespace App\Module\PubV1;

use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\OpenApi;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Annotation\Controller\Tag;
use Apitte\Core\Http\ApiRequest;
use Apitte\Core\Http\ApiResponse;
use Apitte\OpenApi\ISchemaBuilder;
use Psr\Http\Message\ResponseInterface;

/**
 * @Path("/user")
 */
class UserController extends BasePubV1Controller
{

	/**
	 * @Path("/create")
	 * @Method("POST")
	 * @RequestBody(entity="App\Api\Entity\Request\User")
	 */
	public function create(ApiRequest $request, ApiResponse $response): ResponseInterface
	{
		/** @var User $entity */
		$entity = $request->getEntity();

		return $response->withStatus(IResponse::S201_CREATED)
				->withHeader('Content-Type', 'application/json')
				->writeJsonBody($entity);
	}

}
