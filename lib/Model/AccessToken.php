<?php

/*
 * Copyright 2017 Sterling Talent Solutions
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Oda\Client\Model;

use \Firebase\JWT\JWT;

class AccessToken {

    private $accessToken;
    private $payload;
    private $timeProvider;

    public function __construct(array $data = null)
    {
        $this->accessToken = isset($data['access_token']) ? $data['access_token'] : null;

        $this->payload = $this->decodeJwt($this->accessToken);

        if (!isset($this->payload->exp)) {
            throw new \Exception('Token does not contain exp');
        }

        //to facilitate testing.
        $defaultTimeProvider = function() { return time(); };
        $this->timeProvider = isset($data['time_provider']) ? $data['time_provider'] : $defaultTimeProvider;
    }

    public function getAccessToken() {
        return $this->accessToken;
    }

    public function isExpired() {
        $timeProvider = $this->timeProvider;
        $currentTime = $timeProvider();
        return $currentTime <= $this->getExpirationTime();
    }

    private function getExpirationTime() {
        return $this->payload->exp;
    }

    private function decodeJwt($jwt) {
        $segments = explode('.', $jwt);
        if (count($segments) != 3) {
            throw new \Exception('Invalid Token');
        }

        $payload = JWT::jsonDecode(JWT::urlsafeB64Decode($segments[1]));

        if ($payload === null) {
            throw new \Exception('Invalid body encoding');
        }

        return $payload;
    }

}
