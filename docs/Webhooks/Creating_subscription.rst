.. _creating_subscription:

Creating webhook subscription (Beta version)
============================================

To create a webhook subscription, send a ``POST`` request to ``/webhooks``.
The body needs to contain the following JSON data. For example:

  .. code-block:: JSON
   :linenos:
    {
        "description": "Subscription for events",
        "url": "https://ennpjtc2q1cm.x.pipedream.net",
        "events": [
            "OrderCreated"
        ]
    }

The response, if successfully will be a JSON object with the following data:

  .. code-block:: JSON
   :linenos:

    {
        "success": true
    }

If you can no longer create a webhook subscription, you will receive a ``500 Internal Server Error``

***********
Event Types
***********

The list of event types that you can subscribe to recieve real-time updates.

.. csv-table::
   :header: "Event Type", "Description"
   :widths: 30,70

   "``OrderCreated``","This type will notify for order created event"
   "``LineItemStateTransition``","This type will notify when an orderline's status is changed :ref:`See Orderline status for more information.<_orderline_status>`"

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
