# Swagger\Client\DefaultApi

All URIs are relative to *https://api-int.kennect.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingCodesGet**](DefaultApi.md#billingCodesGet) | **GET** /billing-codes | 
[**candidatesGet**](DefaultApi.md#candidatesGet) | **GET** /candidates | 
[**candidatesIdDocumentsGet**](DefaultApi.md#candidatesIdDocumentsGet) | **GET** /candidates/{id}/documents | 
[**candidatesIdDocumentsPost**](DefaultApi.md#candidatesIdDocumentsPost) | **POST** /candidates/{id}/documents | 
[**candidatesIdGet**](DefaultApi.md#candidatesIdGet) | **GET** /candidates/{id} | 
[**candidatesIdPut**](DefaultApi.md#candidatesIdPut) | **PUT** /candidates/{id} | 
[**candidatesIdTrustPost**](DefaultApi.md#candidatesIdTrustPost) | **POST** /candidates/{id}/trust | 
[**candidatesPost**](DefaultApi.md#candidatesPost) | **POST** /candidates | 
[**healthGet**](DefaultApi.md#healthGet) | **GET** /health | 
[**identitiesIdGet**](DefaultApi.md#identitiesIdGet) | **GET** /identities/{id} | 
[**identitiesIdRetryPost**](DefaultApi.md#identitiesIdRetryPost) | **POST** /identities/{id}/retry | 
[**identitiesIdVerificationPut**](DefaultApi.md#identitiesIdVerificationPut) | **PUT** /identities/{id}/verification | 
[**identitiesPost**](DefaultApi.md#identitiesPost) | **POST** /identities | 
[**packagesGet**](DefaultApi.md#packagesGet) | **GET** /packages | 
[**packagesIdPriceGet**](DefaultApi.md#packagesIdPriceGet) | **GET** /packages/{id}/price | 
[**referenceCodesGet**](DefaultApi.md#referenceCodesGet) | **GET** /reference-codes | 
[**screeningsGet**](DefaultApi.md#screeningsGet) | **GET** /screenings | 
[**screeningsIdAdverseActionsPost**](DefaultApi.md#screeningsIdAdverseActionsPost) | **POST** /screenings/{id}/adverse-actions | 
[**screeningsIdDocumentsPost**](DefaultApi.md#screeningsIdDocumentsPost) | **POST** /screenings/{id}/documents | 
[**screeningsIdGet**](DefaultApi.md#screeningsIdGet) | **GET** /screenings/{id} | 
[**screeningsIdInvitePost**](DefaultApi.md#screeningsIdInvitePost) | **POST** /screenings/{id}/invite | 
[**screeningsIdReportGet**](DefaultApi.md#screeningsIdReportGet) | **GET** /screenings/{id}/report | 
[**screeningsIdReportLinksPost**](DefaultApi.md#screeningsIdReportLinksPost) | **POST** /screenings/{id}/report-links | 
[**screeningsIdReportPdfGet**](DefaultApi.md#screeningsIdReportPdfGet) | **GET** /screenings/{id}/report.pdf | 
[**screeningsPost**](DefaultApi.md#screeningsPost) | **POST** /screenings | 
[**subscriptionsIdDelete**](DefaultApi.md#subscriptionsIdDelete) | **DELETE** /subscriptions/{id} | 
[**subscriptionsIdEventsGet**](DefaultApi.md#subscriptionsIdEventsGet) | **GET** /subscriptions/{id}/events | 
[**subscriptionsIdGet**](DefaultApi.md#subscriptionsIdGet) | **GET** /subscriptions/{id} | 
[**subscriptionsPost**](DefaultApi.md#subscriptionsPost) | **POST** /subscriptions | 
[**trustedUsersIdGet**](DefaultApi.md#trustedUsersIdGet) | **GET** /trusted-users/{id} | 
[**trustedUsersPost**](DefaultApi.md#trustedUsersPost) | **POST** /trusted-users | 
[**trustsIdDelete**](DefaultApi.md#trustsIdDelete) | **DELETE** /trusts/{id} | 


# **billingCodesGet**
> \Swagger\Client\Model\BillingCodesResponse billingCodesGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->billingCodesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->billingCodesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BillingCodesResponse**](../Model/BillingCodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesGet**
> \Swagger\Client\Model\CandidateResponse candidatesGet($limit, $offset, $given_name, $family_name, $client_reference_id, $email)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$given_name = "given_name_example"; // string | 
$family_name = "family_name_example"; // string | 
$client_reference_id = "client_reference_id_example"; // string | 
$email = "email_example"; // string | 

try {
    $result = $api_instance->candidatesGet($limit, $offset, $given_name, $family_name, $client_reference_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->candidatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**|  | [optional]
 **offset** | **string**|  | [optional]
 **given_name** | **string**|  | [optional]
 **family_name** | **string**|  | [optional]
 **client_reference_id** | **string**|  | [optional]
 **email** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\CandidateResponse**](../Model/CandidateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesIdDocumentsGet**
> \Swagger\Client\Model\CandidateDocumentResponse[] candidatesIdDocumentsGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->candidatesIdDocumentsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->candidatesIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CandidateDocumentResponse[]**](../Model/CandidateDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesIdDocumentsPost**
> candidatesIdDocumentsPost($id, $accept, $file_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$accept = "accept_example"; // string | 
$file_name = "file_name_example"; // string | 

try {
    $api_instance->candidatesIdDocumentsPost($id, $accept, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->candidatesIdDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accept** | **string**|  |
 **file_name** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesIdGet**
> \Swagger\Client\Model\CandidateResponse candidatesIdGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->candidatesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->candidatesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CandidateResponse**](../Model/CandidateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesIdPut**
> \Swagger\Client\Model\CandidateResponse candidatesIdPut($id, $candidate_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$candidate_request = new \Swagger\Client\Model\CandidateRequest(); // \Swagger\Client\Model\CandidateRequest | 

try {
    $result = $api_instance->candidatesIdPut($id, $candidate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->candidatesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **candidate_request** | [**\Swagger\Client\Model\CandidateRequest**](../Model/CandidateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\CandidateResponse**](../Model/CandidateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesIdTrustPost**
> \Swagger\Client\Model\TrustedUserResponse candidatesIdTrustPost($id, $trusted_user_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$trusted_user_request = new \Swagger\Client\Model\TrustedUserRequest(); // \Swagger\Client\Model\TrustedUserRequest | 

try {
    $result = $api_instance->candidatesIdTrustPost($id, $trusted_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->candidatesIdTrustPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **trusted_user_request** | [**\Swagger\Client\Model\TrustedUserRequest**](../Model/TrustedUserRequest.md)|  |

### Return type

[**\Swagger\Client\Model\TrustedUserResponse**](../Model/TrustedUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesPost**
> \Swagger\Client\Model\CandidateResponse candidatesPost($candidate_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$candidate_request = new \Swagger\Client\Model\CandidateRequest(); // \Swagger\Client\Model\CandidateRequest | 

try {
    $result = $api_instance->candidatesPost($candidate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->candidatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **candidate_request** | [**\Swagger\Client\Model\CandidateRequest**](../Model/CandidateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\CandidateResponse**](../Model/CandidateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **healthGet**
> \Swagger\Client\Model\HealthResponse healthGet($deep)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$deep = "deep_example"; // string | 

try {
    $result = $api_instance->healthGet($deep);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->healthGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deep** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\HealthResponse**](../Model/HealthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **identitiesIdGet**
> \Swagger\Client\Model\IdentityResponse identitiesIdGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->identitiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->identitiesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\IdentityResponse**](../Model/IdentityResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **identitiesIdRetryPost**
> \Swagger\Client\Model\IdentityResponse identitiesIdRetryPost($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->identitiesIdRetryPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->identitiesIdRetryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\IdentityResponse**](../Model/IdentityResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **identitiesIdVerificationPut**
> \Swagger\Client\Model\IdentityResponse identitiesIdVerificationPut($id, $verification_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$verification_request = new \Swagger\Client\Model\VerificationRequest(); // \Swagger\Client\Model\VerificationRequest | 

try {
    $result = $api_instance->identitiesIdVerificationPut($id, $verification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->identitiesIdVerificationPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **verification_request** | [**\Swagger\Client\Model\VerificationRequest**](../Model/VerificationRequest.md)|  |

### Return type

[**\Swagger\Client\Model\IdentityResponse**](../Model/IdentityResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **identitiesPost**
> \Swagger\Client\Model\IdentityResponse identitiesPost($identity_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$identity_request = new \Swagger\Client\Model\IdentityRequest(); // \Swagger\Client\Model\IdentityRequest | 

try {
    $result = $api_instance->identitiesPost($identity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->identitiesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_request** | [**\Swagger\Client\Model\IdentityRequest**](../Model/IdentityRequest.md)|  |

### Return type

[**\Swagger\Client\Model\IdentityResponse**](../Model/IdentityResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagesGet**
> \Swagger\Client\Model\PackageResponse[] packagesGet($all)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$all = "all_example"; // string | 

try {
    $result = $api_instance->packagesGet($all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->packagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **all** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PackageResponse[]**](../Model/PackageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagesIdPriceGet**
> \Swagger\Client\Model\PackagePriceResponse packagesIdPriceGet($id, $candidate_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$candidate_id = "candidate_id_example"; // string | 

try {
    $result = $api_instance->packagesIdPriceGet($id, $candidate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->packagesIdPriceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **candidate_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PackagePriceResponse**](../Model/PackagePriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referenceCodesGet**
> \Swagger\Client\Model\ReferenceCodesResponse referenceCodesGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->referenceCodesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->referenceCodesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ReferenceCodesResponse**](../Model/ReferenceCodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsGet**
> \Swagger\Client\Model\ScreeningSummaryResponse[] screeningsGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->screeningsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->screeningsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ScreeningSummaryResponse[]**](../Model/ScreeningSummaryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsIdAdverseActionsPost**
> screeningsIdAdverseActionsPost($id, $adverse_action_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$adverse_action_request = new \Swagger\Client\Model\AdverseActionRequest(); // \Swagger\Client\Model\AdverseActionRequest | 

try {
    $api_instance->screeningsIdAdverseActionsPost($id, $adverse_action_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->screeningsIdAdverseActionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **adverse_action_request** | [**\Swagger\Client\Model\AdverseActionRequest**](../Model/AdverseActionRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsIdDocumentsPost**
> screeningsIdDocumentsPost($id, $accept, $document_type, $party)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$accept = "accept_example"; // string | 
$document_type = "document_type_example"; // string | 
$party = "party_example"; // string | 

try {
    $api_instance->screeningsIdDocumentsPost($id, $accept, $document_type, $party);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->screeningsIdDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accept** | **string**|  |
 **document_type** | **string**|  |
 **party** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsIdGet**
> \Swagger\Client\Model\ScreeningResponse screeningsIdGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->screeningsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->screeningsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ScreeningResponse**](../Model/ScreeningResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsIdInvitePost**
> \Swagger\Client\Model\InviteResponse screeningsIdInvitePost($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->screeningsIdInvitePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->screeningsIdInvitePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InviteResponse**](../Model/InviteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsIdReportGet**
> map[string,string] screeningsIdReportGet($id, $accept)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$accept = "accept_example"; // string | 

try {
    $result = $api_instance->screeningsIdReportGet($id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->screeningsIdReportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accept** | **string**|  |

### Return type

[**map[string,string]**](../Model/map.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsIdReportLinksPost**
> \Swagger\Client\Model\OneTimeReportLinkResponse screeningsIdReportLinksPost($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->screeningsIdReportLinksPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->screeningsIdReportLinksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\OneTimeReportLinkResponse**](../Model/OneTimeReportLinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsIdReportPdfGet**
> map[string,string] screeningsIdReportPdfGet($id, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$token = "token_example"; // string | 

try {
    $result = $api_instance->screeningsIdReportPdfGet($id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->screeningsIdReportPdfGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **token** | **string**|  | [optional]

### Return type

[**map[string,string]**](../Model/map.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsPost**
> \Swagger\Client\Model\ScreeningResponse screeningsPost($screening_request, $idempotency_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$screening_request = new \Swagger\Client\Model\ScreeningRequest(); // \Swagger\Client\Model\ScreeningRequest | 
$idempotency_key = "idempotency_key_example"; // string | 

try {
    $result = $api_instance->screeningsPost($screening_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->screeningsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **screening_request** | [**\Swagger\Client\Model\ScreeningRequest**](../Model/ScreeningRequest.md)|  |
 **idempotency_key** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ScreeningResponse**](../Model/ScreeningResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsIdDelete**
> \Swagger\Client\Model\SubscriptionResponse subscriptionsIdDelete($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->subscriptionsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsIdEventsGet**
> \Swagger\Client\Model\SubscriptionEventsResponse subscriptionsIdEventsGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->subscriptionsIdEventsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionsIdEventsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SubscriptionEventsResponse**](../Model/SubscriptionEventsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsIdGet**
> \Swagger\Client\Model\SubscriptionResponse subscriptionsIdGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->subscriptionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsPost**
> \Swagger\Client\Model\SubscriptionResponse subscriptionsPost($subscription_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$subscription_request = new \Swagger\Client\Model\SubscriptionRequest(); // \Swagger\Client\Model\SubscriptionRequest | 

try {
    $result = $api_instance->subscriptionsPost($subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_request** | [**\Swagger\Client\Model\SubscriptionRequest**](../Model/SubscriptionRequest.md)|  |

### Return type

[**\Swagger\Client\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trustedUsersIdGet**
> \Swagger\Client\Model\TrustedUserResponse trustedUsersIdGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->trustedUsersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->trustedUsersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TrustedUserResponse**](../Model/TrustedUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trustedUsersPost**
> \Swagger\Client\Model\TrustedUserResponse trustedUsersPost($trusted_user_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$trusted_user_request = new \Swagger\Client\Model\TrustedUserRequest(); // \Swagger\Client\Model\TrustedUserRequest | 

try {
    $result = $api_instance->trustedUsersPost($trusted_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->trustedUsersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trusted_user_request** | [**\Swagger\Client\Model\TrustedUserRequest**](../Model/TrustedUserRequest.md)|  |

### Return type

[**\Swagger\Client\Model\TrustedUserResponse**](../Model/TrustedUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trustsIdDelete**
> trustsIdDelete($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $api_instance->trustsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->trustsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
