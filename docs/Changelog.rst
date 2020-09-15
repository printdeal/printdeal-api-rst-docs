.. _changelog:

Changelog
==========
15-09-2020 ``V2``
    Added the `customer discount` field to the response of the :ref:`retrieve order information<retrieving_order_information>` call. ``/api/orders/{orderId} or /api/orders/{orderUuid}``

11-09-2020 ``v1``
    Version `v1` of the api is shutdown.

27-08-2020 ``v2``
    Added the `promised arrval date` field to the response of the :ref:`validate product<validate_product>` call. ``/api/products/{sku}``

05-08-2020 ``v2``
    We set max length limit for `reference` and `poNumber` fields to 35 characters in create order API.

09-03-2020 ``v2``
    We updated our internal systems and have made some changes to the API. We released our API V2 as a beta version.

21-12-2018 ``v1``
    When an order creation failed, you now receive an 404 result, with an error message that the order creation has failed.
    Orders that failed before this date and time will have a 404 not found response.
