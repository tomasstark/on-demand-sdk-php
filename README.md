# Sterling On Demand API SDK for PHP

This SDK allows you to call the Sterling Talent Solutions On Demand API.

## Requirements

PHP 5.4.0 and later

## Export credentials
The example script as well as the Integration tests, require valid credentials. For these scripts, the 'credentials'
environmental variable needs to be set to your API credentials. These credentials are a base64 hash of
"[apiusername]:[password]".

For example, the base64 hash of "username@yourcompany.com:somepassword" is "dXNlcm5hbWVAeW91cmNvbXBhbnkuY29tOnNvbWVwYXNzd29yZA=="


## Installation & Usage

### Credentials

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/sterlingts/on-demand-sdk-php.git"
    }
  ],
  "require": {
    "sterlingts/on-demand-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once(__DIR__ . '/autoload.php');
    require_once(__DIR__ . '/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/autoload.php');
require_once(__DIR__ . '/vendor/autoload.php');


//start Config
$isProd = false; //set to true to use production endpoints
$credentials = $_SERVER['credentials']; //pulls auth credentials from env
define(JSON_PRETTY_PRINT, true); //prettifies _toString() JSON output
//end Config

$env = ($isProd) ? "api" : "api-int";

/// AUTHORIZE
if (empty($credentials)) {
    exit('credentials not set');
}

$authClient = new Oda\Client\AuthClient("https://{$env}.kennect.com/oauth/token", $credentials);

try {
    $authResponse = $authClient->auth();
} catch (Exception $e) {
    print_r($e);
    exit('Exception when calling AuthClient->auth: '. $e->getMessage(). PHP_EOL);
}

$configuration = Oda\Client\Configuration::getDefaultConfiguration();
$configuration->addDefaultHeader("Authorization", "Bearer " . $authResponse->getAccessToken());
$configuration->setHost("https://{$env}.kennect.com/v1");

// SET UP API CLIENT
$apiClient = new Oda\Client\ApiClient($configuration);
$apiInstance = new Oda\Client\Api\DefaultApi($apiClient);

//TRY AN ENDPOINT
//GET PACKAGES
try {
    $packageResponses = $apiInstance->packagesGet();
} catch (Exception $e) {
    print_r($e);
    exit('Exception when calling DefaultApi->packagesGet: '. $e->getMessage(). PHP_EOL);
}

echo("Number of Packages:". count($packageResponses). PHP_EOL);

foreach ($packageResponses as $packageResponse) {
    echo($packageResponse->__toString(). PHP_EOL);
}
?>
```

### For more code examples, see also: [example.php](example.php)

## Documentation for API Endpoints

All URIs are relative to *https://api-int.kennect.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**billingCodesGet**](docs/Api/DefaultApi.md#billingcodesget) | **GET** /billing-codes | Get a list of valid billing codes
*DefaultApi* | [**candidatesGet**](docs/Api/DefaultApi.md#candidatesget) | **GET** /candidates | Get a list of Candidates
*DefaultApi* | [**candidatesIdDocumentsGet**](docs/Api/DefaultApi.md#candidatesiddocumentsget) | **GET** /candidates/{id}/documents | List documents attached to a candidate
*DefaultApi* | [**candidatesIdDocumentsPost**](docs/Api/DefaultApi.md#candidatesiddocumentspost) | **POST** /candidates/{id}/documents | Attach a document to a candidate
*DefaultApi* | [**candidatesIdGet**](docs/Api/DefaultApi.md#candidatesidget) | **GET** /candidates/{id} | Get a specific Candidate
*DefaultApi* | [**candidatesIdLinksPost**](docs/Api/DefaultApi.md#candidatesidlinkspost) | **POST** /candidates/{id}/links | Get links to the Candidate portal for use by the Candidate
*DefaultApi* | [**candidatesIdPut**](docs/Api/DefaultApi.md#candidatesidput) | **PUT** /candidates/{id} | Update a candidate
*DefaultApi* | [**candidatesIdTrustPost**](docs/Api/DefaultApi.md#candidatesidtrustpost) | **POST** /candidates/{id}/trust | Trust a candidate
*DefaultApi* | [**candidatesPost**](docs/Api/DefaultApi.md#candidatespost) | **POST** /candidates | Create a candidate
*DefaultApi* | [**chargesPost**](docs/Api/DefaultApi.md#chargespost) | **POST** /charges | Create a capture
*DefaultApi* | [**healthGet**](docs/Api/DefaultApi.md#healthget) | **GET** /health | Check the health of the API
*DefaultApi* | [**identitiesIdGet**](docs/Api/DefaultApi.md#identitiesidget) | **GET** /identities/{id} | Get a verified identity
*DefaultApi* | [**identitiesIdRetryPost**](docs/Api/DefaultApi.md#identitiesidretrypost) | **POST** /identities/{id}/retry | Retry creating an identity and get a new set of questions
*DefaultApi* | [**identitiesIdVerificationPut**](docs/Api/DefaultApi.md#identitiesidverificationput) | **PUT** /identities/{id}/verification | Verify an identity by providing correct answers
*DefaultApi* | [**identitiesPost**](docs/Api/DefaultApi.md#identitiespost) | **POST** /identities | Get a list of questions needing to be answered before an identity can be created
*DefaultApi* | [**packagesGet**](docs/Api/DefaultApi.md#packagesget) | **GET** /packages | Get a list of Packages
*DefaultApi* | [**packagesIdPriceGet**](docs/Api/DefaultApi.md#packagesidpriceget) | **GET** /packages/{id}/price | Get the estimated price of a Package
*DefaultApi* | [**referenceCodesGet**](docs/Api/DefaultApi.md#referencecodesget) | **GET** /reference-codes | Return a list of valid Reference Codes
*DefaultApi* | [**screeningsIdAdverseActionsPost**](docs/Api/DefaultApi.md#screeningsidadverseactionspost) | **POST** /screenings/{id}/adverse-actions | Create an adverse action on a Screening
*DefaultApi* | [**screeningsIdDetailsGet**](docs/Api/DefaultApi.md#screeningsiddetailsget) | **GET** /screenings/{id}/details | Get a specific screening
*DefaultApi* | [**screeningsIdDocumentsAttachmentIdGet**](docs/Api/DefaultApi.md#screeningsiddocumentsattachmentidget) | **GET** /screenings/{id}/documents/{attachmentId} | Get a Screening attachment in PDF form
*DefaultApi* | [**screeningsIdDocumentsGet**](docs/Api/DefaultApi.md#screeningsiddocumentsget) | **GET** /screenings/{id}/documents | 
*DefaultApi* | [**screeningsIdDocumentsPost**](docs/Api/DefaultApi.md#screeningsiddocumentspost) | **POST** /screenings/{id}/documents | Attach a document to a Screening
*DefaultApi* | [**screeningsIdGet**](docs/Api/DefaultApi.md#screeningsidget) | **GET** /screenings/{id} | Get a specific screening
*DefaultApi* | [**screeningsIdInvitePost**](docs/Api/DefaultApi.md#screeningsidinvitepost) | **POST** /screenings/{id}/invite | Create an invite
*DefaultApi* | [**screeningsIdReportGet**](docs/Api/DefaultApi.md#screeningsidreportget) | **GET** /screenings/{id}/report | Get a Screening report in PDF form
*DefaultApi* | [**screeningsIdReportLinksPost**](docs/Api/DefaultApi.md#screeningsidreportlinkspost) | **POST** /screenings/{id}/report-links | Create  a one-time use report link
*DefaultApi* | [**screeningsIdReportPdfGet**](docs/Api/DefaultApi.md#screeningsidreportpdfget) | **GET** /screenings/{id}/report.pdf | Get a Screening report in PDF form
*DefaultApi* | [**screeningsPost**](docs/Api/DefaultApi.md#screeningspost) | **POST** /screenings | Create a Screening
*DefaultApi* | [**subscriptionsIdDelete**](docs/Api/DefaultApi.md#subscriptionsiddelete) | **DELETE** /subscriptions/{id} | Delete a subscription
*DefaultApi* | [**subscriptionsIdEventsGet**](docs/Api/DefaultApi.md#subscriptionsideventsget) | **GET** /subscriptions/{id}/events | Get a list of events related to a given subscription
*DefaultApi* | [**subscriptionsIdGet**](docs/Api/DefaultApi.md#subscriptionsidget) | **GET** /subscriptions/{id} | Get a subscription
*DefaultApi* | [**subscriptionsPost**](docs/Api/DefaultApi.md#subscriptionspost) | **POST** /subscriptions | Create a subscription
*DefaultApi* | [**tokensPost**](docs/Api/DefaultApi.md#tokenspost) | **POST** /tokens | Creates a temporary access token
*DefaultApi* | [**trustedUsersIdGet**](docs/Api/DefaultApi.md#trustedusersidget) | **GET** /trusted-users/{id} | Get trust information about a verified user
*DefaultApi* | [**trustedUsersPost**](docs/Api/DefaultApi.md#trusteduserspost) | **POST** /trusted-users | Trust a verified user
*DefaultApi* | [**trustsIdDelete**](docs/Api/DefaultApi.md#trustsiddelete) | **DELETE** /trusts/{id} | Untrust a Trusted User


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AdverseActionRequest](docs/Model/AdverseActionRequest.md)
 - [AdverseActionResponse](docs/Model/AdverseActionResponse.md)
 - [Answer](docs/Model/Answer.md)
 - [BillingCodesResponse](docs/Model/BillingCodesResponse.md)
 - [CallbackCredentials](docs/Model/CallbackCredentials.md)
 - [CallbackRequest](docs/Model/CallbackRequest.md)
 - [CallbackResponse](docs/Model/CallbackResponse.md)
 - [CandidateAlias](docs/Model/CandidateAlias.md)
 - [CandidateDocumentResponse](docs/Model/CandidateDocumentResponse.md)
 - [CandidatePortalLinkResponse](docs/Model/CandidatePortalLinkResponse.md)
 - [CandidateRequest](docs/Model/CandidateRequest.md)
 - [CandidateResponse](docs/Model/CandidateResponse.md)
 - [ChargeRequest](docs/Model/ChargeRequest.md)
 - [ChargeResponse](docs/Model/ChargeResponse.md)
 - [Dispute](docs/Model/Dispute.md)
 - [DriversLicense](docs/Model/DriversLicense.md)
 - [ErrorDetail](docs/Model/ErrorDetail.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [HealthResponse](docs/Model/HealthResponse.md)
 - [IdentityRequest](docs/Model/IdentityRequest.md)
 - [IdentityResponse](docs/Model/IdentityResponse.md)
 - [Interval](docs/Model/Interval.md)
 - [Invite](docs/Model/Invite.md)
 - [InviteResponse](docs/Model/InviteResponse.md)
 - [JsonNode](docs/Model/JsonNode.md)
 - [KnowledgeBasedAnswer](docs/Model/KnowledgeBasedAnswer.md)
 - [Metrics](docs/Model/Metrics.md)
 - [OneTimeReportLinkResponse](docs/Model/OneTimeReportLinkResponse.md)
 - [PackagePriceResponse](docs/Model/PackagePriceResponse.md)
 - [PackageResponse](docs/Model/PackageResponse.md)
 - [Question](docs/Model/Question.md)
 - [ReferenceCode](docs/Model/ReferenceCode.md)
 - [ReferenceCodesResponse](docs/Model/ReferenceCodesResponse.md)
 - [Schedule](docs/Model/Schedule.md)
 - [ScreeningDetailsResponse](docs/Model/ScreeningDetailsResponse.md)
 - [ScreeningReport](docs/Model/ScreeningReport.md)
 - [ScreeningRequest](docs/Model/ScreeningRequest.md)
 - [ScreeningResponse](docs/Model/ScreeningResponse.md)
 - [ScreeningResponseLink](docs/Model/ScreeningResponseLink.md)
 - [ScreeningResponseReportItem](docs/Model/ScreeningResponseReportItem.md)
 - [SubscriptionEventsResponse](docs/Model/SubscriptionEventsResponse.md)
 - [SubscriptionRequest](docs/Model/SubscriptionRequest.md)
 - [SubscriptionResponse](docs/Model/SubscriptionResponse.md)
 - [SubscriptionScreening](docs/Model/SubscriptionScreening.md)
 - [TokenRequest](docs/Model/TokenRequest.md)
 - [TokenResponse](docs/Model/TokenResponse.md)
 - [TrustedUserRequest](docs/Model/TrustedUserRequest.md)
 - [TrustedUserResponse](docs/Model/TrustedUserResponse.md)
 - [VerificationRequest](docs/Model/VerificationRequest.md)


## Documentation For Authorization


## jwt-authorizer

- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: 
 - **user**: User Scope


## Author




