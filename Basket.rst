.. _basket:

Basket
======

The basket endpoint is the API version of the basket or cart functionality of a website. You can call this endpoint before you create an order, if you want to know if all the products you assembled are valid, and what the total shipping costs will be.

**********************
Example request + code
**********************

The JSON needed for this endpoint should contain an address, and an array of products. See this example below.

.. literalinclude:: ../docs/code_examples/Basket/example.json
   :language: JSON
   :linenos:

The following code can be used to make this request. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page.

.. literalinclude:: ../docs/code_examples/Basket/example.php
   :language: PHP
   :linenos:

****************
Possible returns
****************
If the call is successful (all products are valid, and we ship to the provided delivery address) you will receive a price for all products, the shipping costs and a total price.

.. literalinclude:: ../docs/code_examples/Basket/return-values.json
   :language: JSON
   :linenos:

In case the call is not succesful the following scenario's can happen:

.. csv-table::
   :header: "Code", "Error message", "Reason"
   :widths: 10,40,50

   "``400``","Bad data, one or few products are not valid, or address is not valid.","Invalid address have been supplied or one of the products is invalid."
   "``401``","Authentication failed","Something is wrong with your authentication headers."
   "``404``","SKU not found","Sku of one or more products cannot be found."
   "``500``","Retrieving shopping car prices failed","Something is going wrong on our backend services, if persists please contact the api mailbox"