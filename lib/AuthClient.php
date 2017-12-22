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

namespace Oda\Client;

class AuthClient {

    private $tokenUrl;
    private $credentials;

    public function __construct($tokenUrl, $credentials)
    {
        $this->tokenUrl = $tokenUrl;
        $this->credentials = $credentials;
    }

    /**
     * Authorizes
     *
     * @throws \Oda\Client\ApiException on error
     * @return \Oda\Client\Model\AccessToken;
     */
    public function auth() {

        $headers = [];
        $headers[] = "Authorization: basic {$this->credentials}";

        $postData = "grant_type=client_credentials";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($curl, CURLOPT_URL, $this->tokenUrl);
        curl_setopt($curl, CURLOPT_VERBOSE, 0);
        curl_setopt($curl, CURLOPT_HEADER, 1);

        $response = curl_exec($curl);
        $http_header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $http_header = $this->httpParseHeaders(substr($response, 0, $http_header_size));
        $http_body = substr($response, $http_header_size);
        $response_info = curl_getinfo($curl);

        $isResponseBad = $response_info['http_code'] <= 199 || $response_info['http_code'] >= 299;
        if ($isResponseBad) {
            $data = json_decode($http_body);
            $isResponseAString = json_last_error() > 0;
            if ($isResponseAString) {
                $data = $http_body;
            }

            throw new ApiException(
                "[".$response_info['http_code']."] Error connecting to Auth API ($this->tokenUrl)",
                $response_info['http_code'],
                $http_header,
                $data
            );
        }

        $data = json_decode($http_body);
        if (json_last_error() > 0) { // if response is a string
            $data = $http_body;
        }


        return new Model\AccessToken((array) $data);
    }

    private function httpParseHeaders($raw_headers)
    {
        // ref/credit: http://php.net/manual/en/function.http-parse-headers.php#112986
        $headers = [];
        $key = '';

        foreach (explode("\n", $raw_headers) as $h) {
            $h = explode(':', $h, 2);

            if (isset($h[1])) {
                if (!isset($headers[$h[0]])) {
                    $headers[$h[0]] = trim($h[1]);
                } elseif (is_array($headers[$h[0]])) {
                    $headers[$h[0]] = array_merge($headers[$h[0]], [trim($h[1])]);
                } else {
                    $headers[$h[0]] = array_merge([$headers[$h[0]]], [trim($h[1])]);
                }

                $key = $h[0];
            } else {
                if (substr($h[0], 0, 1) === "\t") {
                    $headers[$key] .= "\r\n\t".trim($h[0]);
                } elseif (!$key) {
                    $headers[0] = trim($h[0]);
                }
                trim($h[0]);
            }
        }

        return $headers;
    }

}
