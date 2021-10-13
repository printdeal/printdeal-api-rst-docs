.. _creating_subscription:

Creating webhook subscription (Beta version)
============================================

To create a webhook subscription, send a ``POST`` request to ``/webhooks``.
The body needs to contain the following JSON data. For example:

  .. code-block:: JSON
   :linenos:
    {
        "description": "New Subscription for events",
        "url": "https://ennpjtc2q1cm.x.pipedream.net",
        "events": [
            "order.created"
        ]
    }

The response HTTP status code will be 201 if the webhook subscription was successfully created.

If you can no longer create a webhook subscription and receive ``500 Internal Server Error``, please contact us using email api.support@printdeal.com.

***********
Event Types
***********

The list of event types that you can subscribe to recieve real-time updates.

.. csv-table::
   :header: "Event Type", Event Payload, "Description"
   :widths: 20,50,30

   "``order.created``","``{"orderNumber":"10006028","eventType":"order.created"}
``","This type will notify for order created event"
   "``orderline.status.updated``","``{"orderNumber":"10006028","eventType":"orderline.status.updated","lineItemState":"cancelled","oldLineItemState":"waiting-for-artwork","lineItemNumber":"10006028-1","transitionDate":"2021-10-13T08:58:13.962Z"}
``","This type will notify when an orderline's status is changed :ref:`See Orderline status for more information.<_orderline_status>`"

***************
Example request
***************

The following PHP code can be used to create a webhook subscription.
Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE``
with the User-ID and secret you received on the API-credentials page.

Make sure to replace ``URL`` with the url you would like to recieve the events data.

.. literalinclude:: ../code_examples/Webhooks/Creating_subscription_example.php
   :language: PHP
   :linenos:
