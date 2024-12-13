.. _deleting_a_webhook:

Deleting a webhook
==================

To delete a webhook, send a ``DELETE`` request to ``https://webhook.api.printdeal.com/webhooks/{uuid}``.

The response, if successfully deleted, will be a JSON object with the status as Inactive:

  .. code-block:: JSON
   

    {
      "uuid": "bb9c54d6-f986-4cb5-a8c2-1116fc4dc911",
      "type": "webhook",
      "status": "Inactive",
      "description": "Subscription for order events",
      "configuration": {
        "url": "https://example.com/events",
        "events": [
            "order.created",
        ]
      },
      "createdAt": "2021-09-09T05:59:10.000Z",
      "updatedAt": "2021-09-09T05:59:10.000Z"
    }

If you can no longer delete your webhook, you will receive a ``500 Internal Server Error``.

***************
Example request
***************

The following PHP code can be used to delete a webhook.
Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE``
with the User-ID and secret you received on the API-credentials page.

Make sure to replace ``UUID`` with the uuid of the webhook you would like to delete.

.. literalinclude:: ../code_examples/Webhooks/Deleting_a_webhook_example.php
   :language: PHP
   
