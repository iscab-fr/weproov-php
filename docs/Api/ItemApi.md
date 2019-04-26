# Swagger\Client\ItemApi

All URIs are relative to *https://api.weproov.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**itemGet**](ItemApi.md#itemGet) | **GET** /item | Allows you to retrieve the items list
[**itemIdDelete**](ItemApi.md#itemIdDelete) | **DELETE** /item/{id} | Allows you to delete an item
[**itemIdGet**](ItemApi.md#itemIdGet) | **GET** /item/{id} | Allows you to retrieve an item
[**itemIdReportGet**](ItemApi.md#itemIdReportGet) | **GET** /item/{id}/report | Allows you to retrieve the reports list that is linked to a specific item

# **itemGet**
> \Swagger\Client\Model\ItemShort[] itemGet($lang, $find, $limit, $offset, $created_at, $updated_at)

Allows you to retrieve the items list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lang = new \Swagger\Client\Model\Local(); // \Swagger\Client\Model\Local | Response language
$find = "find_example"; // string | filter by id of category
$limit = 56; // int | Max: 50
$offset = 56; // int | offset
$created_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | range of datetime in RFC3339 separate by ','
$updated_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | range of datetime in RFC3339 separate by ','

try {
    $result = $apiInstance->itemGet($lang, $find, $limit, $offset, $created_at, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang** | [**\Swagger\Client\Model\Local**](../Model/.md)| Response language | [optional]
 **find** | **string**| filter by id of category | [optional]
 **limit** | **int**| Max: 50 | [optional]
 **offset** | **int**| offset | [optional]
 **created_at** | **\DateTime**| range of datetime in RFC3339 separate by &#x27;,&#x27; | [optional]
 **updated_at** | **\DateTime**| range of datetime in RFC3339 separate by &#x27;,&#x27; | [optional]

### Return type

[**\Swagger\Client\Model\ItemShort[]**](../Model/ItemShort.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemIdDelete**
> \Swagger\Client\Model\Success itemIdDelete($id)

Allows you to delete an item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id of item

try {
    $result = $apiInstance->itemIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of item |

### Return type

[**\Swagger\Client\Model\Success**](../Model/Success.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemIdGet**
> \Swagger\Client\Model\Item itemIdGet($id, $lang)

Allows you to retrieve an item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id of item
$lang = new \Swagger\Client\Model\Local(); // \Swagger\Client\Model\Local | Response language

try {
    $result = $apiInstance->itemIdGet($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of item |
 **lang** | [**\Swagger\Client\Model\Local**](../Model/.md)| Response language | [optional]

### Return type

[**\Swagger\Client\Model\Item**](../Model/Item.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemIdReportGet**
> \Swagger\Client\Model\ReportShort[] itemIdReportGet($id, $lang, $find, $custom_ref, $category_id, $sub_category_id, $state, $template_id, $limit, $offset, $created_at, $finished_at, $dropoff_finished_at)

Allows you to retrieve the reports list that is linked to a specific item

Allows you to retrieve the reports list that is linked to a specific item (see documentation/report)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id of item
$lang = new \Swagger\Client\Model\Local(); // \Swagger\Client\Model\Local | Response language
$find = "find_example"; // string | filter by id of category
$custom_ref = "custom_ref_example"; // string | filter by custom reference
$category_id = 56; // int | filter by id of category
$sub_category_id = 56; // int | filter by id of subcategory
$state = "state_example"; // string | filter by id of category
$template_id = 56; // int | template of id used
$limit = 56; // int | Max: 50
$offset = 56; // int | offset
$created_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | range of datetime in RFC3339 separate by ','
$finished_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | range of datetime in RFC3339 separate by ','
$dropoff_finished_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | range of datetime in RFC3339 separate by ','

try {
    $result = $apiInstance->itemIdReportGet($id, $lang, $find, $custom_ref, $category_id, $sub_category_id, $state, $template_id, $limit, $offset, $created_at, $finished_at, $dropoff_finished_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemIdReportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of item |
 **lang** | [**\Swagger\Client\Model\Local**](../Model/.md)| Response language | [optional]
 **find** | **string**| filter by id of category | [optional]
 **custom_ref** | **string**| filter by custom reference | [optional]
 **category_id** | **int**| filter by id of category | [optional]
 **sub_category_id** | **int**| filter by id of subcategory | [optional]
 **state** | **string**| filter by id of category | [optional]
 **template_id** | **int**| template of id used | [optional]
 **limit** | **int**| Max: 50 | [optional]
 **offset** | **int**| offset | [optional]
 **created_at** | **\DateTime**| range of datetime in RFC3339 separate by &#x27;,&#x27; | [optional]
 **finished_at** | **\DateTime**| range of datetime in RFC3339 separate by &#x27;,&#x27; | [optional]
 **dropoff_finished_at** | **\DateTime**| range of datetime in RFC3339 separate by &#x27;,&#x27; | [optional]

### Return type

[**\Swagger\Client\Model\ReportShort[]**](../Model/ReportShort.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

