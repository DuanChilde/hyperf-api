<?php

declare(strict_types=1);

namespace App\Controller\Common;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key;

/**
 * Class TokenController
 * @AutoController()
 * @package App\Controller\Common
 */
class TokenController extends AbstractController
{
    public function generate()
    {
        $signer = new Sha256();
        $time = time();
        $token = (new Builder())->issuedBy('http://timedifferent.com')
            ->permittedFor('http://timedifferent.com')
            ->identifiedBy('4f1g23a12aa',true)
            ->issuedAt($time)
            ->canOnlyBeUsedAfter($time)
            ->expiresAt($time+env('JWT_TTL'))
            ->withClaim('sub',1)
            ->getToken($signer, new Key(env('JWT_SECRET')));

        return $token;
    }
}