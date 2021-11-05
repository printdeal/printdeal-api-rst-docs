.. _webhooks:

Webhooks
========

All requests start with the following URL:
``https://webhook.api.printdeal.com``

For example, to retrieve your webhooks, the following URL must be used:
``https://webhook.api.printdeal.com/webhooks``

.. toctree::
   :hidden:

   Webhooks/Creating_subscription
   Webhooks/Retrieving_your_webhooks
   Webhooks/Deleting_a_webhook

You can use regular HTTP methods to communicate with the API about webhooks:
    
- A ``POST`` request to ``/webhooks`` will allow you to create a new webhook subscription.
    See :ref:`Creating subscription<Creating_subscription>` for more information.

- A ``GET`` request to ``/webhooks`` will return you a summary of all your webhooks and request to ``/webhooks/{uuid}`` will give you the information of a specific Webhook.
    See :ref:`retrieving your webhooks<retrieving_your_webhooks>` for more information.

- Sending a ``DELETE`` request to ``/webhooks/{uuid}`` allows you to de-activate an existing webhook subscription.
    See :ref:`Deleting a webhook<deleting_a_webhook>`. for more information.
    