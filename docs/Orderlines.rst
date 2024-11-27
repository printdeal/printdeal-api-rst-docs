.. _orderlines:

Orderlines
==========

.. toctree::
   :hidden:

   Orderlines/Adding_file

You can use regular HTTP methods to communicate with the API about orderlines:
    
- A ``POST`` request to ``/api/orderlines/{orderlineId}/files`` will allow you to create a new file to an orderline.
    See :ref:`Adding file<adding_file>` for more information.
    Please note: You will only be able to add file to an orderline for orders created through API.
    