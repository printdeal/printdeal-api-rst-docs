.. _retrieving_your_quote_details:

Retrieving your quote details
====================

To receive a overview of your orders, you can send a ``GET`` request to ``/api/quote/{quoteIdentifier}``.
Your response will look something like:

.. literalinclude:: ../code_examples/Quote/Retrieving_your_quote_details/retrieving_your_quote_details.json
   :language: JSON
   :linenos:

***************
Required fields
***************

.. csv-table::
   :header: "Field", "Type", "Description"
   :widths: 30,10,60

   "``quoteIdentifier``","``string``","Quote number or uuid."


**********************************
Example request quote details
**********************************
The following PHP code can be used to retrieve quote details. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page.

.. literalinclude:: ../code_examples/Quote/Retrieving_your_quote_details/Retrieving_your_quote_details.php
   :language: PHP
   :linenos: