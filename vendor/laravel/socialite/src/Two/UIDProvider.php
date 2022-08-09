<?php

namespace Laravel\Socialite\Two;

use Exception;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Arr;

class UIDProvider extends AbstractProvider implements ProviderInterface
{
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase('https://u.id/oauth/authorize', $state);
    }

    protected function getTokenUrl()
    {
        return 'https://api-v2.u.id/api/oauth/token';
    }

    protected function getUserByToken($token)
    {
        $response = $this->getHttpClient()->post('https://api-v2.u.id/api/v2/user_info', [
            'headers' => [
                // 'cache-control' => 'no-cache',
                'Authorization' => 'Bearer ' . $token
                // 'Content-Type' => 'application/x-www-form-urlencoded',
            ],
        ]);
    
        return json_decode($response->getBody()->getContents(), true);
    }

    protected function mapUserToObject(array $user)
    {
        return (new User())->setRaw($user)->map([
            'nama_lengkap' => $user['message'],
            'email' => $user['message'],
        ]);
    }

}