<?php
/**
 * Author: sagar <sam.coolone70@gmail.com>
 *
 */

namespace Outlook\Authorizer;

use Carbon\Carbon;

/**
 * Class Token
 * @package Outlook\Authorizer
 */
class Token
{
    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $refreshToken;

    /**
     * @var string
     */
    private $tokenType;

    /**
     * @var string
     */
    private $scopes;

    /**
     * @var integer
     */
    private $expiresIn;

    /**
     * @var integer
     */
    private $extExpiresIn;

    /**
     * @var string
     */
    private $idToken;

    /**
     * @var Carbon
     */
    private $createdAt;

    /**
     * Token constructor.
     */
    public function __construct()
    {
        $this->createdAt = Carbon::now();
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param string $refreshToken
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * @return string
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * @param string $tokenType
     */
    public function setTokenType($tokenType)
    {
        $this->tokenType = $tokenType;
    }

    /**
     * @return string
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @param string $scopes
     */
    public function setScopes($scopes)
    {
        $this->scopes = $scopes;
    }

    /**
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * @param int $expiresIn
     */
    public function setExpiresIn($expiresIn)
    {
        $this->expiresIn = $expiresIn;
    }

    /**
     * @return int
     */
    public function getExtExpiresIn()
    {
        return $this->extExpiresIn;
    }

    /**
     * @param int $extExpiresIn
     */
    public function setExtExpiresIn($extExpiresIn)
    {
        $this->extExpiresIn = $extExpiresIn;
    }

    /**
     * @return string
     */
    public function getIdToken()
    {
        return $this->idToken;
    }

    /**
     * @param string $idToken
     */
    public function setIdToken($idToken)
    {
        $this->idToken = $idToken;
    }

    /**
     * @return bool
     */
    public function isExpired()
    {
        return $this->createdAt->addSeconds($this->expiresIn)->gte(Carbon::now());
    }
}