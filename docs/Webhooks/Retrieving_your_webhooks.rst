.. _retrieving_your_webhooks:

Retrieving your webhooks
========================

To receive an overview of your webhooks, you can send a ``GET`` request to ``https://webhook.api.printdeal.com/webhooks``.
Your response will look something like:

.. literalinclude:: ../code_examples/Webhooks/Retrieving_your_webhooks/retrieving_your_webhooks.json
   :language: JSON
   

The uuid field can be used to retrieve more information about a webhook.
You can do this by sending a ``GET`` request to ``https://webhook.api.printdeal.com/webhooks/{uuid}``.

***************************************
Example request for retrieving webhooks
***************************************

The following PHP code can be used for retrieve webhook information. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page.


.. literalinclude:: ../code_examples/Webhooks/Retrieving_your_webhooks/retrieving_your_webhooks_example.php
   :language: PHP
   
