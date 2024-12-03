#########
Changelog
#########

****
2024
****

* 03-12-2024

  * Removed the `Migrating from v1 to v2` page from the documentation.
  * Removed the `Versioning` page from the documentation.
  * Updated the `Getting Started` page to remove the versioning details.

* 27-11-2024

  * Make quote documentation visible
  * Remove migration guide from the documentation
  * Update delivery methods documentation to remove versioning details
  * Update the FAQ: Removed Textile products & Dynamic attributes parts

****
2022
****

* 29-07-2022

  * Added ``vatId`` as an optional field under ``Address`` while creating order.
  
****
2021
****

* 10-12-2021

  * Updated to create a quote order :ref:`Creating quote order<creating_quote_order>`

* 03-11-2021

  * Added a new DELETE webhook endpoint to delete a webhook :ref:`Deleting a webhook<deleting_a_webhook>`
  * Added a new GET webhooks endpoint to retrieve webhook information :ref:`Retrieving your webhooks<retrieving_your_webhooks>`

* 15-04-2021

  * Added the ability to create test orders.

****
2020
****

* 22-10-2020

  * Added ``company`` as an optional field under ``Address`` while creating order.

* 18-10-2020

  * We released Events and Webhook Subscription as a beta version.

* 23-11-2020

  * Removed `note` field from order object for create order endpoint.

* 20-10-2020

  * ``housenumber`` field under ``Address`` while creating order is a mandatory field now and blank spaces cannot be passed from now on.
  * ``country`` field under ''Address`` now will accept only valid country to ship the order. :ref:`Address<addresses>`


* 09-10-2020

  * Added a new endpoint to add a file to an orderline :ref:`Adding file<adding_file>` call. ``/api/orderlines/{orderlineId}/files``


* 15-09-2020

  * Added the `customer discount` field to the response of the :ref:`retrieve order information<retrieving_order_information>` call. ``/api/orders/{orderId} or /api/orders/{orderUuid}``


* 11-09-2020

  * Version `v1` of the api is shutdown.


* 27-08-2020

  * Added the `promised arrval date` field to the response of the :ref:`validate product<validate_product>` call. ``/api/products/{sku}``

* 05-08-2020

  * We set max length limit for `reference` and `poNumber` fields to 35 characters in create order API.

* 09-03-2020 

  * We updated our internal systems and have made some changes to the API. We released our API V2 as a beta version.

****
2018
****

* 21-12-2018

  * When an order creation failed, you now receive an 404 result, with an error message that the order creation has failed.
    Orders that failed before this date and time will have a 404 not found response.