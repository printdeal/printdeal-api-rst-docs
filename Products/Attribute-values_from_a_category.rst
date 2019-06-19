.. _attribute/values_from_a_category:

Attribute/values from a category
==========================================

To know which attributes and values are available from a category, you can send a ``GET`` request to ``/api/products/{sku}/attributes``.

This will return a response similar to:

.. literalinclude:: ../code_examples/Products/attribute-list.json
   :language: JSON
   :linenos:

To order a specific product you can retrieve the possible combinations, and create an order.

***************
Example request
***************

The following PHP code can be used to retrieve the available attributes and values. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page.


.. literalinclude:: ../code_examples/Products/attributes.php
   :language: PHP
   :linenos:

******************
Dynamic Attributes
******************

We have improved the functionality for “dynamic attributes” (we call them “externals”). Dynamic attributes are free input fields, for example, height & width for a banner, or a variable quantity. It is now possible to get them through the API. Each category has a fixed “externals” key. This key is always present, even if a category does not have externals. In this case, the value will be an empty array.

We also added validation rules for some of the externals. Not all rules are exported however, unfortunately our validation engine is too complex to show all the rules in a meaningful and understandable way. But basic rules like the minimum and maximum value for the externals “width”, “height”, and “quantity” are now exported in most cases. If you find externals without rules, than that means that either there are no rules defined, or the rule is too complex to show in the API. In this case, use trial and error to find valid products.

Criteria can also be present on external rules. These are values that must be present in the selection for this rule to be active. Take the following example below. The rule “width_max” (maximum width) with value “310” is active when “Budget PVC” is selected. But when “Flag fabric” is selected, the value for “width_max” is 5000.

.. literalinclude:: ../code_examples/Products/dynamic-attributes.json
   :language: JSON
   :linenos: