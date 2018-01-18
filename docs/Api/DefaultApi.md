# Oda\Client\DefaultApi

All URIs are relative to *https://api-int.kennect.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingCodesGet**](DefaultApi.md#billingCodesGet) | **GET** /billing-codes | Get a list of valid billing codes
[**candidatesGet**](DefaultApi.md#candidatesGet) | **GET** /candidates | Get a list of Candidates
[**candidatesIdDocumentsGet**](DefaultApi.md#candidatesIdDocumentsGet) | **GET** /candidates/{id}/documents | List documents attached to a candidate
[**candidatesIdDocumentsPost**](DefaultApi.md#candidatesIdDocumentsPost) | **POST** /candidates/{id}/documents | Attach a document to a candidate
[**candidatesIdGet**](DefaultApi.md#candidatesIdGet) | **GET** /candidates/{id} | Get a specific Candidate
[**candidatesIdLinksPost**](DefaultApi.md#candidatesIdLinksPost) | **POST** /candidates/{id}/links | Get links to the Candidate portal for use by the Candidate
[**candidatesIdPut**](DefaultApi.md#candidatesIdPut) | **PUT** /candidates/{id} | Update a candidate
[**candidatesIdTrustPost**](DefaultApi.md#candidatesIdTrustPost) | **POST** /candidates/{id}/trust | Trust a candidate
[**candidatesPost**](DefaultApi.md#candidatesPost) | **POST** /candidates | Create a candidate
[**healthGet**](DefaultApi.md#healthGet) | **GET** /health | Check the health of the API
[**identitiesIdGet**](DefaultApi.md#identitiesIdGet) | **GET** /identities/{id} | Get a verified identity
[**identitiesIdRetryPost**](DefaultApi.md#identitiesIdRetryPost) | **POST** /identities/{id}/retry | Retry creating an identity and get a new set of questions
[**identitiesIdVerificationPut**](DefaultApi.md#identitiesIdVerificationPut) | **PUT** /identities/{id}/verification | Verify an identity by providing correct answers
[**identitiesPost**](DefaultApi.md#identitiesPost) | **POST** /identities | Get a list of questions needing to be answered before an identity can be created
[**packagesGet**](DefaultApi.md#packagesGet) | **GET** /packages | Get a list of Packages
[**packagesIdPriceGet**](DefaultApi.md#packagesIdPriceGet) | **GET** /packages/{id}/price | Get the estimated price of a Package
[**referenceCodesGet**](DefaultApi.md#referenceCodesGet) | **GET** /reference-codes | Return a list of valid Reference Codes
[**screeningsIdAdverseActionsPost**](DefaultApi.md#screeningsIdAdverseActionsPost) | **POST** /screenings/{id}/adverse-actions | Create an adverse action on a Screening
[**screeningsIdDocumentsPost**](DefaultApi.md#screeningsIdDocumentsPost) | **POST** /screenings/{id}/documents | Attach a document to a Screening
[**screeningsIdGet**](DefaultApi.md#screeningsIdGet) | **GET** /screenings/{id} | Get a specific screening
[**screeningsIdInvitePost**](DefaultApi.md#screeningsIdInvitePost) | **POST** /screenings/{id}/invite | Create an invite
[**screeningsIdReportGet**](DefaultApi.md#screeningsIdReportGet) | **GET** /screenings/{id}/report | Get a Screening report in PDF form
[**screeningsIdReportLinksPost**](DefaultApi.md#screeningsIdReportLinksPost) | **POST** /screenings/{id}/report-links | Create  a one-time use report link
[**screeningsIdReportPdfGet**](DefaultApi.md#screeningsIdReportPdfGet) | **GET** /screenings/{id}/report.pdf | Get a Screening report in PDF form
[**screeningsPost**](DefaultApi.md#screeningsPost) | **POST** /screenings | Create a Screening
[**subscriptionsIdDelete**](DefaultApi.md#subscriptionsIdDelete) | **DELETE** /subscriptions/{id} | Delete a subscription
[**subscriptionsIdEventsGet**](DefaultApi.md#subscriptionsIdEventsGet) | **GET** /subscriptions/{id}/events | Get a list of events related to a given subscription
[**subscriptionsIdGet**](DefaultApi.md#subscriptionsIdGet) | **GET** /subscriptions/{id} | Get a subscription
[**subscriptionsPost**](DefaultApi.md#subscriptionsPost) | **POST** /subscriptions | Create a subscription
[**trustedUsersIdGet**](DefaultApi.md#trustedUsersIdGet) | **GET** /trusted-users/{id} | Get trust information about a verified user
[**trustedUsersPost**](DefaultApi.md#trustedUsersPost) | **POST** /trusted-users | Trust a verified user
[**trustsIdDelete**](DefaultApi.md#trustsIdDelete) | **DELETE** /trusts/{id} | Untrust a Trusted User


# **billingCodesGet**
> \Oda\Client\Model\BillingCodesResponse billingCodesGet()

Get a list of valid billing codes

Get a list of valid billing codes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();

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

[**\Oda\Client\Model\BillingCodesResponse**](../Model/BillingCodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesGet**
> \Oda\Client\Model\CandidateResponse candidatesGet($limit, $offset, $given_name, $family_name, $client_reference_id, $email)

Get a list of Candidates

Get a list of Candidates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\CandidateResponse**](../Model/CandidateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesIdDocumentsGet**
> \Oda\Client\Model\CandidateDocumentResponse[] candidatesIdDocumentsGet($id)

List documents attached to a candidate

List documents attached to a candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\CandidateDocumentResponse[]**](../Model/CandidateDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesIdDocumentsPost**
> candidatesIdDocumentsPost($id, $accept, $file_name)

Attach a document to a candidate

Attach a document to a candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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
> \Oda\Client\Model\CandidateResponse candidatesIdGet($id)

Get a specific Candidate

Get a specific Candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\CandidateResponse**](../Model/CandidateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesIdLinksPost**
> \Oda\Client\Model\CandidatePortalLinkResponse candidatesIdLinksPost($id)

Get links to the Candidate portal for use by the Candidate

Get links to the Candidate portal for use by the Candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->candidatesIdLinksPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->candidatesIdLinksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Oda\Client\Model\CandidatePortalLinkResponse**](../Model/CandidatePortalLinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesIdPut**
> \Oda\Client\Model\CandidateResponse candidatesIdPut($id, $candidate_request)

Update a candidate

Update a candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$candidate_request = new \Oda\Client\Model\CandidateRequest(); // \Oda\Client\Model\CandidateRequest | 

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
 **candidate_request** | [**\Oda\Client\Model\CandidateRequest**](../Model/CandidateRequest.md)|  |

### Return type

[**\Oda\Client\Model\CandidateResponse**](../Model/CandidateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesIdTrustPost**
> \Oda\Client\Model\TrustedUserResponse candidatesIdTrustPost($id, $trusted_user_request)

Trust a candidate

Trust a candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$trusted_user_request = new \Oda\Client\Model\TrustedUserRequest(); // \Oda\Client\Model\TrustedUserRequest | 

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
 **trusted_user_request** | [**\Oda\Client\Model\TrustedUserRequest**](../Model/TrustedUserRequest.md)|  |

### Return type

[**\Oda\Client\Model\TrustedUserResponse**](../Model/TrustedUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **candidatesPost**
> \Oda\Client\Model\CandidateResponse candidatesPost($candidate_request)

Create a candidate

Create a candidate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
$candidate_request = new \Oda\Client\Model\CandidateRequest(); // \Oda\Client\Model\CandidateRequest | 

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
 **candidate_request** | [**\Oda\Client\Model\CandidateRequest**](../Model/CandidateRequest.md)|  |

### Return type

[**\Oda\Client\Model\CandidateResponse**](../Model/CandidateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **healthGet**
> \Oda\Client\Model\HealthResponse healthGet($deep)

Check the health of the API

Check the health of the API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\HealthResponse**](../Model/HealthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **identitiesIdGet**
> \Oda\Client\Model\IdentityResponse identitiesIdGet($id)

Get a verified identity

Get a verified identity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\IdentityResponse**](../Model/IdentityResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **identitiesIdRetryPost**
> \Oda\Client\Model\IdentityResponse identitiesIdRetryPost($id)

Retry creating an identity and get a new set of questions

Retry creating an identity and get a new set of questions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\IdentityResponse**](../Model/IdentityResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **identitiesIdVerificationPut**
> \Oda\Client\Model\IdentityResponse identitiesIdVerificationPut($id, $verification_request)

Verify an identity by providing correct answers

Verify an identity by providing correct answers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$verification_request = new \Oda\Client\Model\VerificationRequest(); // \Oda\Client\Model\VerificationRequest | 

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
 **verification_request** | [**\Oda\Client\Model\VerificationRequest**](../Model/VerificationRequest.md)|  |

### Return type

[**\Oda\Client\Model\IdentityResponse**](../Model/IdentityResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **identitiesPost**
> \Oda\Client\Model\IdentityResponse identitiesPost($identity_request)

Get a list of questions needing to be answered before an identity can be created

Get a list of questions needing to be answered before an identity can be created

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
$identity_request = new \Oda\Client\Model\IdentityRequest(); // \Oda\Client\Model\IdentityRequest | 

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
 **identity_request** | [**\Oda\Client\Model\IdentityRequest**](../Model/IdentityRequest.md)|  |

### Return type

[**\Oda\Client\Model\IdentityResponse**](../Model/IdentityResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagesGet**
> \Oda\Client\Model\PackageResponse[] packagesGet($all)

Get a list of Packages

Get a list of Packages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\PackageResponse[]**](../Model/PackageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagesIdPriceGet**
> \Oda\Client\Model\PackagePriceResponse packagesIdPriceGet($id, $candidate_id)

Get the estimated price of a Package

Get the estimated price of a Package

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\PackagePriceResponse**](../Model/PackagePriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **referenceCodesGet**
> \Oda\Client\Model\ReferenceCodesResponse referenceCodesGet()

Return a list of valid Reference Codes

Return a list of valid Reference Codes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();

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

[**\Oda\Client\Model\ReferenceCodesResponse**](../Model/ReferenceCodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsIdAdverseActionsPost**
> screeningsIdAdverseActionsPost($id, $adverse_action_request)

Create an adverse action on a Screening

Create an adverse action on a Screening

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$adverse_action_request = new \Oda\Client\Model\AdverseActionRequest(); // \Oda\Client\Model\AdverseActionRequest | 

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
 **adverse_action_request** | [**\Oda\Client\Model\AdverseActionRequest**](../Model/AdverseActionRequest.md)|  |

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

Attach a document to a Screening

Attach a document to a Screening

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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
> \Oda\Client\Model\ScreeningResponse screeningsIdGet($id)

Get a specific screening

Get a specific screening

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\ScreeningResponse**](../Model/ScreeningResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsIdInvitePost**
> \Oda\Client\Model\InviteResponse screeningsIdInvitePost($id)

Create an invite

Create an invite

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\InviteResponse**](../Model/InviteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsIdReportGet**
> map[string,string] screeningsIdReportGet($id, $accept)

Get a Screening report in PDF form

Get a Screening report in PDF form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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
> \Oda\Client\Model\OneTimeReportLinkResponse screeningsIdReportLinksPost($id)

Create  a one-time use report link

Create  a one-time use report link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\OneTimeReportLinkResponse**](../Model/OneTimeReportLinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screeningsIdReportPdfGet**
> map[string,string] screeningsIdReportPdfGet($id, $token)

Get a Screening report in PDF form

Get a Screening report in PDF form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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
> \Oda\Client\Model\ScreeningResponse screeningsPost($screening_request, $idempotency_key)

Create a Screening

Create a Screening

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
$screening_request = new \Oda\Client\Model\ScreeningRequest(); // \Oda\Client\Model\ScreeningRequest | 
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
 **screening_request** | [**\Oda\Client\Model\ScreeningRequest**](../Model/ScreeningRequest.md)|  |
 **idempotency_key** | **string**|  | [optional]

### Return type

[**\Oda\Client\Model\ScreeningResponse**](../Model/ScreeningResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsIdDelete**
> \Oda\Client\Model\SubscriptionResponse subscriptionsIdDelete($id)

Delete a subscription

Delete a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsIdEventsGet**
> \Oda\Client\Model\SubscriptionEventsResponse subscriptionsIdEventsGet($id)

Get a list of events related to a given subscription

Get a list of events related to a given subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\SubscriptionEventsResponse**](../Model/SubscriptionEventsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsIdGet**
> \Oda\Client\Model\SubscriptionResponse subscriptionsIdGet($id)

Get a subscription

Get a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsPost**
> \Oda\Client\Model\SubscriptionResponse subscriptionsPost($subscription_request)

Create a subscription

Create a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
$subscription_request = new \Oda\Client\Model\SubscriptionRequest(); // \Oda\Client\Model\SubscriptionRequest | 

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
 **subscription_request** | [**\Oda\Client\Model\SubscriptionRequest**](../Model/SubscriptionRequest.md)|  |

### Return type

[**\Oda\Client\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trustedUsersIdGet**
> \Oda\Client\Model\TrustedUserResponse trustedUsersIdGet($id)

Get trust information about a verified user

Get trust information about a verified user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

[**\Oda\Client\Model\TrustedUserResponse**](../Model/TrustedUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trustedUsersPost**
> \Oda\Client\Model\TrustedUserResponse trustedUsersPost($trusted_user_request)

Trust a verified user

Trust a verified user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
$trusted_user_request = new \Oda\Client\Model\TrustedUserRequest(); // \Oda\Client\Model\TrustedUserRequest | 

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
 **trusted_user_request** | [**\Oda\Client\Model\TrustedUserRequest**](../Model/TrustedUserRequest.md)|  |

### Return type

[**\Oda\Client\Model\TrustedUserResponse**](../Model/TrustedUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trustsIdDelete**
> trustsIdDelete($id)

Untrust a Trusted User

Untrust a Trusted User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Oda\Client\Api\DefaultApi();
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

