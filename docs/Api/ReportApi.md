# Swagger\Client\ReportApi

All URIs are relative to *https://api.weproov.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportGet**](ReportApi.md#reportGet) | **GET** /report | Allows you to retrieve the reports list
[**reportProovCodeDelete**](ReportApi.md#reportProovCodeDelete) | **DELETE** /report/{proov_code} | Allows you to delete a report
[**reportProovCodeGet**](ReportApi.md#reportProovCodeGet) | **GET** /report/{proov_code} | Allows you to retrieve a full report
[**reportProovCodePost**](ReportApi.md#reportProovCodePost) | **POST** /report/{proov_code} | Allows you to update a report

# **reportGet**
> \Swagger\Client\Model\ReportShort[] reportGet($lang, $find, $custom_ref, $category_id, $sub_category_id, $state, $template_id, $limit, $offset, $created_at, $finished_at, $dropoff_finished_at)

Allows you to retrieve the reports list

Allows you to retrieve all reports    ***find*** allows you to search within all values contained in a report    Settings :   - ***created_at (creation date)***    - ***finished_at (first report's closing date)***   - ***dropoff_finished_at (second report's closing date)***       allows you to search by date range (datetime separate by ```,```) Exemple:     - ***\"after the...\"*** : ***finished_at=2018-03-19T16:32:39.329+00:00***   - ***\"before the...\"*** : ***finished_at=,2018-03-19T16:32:39.329+00:00***   - ***\"between the X and the X\"*** : ***finished_at=2018-03-19T16:32:39.329+00:00,2018-03-19T16:32:39.329+00:00***

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lang = new \Swagger\Client\Model\Local(); // \Swagger\Client\Model\Local | Response language
$find = "find_example"; // string | filter by id of category
$custom_ref = "custom_ref_example"; // string | filter by custom reference
$category_id = 56; // int | filter by id of category
$sub_category_id = 56; // int | filter by id of subcategory
$state = "state_example"; // string | filter by id of category
$template_id = 56; // int | template of id used
$limit = 56; // int | Max: 50
$offset = 56; // int | offset
$created_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | datetime range in RFC3339 separate by ','
$finished_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | datetime range in RFC3339 separate by ','
$dropoff_finished_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | datetime range in RFC3339 separate by ','

try {
    $result = $apiInstance->reportGet($lang, $find, $custom_ref, $category_id, $sub_category_id, $state, $template_id, $limit, $offset, $created_at, $finished_at, $dropoff_finished_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang** | [**\Swagger\Client\Model\Local**](../Model/.md)| Response language | [optional]
 **find** | **string**| filter by id of category | [optional]
 **custom_ref** | **string**| filter by custom reference | [optional]
 **category_id** | **int**| filter by id of category | [optional]
 **sub_category_id** | **int**| filter by id of subcategory | [optional]
 **state** | **string**| filter by id of category | [optional]
 **template_id** | **int**| template of id used | [optional]
 **limit** | **int**| Max: 50 | [optional]
 **offset** | **int**| offset | [optional]
 **created_at** | **\DateTime**| datetime range in RFC3339 separate by &#x27;,&#x27; | [optional]
 **finished_at** | **\DateTime**| datetime range in RFC3339 separate by &#x27;,&#x27; | [optional]
 **dropoff_finished_at** | **\DateTime**| datetime range in RFC3339 separate by &#x27;,&#x27; | [optional]

### Return type

[**\Swagger\Client\Model\ReportShort[]**](../Model/ReportShort.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportProovCodeDelete**
> \Swagger\Client\Model\InlineResponse2001 reportProovCodeDelete($proov_code, $lang)

Allows you to delete a report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proov_code = "proov_code_example"; // string | Report ProovCode or CustomRef prefix by underscore (```_```)
$lang = new \Swagger\Client\Model\Local(); // \Swagger\Client\Model\Local | Response language

try {
    $result = $apiInstance->reportProovCodeDelete($proov_code, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportProovCodeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **proov_code** | **string**| Report ProovCode or CustomRef prefix by underscore (&#x60;&#x60;&#x60;_&#x60;&#x60;&#x60;) |
 **lang** | [**\Swagger\Client\Model\Local**](../Model/.md)| Response language | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportProovCodeGet**
> \Swagger\Client\Model\Report reportProovCodeGet($proov_code, $lang)

Allows you to retrieve a full report

Allows you to retrieve a full report    If you prefer to use custom_ref to retrieve the report you can prefix by ```_```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proov_code = "proov_code_example"; // string | Report ProovCode or CustomRef prefix by underscore (```_```)
$lang = new \Swagger\Client\Model\Local(); // \Swagger\Client\Model\Local | Response language

try {
    $result = $apiInstance->reportProovCodeGet($proov_code, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportProovCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **proov_code** | **string**| Report ProovCode or CustomRef prefix by underscore (&#x60;&#x60;&#x60;_&#x60;&#x60;&#x60;) |
 **lang** | [**\Swagger\Client\Model\Local**](../Model/.md)| Response language | [optional]

### Return type

[**\Swagger\Client\Model\Report**](../Model/Report.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportProovCodePost**
> \Swagger\Client\Model\Template reportProovCodePost($proov_code, $body, $lang)

Allows you to update a report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proov_code = "proov_code_example"; // string | Report ProovCode or CustomRef prefix by underscore (```_```)
$body = new \Swagger\Client\Model\Update(); // \Swagger\Client\Model\Update | 
$lang = new \Swagger\Client\Model\Local(); // \Swagger\Client\Model\Local | Response language

try {
    $result = $apiInstance->reportProovCodePost($proov_code, $body, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportProovCodePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **proov_code** | **string**| Report ProovCode or CustomRef prefix by underscore (&#x60;&#x60;&#x60;_&#x60;&#x60;&#x60;) |
 **body** | [**\Swagger\Client\Model\Update**](../Model/Update.md)|  | [optional]
 **lang** | [**\Swagger\Client\Model\Local**](../Model/.md)| Response language | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

