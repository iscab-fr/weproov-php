# Swagger\Client\TemplateApi

All URIs are relative to *https://api.weproov.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**templateGet**](TemplateApi.md#templateGet) | **GET** /template | Allows you to retrieve the templates list
[**templateIdGet**](TemplateApi.md#templateIdGet) | **GET** /template/{id} | Allows you to retrieve a template
[**templateIdPut**](TemplateApi.md#templateIdPut) | **PUT** /template/{id} | Create a report from template

# **templateGet**
> \Swagger\Client\Model\TemplateShort[] templateGet($lang, $category_id, $sub_category_id)

Allows you to retrieve the templates list

Retrieves the list of templates.    You can filter by category_id or subcategory id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lang = new \Swagger\Client\Model\Local(); // \Swagger\Client\Model\Local | Language used during response
$category_id = 56; // int | filter by category ID
$sub_category_id = 56; // int | filter by subcategory ID

try {
    $result = $apiInstance->templateGet($lang, $category_id, $sub_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang** | [**\Swagger\Client\Model\Local**](../Model/.md)| Language used during response | [optional]
 **category_id** | **int**| filter by category ID | [optional]
 **sub_category_id** | **int**| filter by subcategory ID | [optional]

### Return type

[**\Swagger\Client\Model\TemplateShort[]**](../Model/TemplateShort.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateIdGet**
> \Swagger\Client\Model\Template templateIdGet($id, $lang)

Allows you to retrieve a template

Allows you to retrieve and scan the template for you to see which fileds it contains

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Template ID
$lang = new \Swagger\Client\Model\Local(); // \Swagger\Client\Model\Local | Response language

try {
    $result = $apiInstance->templateIdGet($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Template ID |
 **lang** | [**\Swagger\Client\Model\Local**](../Model/.md)| Response language | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateIdPut**
> \Swagger\Client\Model\Report templateIdPut($id, $body, $lang, $cci)

Create a report from template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Template ID
$body = new \Swagger\Client\Model\Update(); // \Swagger\Client\Model\Update | 
$lang = new \Swagger\Client\Model\Local(); // \Swagger\Client\Model\Local | Response language
$cci = "cci_example"; // string | Alert from mail

try {
    $result = $apiInstance->templateIdPut($id, $body, $lang, $cci);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->templateIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Template ID |
 **body** | [**\Swagger\Client\Model\Update**](../Model/Update.md)|  | [optional]
 **lang** | [**\Swagger\Client\Model\Local**](../Model/.md)| Response language | [optional]
 **cci** | **string**| Alert from mail | [optional]

### Return type

[**\Swagger\Client\Model\Report**](../Model/Report.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

