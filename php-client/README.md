# ekm-php

Our new API allows partners to build significantly better integrations with the EKM platform.

To try out the below endpoints, or for full up to date representations of the request / response models, please see the [swagger page](https://api.ekm.net/swagger/index.html). (We display examples here, but the swagger page is guaranteed to show the complete model.)

To keep up to date with the latest updates, please see our [RSS feed](https://partners.ekm.net/ChangeLog/Feed) or the [partner dashboard](https://partners.ekm.net/).

For more information, please visit [https://ekm.com](https://ekm.com).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/ekm-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: Bearer
$config = Mrstebo\EkmPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mrstebo\EkmPHP\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1AddCategory = new \Mrstebo\EkmPHP\Models\V1AddCategory(); // \Mrstebo\EkmPHP\Models\V1AddCategory

try {
    $result = $apiInstance->categoriesCreate($v1AddCategory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesCreate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ekm.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CategoriesApi* | [**categoriesCreate**](docs/Api/CategoriesApi.md#categoriescreate) | **POST** /api/v1/categories | Add a category
*CategoriesApi* | [**categoriesDelete**](docs/Api/CategoriesApi.md#categoriesdelete) | **DELETE** /api/v1/categories/{id} | Delete a category
*CategoriesApi* | [**categoriesDeleteCategoryManaged**](docs/Api/CategoriesApi.md#categoriesdeletecategorymanaged) | **DELETE** /api/v1/categories/{id}/categorymanaged/{childCategoryId} | Stops a category from being managed by another category
*CategoriesApi* | [**categoriesGet**](docs/Api/CategoriesApi.md#categoriesget) | **GET** /api/v1/categories/{id} | Get a category
*CategoriesApi* | [**categoriesGetAll**](docs/Api/CategoriesApi.md#categoriesgetall) | **GET** /api/v1/categories | Get a paginated set of categories
*CategoriesApi* | [**categoriesGetCategoryFilters**](docs/Api/CategoriesApi.md#categoriesgetcategoryfilters) | **GET** /api/v1/categories/{id}/filters | 
*CategoriesApi* | [**categoriesSearch**](docs/Api/CategoriesApi.md#categoriessearch) | **GET** /api/v1/categories/search | Searches categories based on search criteria
*CategoriesApi* | [**categoriesSetCategoryManaged**](docs/Api/CategoriesApi.md#categoriessetcategorymanaged) | **POST** /api/v1/categories/{id}/categorymanaged/{childCategoryId} | Set a category to be managed by another category
*CategoriesApi* | [**categoriesSubcategories**](docs/Api/CategoriesApi.md#categoriessubcategories) | **GET** /api/v1/categories/{id}/subcategories | Get a paginated set of subcategories
*CategoriesApi* | [**categoriesUpdate**](docs/Api/CategoriesApi.md#categoriesupdate) | **PUT** /api/v1/categories/{id} | Update a category
*CategoriesApi* | [**categoriesUpdateCategoryFilters**](docs/Api/CategoriesApi.md#categoriesupdatecategoryfilters) | **PUT** /api/v1/categories/{id}/filters | 
*CustomerAddressesApi* | [**customerAddressesCreate**](docs/Api/CustomerAddressesApi.md#customeraddressescreate) | **POST** /api/v1/customers/{customerId}/addresses | Add a Customer Address
*CustomerAddressesApi* | [**customerAddressesDelete**](docs/Api/CustomerAddressesApi.md#customeraddressesdelete) | **DELETE** /api/v1/customers/{customerId}/addresses/{addressId} | Delete a Customer Address
*CustomerAddressesApi* | [**customerAddressesGetAll**](docs/Api/CustomerAddressesApi.md#customeraddressesgetall) | **GET** /api/v1/customers/{customerId}/addresses | Get a paginated set of Customer Addresses
*CustomerAddressesApi* | [**customerAddressesGetById**](docs/Api/CustomerAddressesApi.md#customeraddressesgetbyid) | **GET** /api/v1/customers/{customerId}/addresses/{addressId} | Get a single Customer Address by Id
*CustomerAddressesApi* | [**customerAddressesSearch**](docs/Api/CustomerAddressesApi.md#customeraddressessearch) | **GET** /api/v1/customers/{customerId}/addresses/search | Searches customer addresses based on search criteria
*CustomerAddressesApi* | [**customerAddressesUpdate**](docs/Api/CustomerAddressesApi.md#customeraddressesupdate) | **PUT** /api/v1/customers/{customerId}/addresses/{addressId} | Update a Customer Address
*CustomersApi* | [**customersCreate**](docs/Api/CustomersApi.md#customerscreate) | **POST** /api/v1/customers | Add a customer
*CustomersApi* | [**customersDelete**](docs/Api/CustomersApi.md#customersdelete) | **DELETE** /api/v1/customers/{id} | Delete a Customer
*CustomersApi* | [**customersGetAll**](docs/Api/CustomersApi.md#customersgetall) | **GET** /api/v1/customers | Get a paginated set of Customers
*CustomersApi* | [**customersGetById**](docs/Api/CustomersApi.md#customersgetbyid) | **GET** /api/v1/customers/{id} | Get a single Customer by Id
*CustomersApi* | [**customersSearch**](docs/Api/CustomersApi.md#customerssearch) | **GET** /api/v1/customers/search | Searches customers based on search criteria
*CustomersApi* | [**customersUpdate**](docs/Api/CustomersApi.md#customersupdate) | **PUT** /api/v1/customers/{id} | Update a Customer
*DomainsApi* | [**domainsGetPrimaryDomain**](docs/Api/DomainsApi.md#domainsgetprimarydomain) | **GET** /api/v1/settings/domains | Get the current Primary Domain
*OrderStatusesApi* | [**orderStatusesGetOrderStatuses**](docs/Api/OrderStatusesApi.md#orderstatusesgetorderstatuses) | **GET** /api/v1/settings/orderstatuses | Get the current Order Statuses
*OrdersApi* | [**ordersGetAll**](docs/Api/OrdersApi.md#ordersgetall) | **GET** /api/v2/orders | Get a paginated set of orders
*OrdersApi* | [**ordersGetById**](docs/Api/OrdersApi.md#ordersgetbyid) | **GET** /api/v2/orders/{id} | Get an order by ID
*OrdersApi* | [**ordersGetItems**](docs/Api/OrdersApi.md#ordersgetitems) | **GET** /api/v2/orders/{id}/items | Get an order&#39;s items
*OrdersApi* | [**ordersGetOrderItemById**](docs/Api/OrdersApi.md#ordersgetorderitembyid) | **GET** /api/v2/orders/{id}/items/{itemId} | Get a specific item from an order
*OrdersApi* | [**ordersSearch**](docs/Api/OrdersApi.md#orderssearch) | **GET** /api/v2/orders/search | Searches orders based on search criteria
*OrdersApi* | [**ordersUpdateDeliveryTracking**](docs/Api/OrdersApi.md#ordersupdatedeliverytracking) | **PUT** /api/v2/orders/{id}/deliveryTracking | Updates delivery tracking info for an order
*OrdersApi* | [**ordersUpdateStatus**](docs/Api/OrdersApi.md#ordersupdatestatus) | **PUT** /api/v2/orders/{id}/status | Updates the status of an order
*PlansApi* | [**plansGetAll**](docs/Api/PlansApi.md#plansgetall) | **GET** /api/v1/settings/plans | Get all plans
*PlansApi* | [**plansGetById**](docs/Api/PlansApi.md#plansgetbyid) | **GET** /api/v1/settings/plans/{id} | Get a plan by id
*PlansApi* | [**plansGetCurrent**](docs/Api/PlansApi.md#plansgetcurrent) | **GET** /api/v1/settings/plans/current | Get the current users plan
*ProductAttributeItemsApi* | [**productAttributeItemsCreate**](docs/Api/ProductAttributeItemsApi.md#productattributeitemscreate) | **POST** /api/v1/products/{id}/attributes | Add a attribute item to a product
*ProductAttributeItemsApi* | [**productAttributeItemsGet**](docs/Api/ProductAttributeItemsApi.md#productattributeitemsget) | **GET** /api/v1/products/{id}/attributes/{attribute_key} | Get a product attribute item
*ProductAttributeItemsApi* | [**productAttributeItemsGetAll**](docs/Api/ProductAttributeItemsApi.md#productattributeitemsgetall) | **GET** /api/v1/products/{id}/attributes | Get all of a products attribute items
*ProductAttributeItemsApi* | [**productAttributeItemsUpdate**](docs/Api/ProductAttributeItemsApi.md#productattributeitemsupdate) | **PUT** /api/v1/products/{id}/attributes/{attribute_key} | Update a product attribute item
*ProductAttributesApi* | [**productAttributesCreate**](docs/Api/ProductAttributesApi.md#productattributescreate) | **POST** /api/v1/settings/productattributes | Add a product attribute
*ProductAttributesApi* | [**productAttributesDelete**](docs/Api/ProductAttributesApi.md#productattributesdelete) | **DELETE** /api/v1/settings/productattributes/{attribute_key} | Delete a product attribute
*ProductAttributesApi* | [**productAttributesGet**](docs/Api/ProductAttributesApi.md#productattributesget) | **GET** /api/v1/settings/productattributes/{attribute_key} | Get a product attribute
*ProductAttributesApi* | [**productAttributesGetAll**](docs/Api/ProductAttributesApi.md#productattributesgetall) | **GET** /api/v1/settings/productattributes | Get all product attributes
*ProductAttributesApi* | [**productAttributesUpdate**](docs/Api/ProductAttributesApi.md#productattributesupdate) | **PUT** /api/v1/settings/productattributes/{attribute_key} | Update a product attribute
*ProductOptionItemsApi* | [**productOptionItemsCreate**](docs/Api/ProductOptionItemsApi.md#productoptionitemscreate) | **POST** /api/v1/products/{id}/options/{optionId}/items | Add an item to a product option
*ProductOptionItemsApi* | [**productOptionItemsDelete**](docs/Api/ProductOptionItemsApi.md#productoptionitemsdelete) | **DELETE** /api/v1/products/{id}/options/{optionId}/items/{optionItemId} | Delete an option item
*ProductOptionItemsApi* | [**productOptionItemsUpdate**](docs/Api/ProductOptionItemsApi.md#productoptionitemsupdate) | **PUT** /api/v1/products/{id}/options/{optionId}/items/{optionItemId} | Update a product option item
*ProductOptionsApi* | [**productOptionsCreate**](docs/Api/ProductOptionsApi.md#productoptionscreate) | **POST** /api/v1/products/{id}/options | Add an option to a product
*ProductOptionsApi* | [**productOptionsDelete**](docs/Api/ProductOptionsApi.md#productoptionsdelete) | **DELETE** /api/v1/products/{id}/options/{optionId} | Delete an option
*ProductOptionsApi* | [**productOptionsGet**](docs/Api/ProductOptionsApi.md#productoptionsget) | **GET** /api/v1/products/{id}/options/{optionId} | Get a product option
*ProductOptionsApi* | [**productOptionsGetAll**](docs/Api/ProductOptionsApi.md#productoptionsgetall) | **GET** /api/v1/products/{id}/options | Get a products options
*ProductOptionsApi* | [**productOptionsUpdate**](docs/Api/ProductOptionsApi.md#productoptionsupdate) | **PUT** /api/v1/products/{id}/options/{optionId} | Update a product option
*ProductStockApi* | [**productStockGet**](docs/Api/ProductStockApi.md#productstockget) | **GET** /api/v1/products/{id}/stock | Get the stock for a product
*ProductStockApi* | [**productStockUpdate**](docs/Api/ProductStockApi.md#productstockupdate) | **PUT** /api/v1/products/{id}/stock | Set the stock for a product
*ProductVariantStockApi* | [**productVariantStockGet**](docs/Api/ProductVariantStockApi.md#productvariantstockget) | **GET** /api/v1/products/{id}/variants/{variantId}/stock | Get a product variant stock
*ProductVariantStockApi* | [**productVariantStockUpdate**](docs/Api/ProductVariantStockApi.md#productvariantstockupdate) | **PUT** /api/v1/products/{id}/variants/{variantId}/stock | Update a product variant stock
*ProductVariantsApi* | [**productVariantsAssignImageByUrlToProduct**](docs/Api/ProductVariantsApi.md#productvariantsassignimagebyurltoproduct) | **POST** /api/v1/products/{id}/variants/{variantId}/images/{imageNumber} | Set a variants image to a URL
*ProductVariantsApi* | [**productVariantsCreate**](docs/Api/ProductVariantsApi.md#productvariantscreate) | **POST** /api/v1/products/{id}/variants | Add a variant to a product
*ProductVariantsApi* | [**productVariantsDelete**](docs/Api/ProductVariantsApi.md#productvariantsdelete) | **DELETE** /api/v1/products/{id}/variants/{variantId} | Delete a variant
*ProductVariantsApi* | [**productVariantsGet**](docs/Api/ProductVariantsApi.md#productvariantsget) | **GET** /api/v1/products/variants/{variantId} | Get a product variant
*ProductVariantsApi* | [**productVariantsGetAll**](docs/Api/ProductVariantsApi.md#productvariantsgetall) | **GET** /api/v1/products/{id}/variants | Get a products variants
*ProductVariantsApi* | [**productVariantsGetProductImages**](docs/Api/ProductVariantsApi.md#productvariantsgetproductimages) | **GET** /api/v1/products/{id}/variants/{variantId}/images | Get a variant&#39;s images.
*ProductVariantsApi* | [**productVariantsGetProductVariant**](docs/Api/ProductVariantsApi.md#productvariantsgetproductvariant) | **GET** /api/v1/products/{id}/variants/{variantId} | Get a product variant
*ProductVariantsApi* | [**productVariantsSearch**](docs/Api/ProductVariantsApi.md#productvariantssearch) | **GET** /api/v1/variants/search | Searches variants based on search criteria
*ProductVariantsApi* | [**productVariantsUpdate**](docs/Api/ProductVariantsApi.md#productvariantsupdate) | **PUT** /api/v1/products/{id}/variants/{variantId} | Update a product variant
*ProductsApi* | [**productsAssignImageByUrlToProduct**](docs/Api/ProductsApi.md#productsassignimagebyurltoproduct) | **POST** /api/v1/products/{id}/images/{imageNumber} | Assign an image by Url to a product
*ProductsApi* | [**productsCreate**](docs/Api/ProductsApi.md#productscreate) | **POST** /api/v1/products | Add a Product
*ProductsApi* | [**productsDelete**](docs/Api/ProductsApi.md#productsdelete) | **DELETE** /api/v1/products/{id} | Delete a Product
*ProductsApi* | [**productsDeleteCategoryManaged**](docs/Api/ProductsApi.md#productsdeletecategorymanaged) | **DELETE** /api/v1/products/{id}/categorymanaged/{categoryId} | Stops a product from being managed by another category
*ProductsApi* | [**productsGet**](docs/Api/ProductsApi.md#productsget) | **GET** /api/v1/products/{id} | Get a product
*ProductsApi* | [**productsGetAll**](docs/Api/ProductsApi.md#productsgetall) | **GET** /api/v1/products | Get a paginated set of products
*ProductsApi* | [**productsGetProductImages**](docs/Api/ProductsApi.md#productsgetproductimages) | **GET** /api/v1/products/{id}/images | Get a product&#39;s images.
*ProductsApi* | [**productsSearch**](docs/Api/ProductsApi.md#productssearch) | **GET** /api/v1/products/search | Searches products based on search criteria
*ProductsApi* | [**productsSetCategoryManaged**](docs/Api/ProductsApi.md#productssetcategorymanaged) | **POST** /api/v1/products/{id}/categorymanaged/{categoryId} | Set a product to be managed by another category
*ProductsApi* | [**productsUpdate**](docs/Api/ProductsApi.md#productsupdate) | **PUT** /api/v1/products/{id} | Update a Product
*TaxApi* | [**taxCreateTaxRate**](docs/Api/TaxApi.md#taxcreatetaxrate) | **POST** /api/v1/settings/tax/rates | Add a Tax Rate
*TaxApi* | [**taxDeleteTaxRate**](docs/Api/TaxApi.md#taxdeletetaxrate) | **DELETE** /api/v1/settings/tax/rates/{id} | Delete a Tax Rate
*TaxApi* | [**taxGetTaxRate**](docs/Api/TaxApi.md#taxgettaxrate) | **GET** /api/v1/settings/tax/rates/{id} | Get a specific Tax Rate
*TaxApi* | [**taxGetTaxRates**](docs/Api/TaxApi.md#taxgettaxrates) | **GET** /api/v1/settings/tax/rates | Get a list of Tax Rates
*TaxApi* | [**taxGetTaxSettings**](docs/Api/TaxApi.md#taxgettaxsettings) | **GET** /api/v1/settings/tax | Get the current Tax Settings
*TaxApi* | [**taxUpdateTaxRate**](docs/Api/TaxApi.md#taxupdatetaxrate) | **PUT** /api/v1/settings/tax/rates/{id} | Update a Tax Rate
*TaxApi* | [**taxUpdateTaxSettings**](docs/Api/TaxApi.md#taxupdatetaxsettings) | **PUT** /api/v1/settings/tax | Update the current Tax Settings

## Models

- [CountryCodeModel](docs/Model/CountryCodeModel.md)
- [DeliveryTax](docs/Model/DeliveryTax.md)
- [Plan](docs/Model/Plan.md)
- [PlanRestriction](docs/Model/PlanRestriction.md)
- [TaxRateModel](docs/Model/TaxRateModel.md)
- [TaxSettings](docs/Model/TaxSettings.md)
- [TempestLink](docs/Model/TempestLink.md)
- [TempestResponseListPlan](docs/Model/TempestResponseListPlan.md)
- [TempestResponseListTaxRateModel](docs/Model/TempestResponseListTaxRateModel.md)
- [TempestResponseListV1Category](docs/Model/TempestResponseListV1Category.md)
- [TempestResponseListV1Customer](docs/Model/TempestResponseListV1Customer.md)
- [TempestResponseListV1CustomerAddress](docs/Model/TempestResponseListV1CustomerAddress.md)
- [TempestResponseListV1Product](docs/Model/TempestResponseListV1Product.md)
- [TempestResponseListV1ProductAttribute](docs/Model/TempestResponseListV1ProductAttribute.md)
- [TempestResponseListV1ProductAttributeItem](docs/Model/TempestResponseListV1ProductAttributeItem.md)
- [TempestResponseListV1ProductOption](docs/Model/TempestResponseListV1ProductOption.md)
- [TempestResponseListV1ProductVariant](docs/Model/TempestResponseListV1ProductVariant.md)
- [TempestResponseListV1SubCategory](docs/Model/TempestResponseListV1SubCategory.md)
- [TempestResponseListV2Order](docs/Model/TempestResponseListV2Order.md)
- [TempestResponseListV2OrderItem](docs/Model/TempestResponseListV2OrderItem.md)
- [TempestResponsePlan](docs/Model/TempestResponsePlan.md)
- [TempestResponseTaxRateModel](docs/Model/TempestResponseTaxRateModel.md)
- [TempestResponseTaxSettings](docs/Model/TempestResponseTaxSettings.md)
- [TempestResponseTempestValidationError](docs/Model/TempestResponseTempestValidationError.md)
- [TempestResponseV1Category](docs/Model/TempestResponseV1Category.md)
- [TempestResponseV1CategoryFilters](docs/Model/TempestResponseV1CategoryFilters.md)
- [TempestResponseV1Customer](docs/Model/TempestResponseV1Customer.md)
- [TempestResponseV1CustomerAddress](docs/Model/TempestResponseV1CustomerAddress.md)
- [TempestResponseV1DomainName](docs/Model/TempestResponseV1DomainName.md)
- [TempestResponseV1OrderStatuses](docs/Model/TempestResponseV1OrderStatuses.md)
- [TempestResponseV1Product](docs/Model/TempestResponseV1Product.md)
- [TempestResponseV1ProductAttribute](docs/Model/TempestResponseV1ProductAttribute.md)
- [TempestResponseV1ProductAttributeItem](docs/Model/TempestResponseV1ProductAttributeItem.md)
- [TempestResponseV1ProductCategory](docs/Model/TempestResponseV1ProductCategory.md)
- [TempestResponseV1ProductImages](docs/Model/TempestResponseV1ProductImages.md)
- [TempestResponseV1ProductOption](docs/Model/TempestResponseV1ProductOption.md)
- [TempestResponseV1ProductOptionItem](docs/Model/TempestResponseV1ProductOptionItem.md)
- [TempestResponseV1ProductStock](docs/Model/TempestResponseV1ProductStock.md)
- [TempestResponseV1ProductVariant](docs/Model/TempestResponseV1ProductVariant.md)
- [TempestResponseV1ProductVariantStock](docs/Model/TempestResponseV1ProductVariantStock.md)
- [TempestResponseV1SubCategory](docs/Model/TempestResponseV1SubCategory.md)
- [TempestResponseV2Order](docs/Model/TempestResponseV2Order.md)
- [TempestResponseV2OrderItem](docs/Model/TempestResponseV2OrderItem.md)
- [TempestValidationError](docs/Model/TempestValidationError.md)
- [V1AddCategory](docs/Model/V1AddCategory.md)
- [V1AddCustomer](docs/Model/V1AddCustomer.md)
- [V1AddProduct](docs/Model/V1AddProduct.md)
- [V1AddProductOption](docs/Model/V1AddProductOption.md)
- [V1Category](docs/Model/V1Category.md)
- [V1CategoryFilters](docs/Model/V1CategoryFilters.md)
- [V1Customer](docs/Model/V1Customer.md)
- [V1CustomerAddress](docs/Model/V1CustomerAddress.md)
- [V1DomainName](docs/Model/V1DomainName.md)
- [V1OrderCustomerDetails](docs/Model/V1OrderCustomerDetails.md)
- [V1OrderDeliveryTracking](docs/Model/V1OrderDeliveryTracking.md)
- [V1OrderStatus](docs/Model/V1OrderStatus.md)
- [V1OrderStatusSetting](docs/Model/V1OrderStatusSetting.md)
- [V1OrderStatuses](docs/Model/V1OrderStatuses.md)
- [V1Product](docs/Model/V1Product.md)
- [V1ProductAttribute](docs/Model/V1ProductAttribute.md)
- [V1ProductAttributeItem](docs/Model/V1ProductAttributeItem.md)
- [V1ProductCategory](docs/Model/V1ProductCategory.md)
- [V1ProductImage](docs/Model/V1ProductImage.md)
- [V1ProductImages](docs/Model/V1ProductImages.md)
- [V1ProductOption](docs/Model/V1ProductOption.md)
- [V1ProductOptionItem](docs/Model/V1ProductOptionItem.md)
- [V1ProductStock](docs/Model/V1ProductStock.md)
- [V1ProductVariant](docs/Model/V1ProductVariant.md)
- [V1ProductVariantStock](docs/Model/V1ProductVariantStock.md)
- [V1ShippingAddress](docs/Model/V1ShippingAddress.md)
- [V1SubCategory](docs/Model/V1SubCategory.md)
- [V1UpdateCategory](docs/Model/V1UpdateCategory.md)
- [V1UpdateCustomer](docs/Model/V1UpdateCustomer.md)
- [V1UpdateProduct](docs/Model/V1UpdateProduct.md)
- [V1UpdateProductOption](docs/Model/V1UpdateProductOption.md)
- [V1VariantCombination](docs/Model/V1VariantCombination.md)
- [V2Order](docs/Model/V2Order.md)
- [V2OrderItem](docs/Model/V2OrderItem.md)

## Authorization

### Bearer

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://api.ekm.net/connect/authorize`
- **Scopes**: 
    - **openid**: Access a shops identity token.
    - **profile**: Read a user's details. (name, email, etc)
    - **tempest.internal.orders.read**: Internal - Read a shop's orders.
    - **tempest.customers.read**: Read a shop's customers.
    - **tempest.customers.write**: Modify a shop's customers.
    - **tempest.Guests.read**: Read a shop's Guests.
    - **tempest.Guests.write**: Modify a shop's Guests.
    - **tempest.orders.read**: Read a shop's orders.
    - **tempest.orders.write**: Modify a shop's orders.
    - **tempest.orders.customers.notes.read**: Read a shop's order customer notes.
    - **tempest.orders.customers.notes.write**: Modify a shop's order customer notes.
    - **tempest.products.read**: Read a shop's products.
    - **tempest.products.write**: Modify a shop's products.
    - **tempest.categories.read**: Read a shop's categories.
    - **tempest.categories.write**: Modify a shop's categories.
    - **tempest.settings.orderstatuses.read**: Read a shop's order statuses.
    - **tempest.settings.domains.read**: Read a shop's domains.
    - **tempest.settings.accountdetails.read**: Read a shop's account details.
    - **tempest.settings.tax.read**: Read a shop's tax settings.
    - **tempest.settings.tax.write**: Write a shop's tax settings.
    - **tempest.settings.currency.read**: Read a shop's currency settings.
    - **tempest.cartsessions.read**: Read a shop's cart sessions.
    - **tempest.cartsessions.write**: Modify a shop's cart sessions.
    - **tempest.cart.read**: Read a shop's cart
    - **tempest.cart.write**: Modify a shop's cart.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

api-support@ekm.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `Latest`
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
