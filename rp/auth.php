<?php

/**
 *
 * Copyright MITRE 2012
 *
 * OpenIDConnectClient for PHP5
 * Author: Michael Jett <mjett@mitre.org>
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 *
 */

require __DIR__ . '/vendor/autoload.php';
session_start();

use Its\Sso\OpenIDConnectClient;
use Its\Sso\OpenIDConnectClientException;



try {
    $oidc = new OpenIDConnectClient(
                    'http://localhost:9000/auth', // authorization_endpoint
		    'app1', // Client ID
		    'app1secret' // Client Secret
		);

    $oidc->setRedirectURL('http://localhost:33001/auth.php'); // must be the same as you registered
    $oidc->addScope('openid profile'); //must be the same as you registered

    // remove this if in production mode
    $oidc->setVerifyHost(false);
    $oidc->setVerifyPeer(false);

    $oidc->authenticate(); //call the main function

    $_SESSION['id_token'] = $oidc->getIdToken(); // must be save for check session dan logout proccess
    $user = $oidc->requestUserInfo(); // this will return user information
    $_SESSION['user']=$user;
} catch (OpenIDConnectClientException $e) {
    echo $e->getMessage();
}
