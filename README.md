# SwaggerClient-php
This SDK allows you to call the Sterling Talent Solutions On-Demand API.


- API version: 2017-12-08T12:41:25.475-08:00
- Build package: io.swagger.codegen.languages.PhpClientCodegen

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
*DefaultApi* | [**billingCodesGet**](docs/Api/DefaultApi.md#billingcodesget) | **GET** /billing-codes | 
*DefaultApi* | [**candidatesGet**](docs/Api/DefaultApi.md#candidatesget) | **GET** /candidates | 
*DefaultApi* | [**candidatesIdDocumentsGet**](docs/Api/DefaultApi.md#candidatesiddocumentsget) | **GET** /candidates/{id}/documents | 
*DefaultApi* | [**candidatesIdDocumentsPost**](docs/Api/DefaultApi.md#candidatesiddocumentspost) | **POST** /candidates/{id}/documents | 
*DefaultApi* | [**candidatesIdGet**](docs/Api/DefaultApi.md#candidatesidget) | **GET** /candidates/{id} | 
*DefaultApi* | [**candidatesIdPut**](docs/Api/DefaultApi.md#candidatesidput) | **PUT** /candidates/{id} | 
*DefaultApi* | [**candidatesIdTrustPost**](docs/Api/DefaultApi.md#candidatesidtrustpost) | **POST** /candidates/{id}/trust | 
*DefaultApi* | [**candidatesPost**](docs/Api/DefaultApi.md#candidatespost) | **POST** /candidates | 
*DefaultApi* | [**healthGet**](docs/Api/DefaultApi.md#healthget) | **GET** /health | 
*DefaultApi* | [**identitiesIdGet**](docs/Api/DefaultApi.md#identitiesidget) | **GET** /identities/{id} | 
*DefaultApi* | [**identitiesIdRetryPost**](docs/Api/DefaultApi.md#identitiesidretrypost) | **POST** /identities/{id}/retry | 
*DefaultApi* | [**identitiesIdVerificationPut**](docs/Api/DefaultApi.md#identitiesidverificationput) | **PUT** /identities/{id}/verification | 
*DefaultApi* | [**identitiesPost**](docs/Api/DefaultApi.md#identitiespost) | **POST** /identities | 
*DefaultApi* | [**packagesGet**](docs/Api/DefaultApi.md#packagesget) | **GET** /packages | 
*DefaultApi* | [**packagesIdPriceGet**](docs/Api/DefaultApi.md#packagesidpriceget) | **GET** /packages/{id}/price | 
*DefaultApi* | [**referenceCodesGet**](docs/Api/DefaultApi.md#referencecodesget) | **GET** /reference-codes | 
*DefaultApi* | [**screeningsGet**](docs/Api/DefaultApi.md#screeningsget) | **GET** /screenings | 
*DefaultApi* | [**screeningsIdAdverseActionsPost**](docs/Api/DefaultApi.md#screeningsidadverseactionspost) | **POST** /screenings/{id}/adverse-actions | 
*DefaultApi* | [**screeningsIdDocumentsPost**](docs/Api/DefaultApi.md#screeningsiddocumentspost) | **POST** /screenings/{id}/documents | 
*DefaultApi* | [**screeningsIdGet**](docs/Api/DefaultApi.md#screeningsidget) | **GET** /screenings/{id} | 
*DefaultApi* | [**screeningsIdInvitePost**](docs/Api/DefaultApi.md#screeningsidinvitepost) | **POST** /screenings/{id}/invite | 
*DefaultApi* | [**screeningsIdReportGet**](docs/Api/DefaultApi.md#screeningsidreportget) | **GET** /screenings/{id}/report | 
*DefaultApi* | [**screeningsIdReportLinksPost**](docs/Api/DefaultApi.md#screeningsidreportlinkspost) | **POST** /screenings/{id}/report-links | 
*DefaultApi* | [**screeningsIdReportPdfGet**](docs/Api/DefaultApi.md#screeningsidreportpdfget) | **GET** /screenings/{id}/report.pdf | 
*DefaultApi* | [**screeningsPost**](docs/Api/DefaultApi.md#screeningspost) | **POST** /screenings | 
*DefaultApi* | [**subscriptionsIdDelete**](docs/Api/DefaultApi.md#subscriptionsiddelete) | **DELETE** /subscriptions/{id} | 
*DefaultApi* | [**subscriptionsIdEventsGet**](docs/Api/DefaultApi.md#subscriptionsideventsget) | **GET** /subscriptions/{id}/events | 
*DefaultApi* | [**subscriptionsIdGet**](docs/Api/DefaultApi.md#subscriptionsidget) | **GET** /subscriptions/{id} | 
*DefaultApi* | [**subscriptionsPost**](docs/Api/DefaultApi.md#subscriptionspost) | **POST** /subscriptions | 
*DefaultApi* | [**trustedUsersIdGet**](docs/Api/DefaultApi.md#trustedusersidget) | **GET** /trusted-users/{id} | 
*DefaultApi* | [**trustedUsersPost**](docs/Api/DefaultApi.md#trusteduserspost) | **POST** /trusted-users | 
*DefaultApi* | [**trustsIdDelete**](docs/Api/DefaultApi.md#trustsiddelete) | **DELETE** /trusts/{id} | 


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
 - [CandidateRequest](docs/Model/CandidateRequest.md)
 - [CandidateResponse](docs/Model/CandidateResponse.md)
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
 - [KnowledgeBasedAnswer](docs/Model/KnowledgeBasedAnswer.md)
 - [Metrics](docs/Model/Metrics.md)
 - [OneTimeReportLinkResponse](docs/Model/OneTimeReportLinkResponse.md)
 - [PackagePriceResponse](docs/Model/PackagePriceResponse.md)
 - [PackageResponse](docs/Model/PackageResponse.md)
 - [Question](docs/Model/Question.md)
 - [ReferenceCode](docs/Model/ReferenceCode.md)
 - [ReferenceCodesResponse](docs/Model/ReferenceCodesResponse.md)
 - [Schedule](docs/Model/Schedule.md)
 - [ScreeningReport](docs/Model/ScreeningReport.md)
 - [ScreeningRequest](docs/Model/ScreeningRequest.md)
 - [ScreeningResponse](docs/Model/ScreeningResponse.md)
 - [ScreeningResponseLink](docs/Model/ScreeningResponseLink.md)
 - [ScreeningResponseReportItem](docs/Model/ScreeningResponseReportItem.md)
 - [ScreeningSummaryResponse](docs/Model/ScreeningSummaryResponse.md)
 - [SubscriptionEventsResponse](docs/Model/SubscriptionEventsResponse.md)
 - [SubscriptionRequest](docs/Model/SubscriptionRequest.md)
 - [SubscriptionResponse](docs/Model/SubscriptionResponse.md)
 - [SubscriptionScreening](docs/Model/SubscriptionScreening.md)
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




