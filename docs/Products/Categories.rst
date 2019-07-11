Categories
==========

To retrieve a list of all available categories, send a ``GET`` request to ``/api/products/categories``.
Your response will look like:

.. literalinclude:: ../code_examples/Products/category-list.json
   :language: JSON
   :linenos:

The SKU is used for communicating the type of product you want to order, or need more information about.
You can retrieve the available attributes and values or retrieve all possible combinations of a certain category.

When there are major updates to a category, or we cannot guarantee backwards compatibility of a category, the sku will change.

***************
Example request
***************

The following PHP code can be used to retrieve the available categories.
Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE``
with the User-ID and secret you received on the API-credentials page.

.. literalinclude:: ../code_examples/Products/categories.php
   :language: PHP
   :linenos: