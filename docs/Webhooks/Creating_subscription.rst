.. _creating_subscription:

Creating webhook subscription
=============================

To create a webhook subscription, send a ``POST`` request to ``https://webhook.api.printdeal.com/webhooks``.
The body needs to contain the following JSON data. For example:

  .. code-block:: JSON
   
   
    {
        "description": "New Subscription for events",
        "url": "https://ennpjtc2q1cm.x.pipedream.net",
        "events": [
            "order.created"
        ]
    }

The response HTTP status code will be 201 if the webhook subscription was successfully created.

If you can no longer create a webhook subscription and receive ``500 Internal Server Error``, please contact us using email api@drukwerkdeal.nl.

***********
Event Types
***********

The list of event types that you can subscribe to receive real-time updates.

.. csv-table::
   :header: "Event Type", "Description"
   :widths: 30,70

    "``order.created``","This type will notify for order created event"
    "``orderline.status.updated``","This type will notify when an orderline's status is updated :ref:`See Orderline status for more information.<_orderline_status>`"

***************
Example request
***************

The following PHP code can be used to create a webhook subscription.
Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE``
with the User-ID and secret you received on the API-credentials page.

Make sure to replace ``URL`` with the url you would like to recieve the events data.

.. literalinclude:: ../code_examples/Webhooks/Creating_subscription_example.php
   :language: PHP
   
