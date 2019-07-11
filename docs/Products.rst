.. _products:

Products
========

.. toctree::
   :hidden:

   Products/Categories
   Products/Attribute-values_from_a_category
   Products/Product_combinations
   Products/Validate_product_and_retrieve_price

A product consists of a category and attributes and values. To be able to order a product you need to:

- Retrieve the list of categories with ``GET`` request to ``/api/products/categories``
- Retrieve the available attributes and values with ``GET`` request to ``/api/products/{sku}/attributes``
- Retrieve the possible combinations with ``GET`` request to ``/api/products/{sku}/combinations``
- Validate the product with ``POST`` request to ``/api/products``