# Swagger\Client\MissionApi

All URIs are relative to *https://api.weproov.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**missionGet**](MissionApi.md#missionGet) | **GET** /mission | Retrieval of all sent missions
[**missionIdDelete**](MissionApi.md#missionIdDelete) | **DELETE** /mission/{id} | Delete a sent mission
[**missionIdGet**](MissionApi.md#missionIdGet) | **GET** /mission/{id} | Retrieval of a single mission
[**missionIdPost**](MissionApi.md#missionIdPost) | **POST** /mission/{id} | Mission update
[**missionPut**](MissionApi.md#missionPut) | **PUT** /mission | Mission creation

# **missionGet**
> \Swagger\Client\Model\Mission[] missionGet($state)

Retrieval of all sent missions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = "state_example"; // string | mission state

try {
    $result = $apiInstance->missionGet($state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MissionApi->missionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | **string**| mission state | [optional]

### Return type

[**\Swagger\Client\Model\Mission[]**](../Model/Mission.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **missionIdDelete**
> \Swagger\Client\Model\Success missionIdDelete($id)

Delete a sent mission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id of mission

try {
    $result = $apiInstance->missionIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MissionApi->missionIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of mission |

### Return type

[**\Swagger\Client\Model\Success**](../Model/Success.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **missionIdGet**
> \Swagger\Client\Model\Mission missionIdGet($id)

Retrieval of a single mission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id of mission

try {
    $result = $apiInstance->missionIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MissionApi->missionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of mission |

### Return type

[**\Swagger\Client\Model\Mission**](../Model/Mission.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **missionIdPost**
> \Swagger\Client\Model\Mission[] missionIdPost($id, $body)

Mission update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id of mission
$body = new \Swagger\Client\Model\MissionCreate(); // \Swagger\Client\Model\MissionCreate | 

try {
    $result = $apiInstance->missionIdPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MissionApi->missionIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of mission |
 **body** | [**\Swagger\Client\Model\MissionCreate**](../Model/MissionCreate.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Mission[]**](../Model/Mission.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **missionPut**
> \Swagger\Client\Model\Mission missionPut($body)

Mission creation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AccessToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MissionCreate(); // \Swagger\Client\Model\MissionCreate | 

try {
    $result = $apiInstance->missionPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MissionApi->missionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MissionCreate**](../Model/MissionCreate.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Mission**](../Model/Mission.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

